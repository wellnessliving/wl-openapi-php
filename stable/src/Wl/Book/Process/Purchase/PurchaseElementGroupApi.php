<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns the pricing breakdown (totals, taxes, and discounts) for the given list of purchase items.
 */
class PurchaseElementGroupApi
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
     * A list of purchase items. Each item is an associative array with the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Date/time of session is booking.

`null` until initialized.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The key of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The key of the location in which the purchase is made.
This is also the booking process location.
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
     * The key of the current user.
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
     * Returns the pricing breakdown (totals, taxes, and discounts) for the given list of purchase items.
     *
     * Validates each item in `a_purchase_item` (type, key, installment eligibility, and prize applicability),
     * applies discount codes, login-type discounts, and installment adjustments, then accumulates price, subtotal,
     * discount, tax, and cost totals across all items and returns them as result fields.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_tax: A list of taxes for the given purchase options.
Keys - tax keys, values - tax amounts.
     *   - string m_cost: The total cost of the given purchase options.
     *   - string m_discount: The amount of the whole discount for the given purchase options.
     *   - string m_discount_code: The discount amount provided by a discount code for the given purchase options.
     *   - string m_discount_login: The discount amount for the client type for the given purchase options.
     *   - string m_price: The price of the given purchase options (with or without taxes, depending on regional standards).
     *   - string m_subtotal: The amount of subtotal for the given purchase options.
     *   - string m_tax: The amount of taxes for the given purchase options.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Purchase/PurchaseElementGroup.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_purchase_item' => $this->a_purchase_item,
            'dtu_date' => $this->dtu_date,
            'k_class_period' => $this->k_class_period,
            'k_location' => $this->k_location,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
