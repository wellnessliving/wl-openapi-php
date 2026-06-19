<?php
namespace WlSdk\Wl\Business\Account\Subscription\Achieve;

use WlSdk\WlSdkClient;

/**
 * Returns the Achieve subscription plan flags (free and white-label) for the given business.
 */
class AchieveSubscriptionApi
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
     * Business key to check Achieve app subscription plan.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the Achieve subscription plan flags (free and white-label) for the given business.
     *
     * Used to determine which features and branding options are available in the Achieve mobile app for a
     * business. For franchisees, the franchisor's subscription is used. Call this before rendering any
     * Achieve-specific UI that depends on the plan tier.
     *
     * @return array Parsed JSON response data.
     *   - bool is_free: If Achieve app has free subscription plan is `true`, otherwise (white label, professional) - `false`.
     *   - bool is_white_label: If Achieve app has white label subscription plan is `true`, otherwise (free, professional) - `false`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Account/Subscription/Achieve/AchieveSubscription.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
