<?php
namespace WlSdk\Wl\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion by the specified business and promotion keys.
 */
class PromotionApi
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
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the promotion.
     *
     * @var array|mixed|null
     */
    public $o_guest_settings = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns promotion by the specified business and promotion keys.
     *
     * Returns full promotion details including access restrictions, image, pricing, duration, tags,
     * locations, and guest pass settings if applicable.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_promotion: No description.
     *   - array|mixed o_guest_settings: Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the promotion.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Promotion/Promotion.json', $this->params(), 'GET');
    }

    /**
     * Saves promotion data.
     *
     * Accepts the full promotion configuration including title, description, access rules, duration, tags, and
     * guest
     * pass settings, then validates and persists the changes.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Promotion/Promotion.json', $this->params(), 'POST');
    }

    /**
     * Soft-deletes the specified promotion if it has no associated sales.
     *
     * Validates staff privileges and checks that the promotion has not been sold before marking it as removed.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Promotion/Promotion.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            'a_promotion' => $this->a_promotion,
            'o_guest_settings' => $this->o_guest_settings,
            ],
            static fn($v) => $v !== null
        );
    }
}
