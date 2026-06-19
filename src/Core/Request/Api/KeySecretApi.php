<?php
namespace WlSdk\Core\Request\Api;

use WlSdk\WlSdkClient;

/**
 * Gets a secret key for signing.
 */
class KeySecretApi
{
    /**
     * The CSRF code from the client side.
     *
     * @var string|null
     */
    public ?string $s_csrf = null;

    /**
     * The session key.
     *
     * @var string|null
     */
    public ?string $s_key_session = null;

    /**
     * Alias of `url_origin`.
     *
     * @var string|null
     */
    public ?string $url_domain = null;

    /**
     * Origin for client requests.
     *
     * @var string|null
     */
    public ?string $url_origin = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a secret key for signing.
     *
     * Accepts a CSRF code, a session key, and the client origin URL, validates the session key against
     * the current application, and returns a secret key that the client uses to sign subsequent CORS requests.
     * This endpoint must not be called directly from a browser.
     *
     * @return KeySecretApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): KeySecretApiGetResponse
    {
        return new KeySecretApiGetResponse($this->client->request('/Core/Request/Api/KeySecret.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            's_csrf' => $this->s_csrf,
            's_key_session' => $this->s_key_session,
            'url_domain' => $this->url_domain,
            'url_origin' => $this->url_origin,
            ],
            static fn($v) => $v !== null
        );
    }
}
