<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

use WlSdk\WlSdkClient;

/**
 * Returns the credential data for the application.
 */
class CredentialApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The CID of the credential.
     *
     * @var int|null
     */
    public ?int $cid_credential = null;

    /**
     * An array with the credential.
     *
     * @var string|null
     */
    public ?string $json_credential = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the credential data for the application.
     *
     * Accepts a credential CID identifying the credential type, loads the credential stored for the current
     * application, and returns it as a JSON-encoded object containing only public fields.
     *
     * @return array Parsed JSON response data.
     *   - string json_credential: An array with the credential.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $this->params(), 'GET');
    }

    /**
     * Saves the credential for the application.
     *
     * Accepts a credential CID and a JSON-encoded object with credential fields, validates the data,
     * and stores or replaces the credential for the current application.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the specified credential for the application.
     *
     * Accepts a credential CID identifying the credential type (such as Google or Facebook), resolves
     * the corresponding credential for the current application, and removes it from the database.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'cid_credential' => $this->cid_credential,
            'json_credential' => $this->json_credential,
            ],
            static fn($v) => $v !== null
        );
    }
}
