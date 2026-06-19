<?php
namespace WlSdk\Wl\Integration\Saml;

use WlSdk\WlSdkClient;

/**
 * Gets status of the user in business for given list of identifiers.
 */
class SamlUserDeactivationApi
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
     * A list of SAML identifiers.
     *
     * @var string[]|null
     */
    public ?array $a_id = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets status of the user in business for given list of identifiers.
     *
     * Accepts a list of SAML identifier strings and returns a map of each identifier to a boolean indicating
     * whether the corresponding user is active in their associated business. Requests with too many invalid
     * identifiers are rate-limited with a penalty block mechanism.
     *
     * @return array Parsed JSON response data.
     *   - bool[] a_result: The key of the SAML identifier.

This value is `true` if an active user is found in the business, `false` if otherwise.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Integration/Saml/SamlUserDeactivation.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_id' => $this->a_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
