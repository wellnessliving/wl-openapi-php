<?php
namespace WlSdk;

/**
 * WellnessLiving API HTTP client.
 *
 * Handles authentication, request encoding, and error handling.
 * Pass an instance to every generated Api class constructor.
 *
 * @see https://github.com/wellnessliving/wl-sdk-php-v2
 */
class WlSdkClient
{
    /**
     * @var string|null JWT Bearer token for authentication.
     */
    private $token;

    /**
     * @var string API server base URL (no trailing slash).
     */
    private $base_url;

    /**
     * @var int Request timeout in seconds.
     */
    private $timeout;

    /**
     * @param array $options Configuration options:
     *   - string|null token: JWT Bearer token for authentication.
     *   - string base_url: API server base URL.
     *     Default: 'https://staging.wellnessliving.com' (US data center).
     *     Use 'https://demo.wellnessliving.com' for the Australia data center.
     *   - int timeout: Request timeout in seconds. Default: 30.
     */
    public function __construct(array $options = [])
    {
        $this->token = isset($options['token']) ? (string)$options['token'] : null;
        $this->base_url = rtrim(
            isset($options['base_url']) ? (string)$options['base_url'] : 'https://staging.wellnessliving.com',
            '/'
        );
        $timeout = isset($options['timeout']) ? (int)$options['timeout'] : 30;
        $this->timeout = $timeout > 0 ? $timeout : 30;
    }

    /**
     * Sends an HTTP request to the API.
     *
     * GET and HEAD requests encode params as a query string.
     * All other methods encode params as application/x-www-form-urlencoded body.
     *
     * @param string $path Endpoint path (e.g., '/Core/Request/Example.json').
     * @param array $params Query parameters (GET/HEAD) or form body fields (POST/PUT/PATCH/DELETE).
     * @param string $method HTTP method: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', etc.
     * @return array Parsed JSON response data.
     * @throws WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On cURL transport error (network failure, timeout, etc.).
     */
    public function request(string $path, array $params = [], string $method = 'GET'): array
    {
        $method = strtoupper($method);
        $url = $this->base_url . $path;

        $ch = curl_init();
        $headers = ['Accept: application/json'];

        if ($this->token !== null) {
            $headers[] = 'Authorization: Bearer ' . $this->token;
        }

        if ($method === 'GET' || $method === 'HEAD') {
            if (!empty($params)) {
                $url .= '?' . http_build_query($params);
            }
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
            $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        }

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
        } elseif ($method !== 'GET') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        }

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT => 'wl-sdk-php/' . WlSdkInfo::SPEC_VERSION,
        ]);

        $body = curl_exec($ch);
        $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($body === false) {
            throw new \RuntimeException('WlSdk request failed: ' . $curlError);
        }

        $data = json_decode($body, true);

        if ($status < 200 || $status >= 300) {
            $message = 'WlSdk: HTTP ' . $status;
            if (is_array($data) && isset($data['message']) && is_string($data['message'])) {
                $message .= ': ' . $data['message'];
            }
            throw new WlSdkException($message, $status, is_array($data) ? $data : null);
        }

        return is_array($data) ? $data : [];
    }
}
