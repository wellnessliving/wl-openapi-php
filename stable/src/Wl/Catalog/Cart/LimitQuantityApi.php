<?php
namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Checks limit quantity and whether a promotion can be added to the cart.
 */
class LimitQuantityApi
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
     * The cart items list with the next structure:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * The business in which the purchase will be made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The promotion key to add to the cart.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks limit quantity and whether a promotion can be added to the cart.
     *
     * Used in the checkout flow to prevent a client from purchasing more passes than the promotion allows.
     * Returns the limit, how many the client has already bought, and how many are currently in the cart so
     * the UI can display a clear message if the limit would be exceeded.
     *
     * @return array Parsed JSON response data.
     *   - int i_purchase_already: The quantity if promotions have already been purchased by the current user.

If `true`, the quantity exceeded. Otherwise, this will be `false`.

This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
     *   - int i_purchase_current: The current quantity of a promotion with the quantity limit in the cart.

This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
     *   - int i_quantity_limit: The quantity limit of the promotion.

This will be `null` if not set yet or if there's no limit quantity.
     *   - bool is_limit_exceeded: Determines whether the limit quantity has been exceeded.

If `true`, the limit quantity has been exceeded. Otherwise, this will be `false`.

This will be `null` if not set yet.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/Cart/LimitQuantity.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_item' => $this->a_item,
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
