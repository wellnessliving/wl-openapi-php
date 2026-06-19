<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns the pricing breakdown for a list of purchase items, applying applicable discounts and taxes.
 */
class PurchaseElementListApi
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
     * A list of purchase items to get information for. Every element has the next keys:
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item_request = null;

    /**
     * The key of the business in which the purchase is made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location in which the purchase is made.
This is also the booking process location.

This will be `null` if not set yet or if the location can't be defined for some reason.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The discount code.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The key of the user making the purchase.
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
     * Returns the pricing breakdown for a list of purchase items, applying applicable discounts and taxes.
     *
     * Validates the business, location, and user, then for each item in `a_purchase_item_request` computes the
     * price,
     * applicable discount code reduction, login-type discount, and taxes, and returns per-item cost, discount,
     * price, tax, and subtotal amounts in `a_purchase_item_result`.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_purchase_item_result: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Purchase/PurchaseElementList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_purchase_item_request' => $this->a_purchase_item_request,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
