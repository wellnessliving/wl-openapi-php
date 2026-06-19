<?php
namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * Gets information about subscription.
 */
class SubscriptionInfoApi
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
     * CID of the subscription information of which is requested.
     *
     * @var int|null
     */
    public ?int $cid_subscription = null;

    /**
     * Business key for which subscription information is requested.
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
     * Gets information about subscription.
     *
     * Used in the backend settings UI to read the current state of a business subscription (e.g., Achieve or
     * another product). Returns whether the subscription is active, the current plan tier, and the business
     * locale. Requires backend access to the business.
     *
     * @return array Parsed JSON response data.
     *   - int id_locale: Locale ID of the business which subscription information is requested for.
     *   - int id_plan: No description.
     *   - bool is_active: Whether subscription is active.

`true` if subscription is active, `false` otherwise.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Account/Subscription/SubscriptionInfo.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'cid_subscription' => $this->cid_subscription,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
