<?php
namespace WlSdk\Wl\Skin\Application;

use WlSdk\WlSdkClient;

/**
 * Returns the application customisation skin data for the given business.
 */
class SkinApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether customization billing is confirmed.

`true` to finish delete process even if customization fee will be billed.
`false` if customization fee should be required for confirmation.
     *
     * @var bool|null
     */
    public ?bool $is_billing_confirm = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the application customisation skin data for the given business.
     *
     * Returns the full set of White Label Achieve app customization settings (colors, logos, fonts,
     * and other branding options) for the given business, along with a flag indicating whether
     * the business account has an active paid customization subscription.
     *
     * @return array Parsed JSON response data.
     *   - array a_skin: Skin information.
     *   - bool has_pay: Determines current business account contains amount for the application customisation.
     *   - string s_link: Name of the link to default application skin.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Skin/Application/Skin.json', $this->params(), 'GET');
    }

    /**
     * Reset customisation form of client application.
     *
     * Resets the Achieve app customization skin to default values for the given business.
     * If billing is required for the reset, a confirmation flag must be provided, and a
     * customization fee may be scheduled.
     *
     * @return array Parsed JSON response data.
     *   - string s_link: Name of the link to default application skin.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Skin/Application/Skin.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'is_billing_confirm' => $this->is_billing_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
