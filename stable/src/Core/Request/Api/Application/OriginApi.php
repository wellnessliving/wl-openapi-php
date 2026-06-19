<?php
namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Gets list of all sites, where usage of the API is allowed for the current application.
 */
class OriginApi
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
     * A list of origins.

An associative array where the key is the origin URL of the site where API calls can be made,
 and the value is the additional API domain used to make API requests to the WellnessLiving server.
`null` if not yet initialized.
     *
     * @var string[]|null
     */
    public ?array $a_list = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of all sites, where usage of the API is allowed for the current application.
     *
     * Returns the list of allowed CORS origins for the current API application, where each key is an
     * origin URL and each value is an optional API domain used to proxy requests from that origin.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_list: A list of origins.

An associative array where the key is the origin URL of the site where API calls can be made,
 and the value is the additional API domain used to make API requests to the WellnessLiving server.
`null` if not yet initialized.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Request/Api/Application/Origin.json', $this->params(), 'GET');
    }

    /**
     * Allows access to API for all sites, which are given in the list.
     *
     * Accepts a list of origin URLs (with optional API domain overrides), validates each URL and domain,
     * inserts or updates the entries in the allowed origins for the current application, then clears the origin
     * cache.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Core/Request/Api/Application/Origin.json', $this->params(), 'PUT');
    }

    /**
     * Restricts access to API for all sites, which are given in the list.
     *
     * Accepts a list of origin URLs (with optional API domain overrides), validates each URL, and removes
     * the matching entries from the allowed origins for the current application, then clears the origin cache.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Core/Request/Api/Application/Origin.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_list' => $this->a_list,
            ],
            static fn($v) => $v !== null
        );
    }
}
