<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Builds a single-item purchase list from the scalar input fields and delegates to the parent for price calculation.
 */
class PurchaseElementApi
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
     * Date/time of session is booking.

`null` until initialized.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The number of sessions which are booked simultaneously.

Required when `id_purchase_item` = [RsPurchaseItemSid::CLASS_PERIOD](#/components/schemas/RsPurchaseItemSid).
     *
     * @var int|null
     */
    public ?int $i_session = null;

    /**
     * The ID of the purchase item type. One of [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid).
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The key of the purchase item in the database.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the location in which the purchase is made.
This is also the booking process location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user's prize.
Not empty only if the user wants to make a free visit from the prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * Installment template key.
This property is optional.

* can only be set for the purchase option which supports installment plan.
  
* `null` if installment plan doesn't exist for bought item;
* `0` if installment plan doesn't selected for bought item from the list of installment plans.

NOTE:
* Calculations of discounts and taxes for installment plans are for demonstration purposes only!
* Installment is not an independent purchase item and has no discounts or taxes.
* Installment is a division of the final amount (with taxes and discounts), of some purchase option, into N
parts.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The key of the reward prize.
Not empty only if the user wants to redeem prize and use it to pay for a visit.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

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
     * Builds a single-item purchase list from the scalar input fields and delegates to the parent for price calculation.
     *
     * Constructs a one-element `a_purchase_item` array from the individual scalar GET fields (purchase item type,
     * item key, session count, prize keys, and installment template), then delegates to
     * `get()` to compute the price breakdown for that item.
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
        return $this->client->request('/Wl/Book/Process/Purchase/PurchaseElement.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dtu_date' => $this->dtu_date,
            'i_session' => $this->i_session,
            'id_purchase_item' => $this->id_purchase_item,
            'k_class_period' => $this->k_class_period,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_login_prize' => $this->k_login_prize,
            'k_pay_installment_template' => $this->k_pay_installment_template,
            'k_reward_prize' => $this->k_reward_prize,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
