<?php
namespace WlSdk\Wl\Classes\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns list of promotions that can be used to pay for the class / event.
 */
class ClassPromotionApi
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
     * Determines whether the class is an event or not.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * `true` - the login type or group restrictions are ignored and all pricing options will be returned. This will
require staff or admin access level.

`false` - the API should return only pricing options, which are available for the current user.
     *
     * @var bool|null
     */
    public ?bool $is_login_type_ignore = null;

    /**
     * `true` - promotions should only be returned if they're related to the given class or event.

`false` - all promotions should be returned, even if they aren't related to the given class or event.
     *
     * @var bool|null
     */
    public ?bool $is_related_only = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class key.

This refers to the class or event with which you want to connect the promotions. This will be `null` or `0` if you
need to return a list of promotions for an uncreated class or event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of promotions that can be used to pay for the class / event.
     *
     * Used in the booking flow to show clients which of their existing passes or memberships cover the
     * selected class. Also returns the default promotion to pre-select so the client does not have to
     * choose manually when there is an obvious match.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_promotion: No description.
     *   - string k_promotion_default: The default promotion key.

This will be `null` if `k_class` wasn't provided, or if the class has no default promotion.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Classes/Promotion/ClassPromotion.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_event' => $this->is_event,
            'is_login_type_ignore' => $this->is_login_type_ignore,
            'is_related_only' => $this->is_related_only,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            ],
            static fn($v) => $v !== null
        );
    }
}
