<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
 */
class PaymentApi
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
     * Information detailing an appointment booking:
     *
     * @var array[]|null
     */
    public ?array $a_book_data = null;

    /**
     * List of user keys to book appointments.
There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The key of source mode. A constant of [ModeSid](#/components/schemas/Wl.Mode.ModeSid).
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The purchase item ID. A constant of [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid).
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * The business key. Currently used only with `k_session_pass` variable.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The item key. Depends on `id_purchase_item` property.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Session pass key.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * Variable price. Is set only during booking an appointment with variable type of the price
  [RsServicePriceSid::VARIES](#/components/schemas/RsServicePriceSid) from spa backend [ModeSid::SPA_BACKEND](#/components/schemas/Wl.Mode.ModeSid).
     *
     * @var string|null
     */
    public ?string $m_variable_price = null;

    /**
     * Service unique key.
Used for model cache.
     *
     * @var string|null
     */
    public ?string $s_unique_key = null;

    /**
     * Gift card code.
     *
     * @var string|null
     */
    public ?string $text_coupon_code = null;

    /**
     * The discount code to be applied to the purchase.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The user key.

This field is used if the client books for himself or for the relative.

This field is incorrect to use for guest booking since in this case the client will be checked as a relative.

In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * List of quiz response keys.
Keys are quiz keys. 
Values are quiz response keys.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
     *
     * Returns the full breakdown of amounts owed for the booking, including available Purchase Options,
     *  applicable discount codes, surcharge amounts, and the final total. Intended to be called before
     *  submitting payment so the client side can display a pricing summary to the user.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - array[] a_promotion_data: No description.
     *   - array[] a_purchase: No description.
     *   - string k_location: Location to show available appointment booking schedule.
     *   - string m_coupon: Gift card amount.
     *   - string m_discount: Discount amount.
     *   - string m_surcharge: Surcharge amount calculated for credit cards (Virtual Terminal and Card Swiper).
     *   - string m_surcharge_ach: Surcharge amount calculated for money transfers from account: ACH, Direct Entry.
     *   - string m_tax: The tax of service.
     *   - string m_total: The total cost of the purchase.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Payment/Payment.json', $this->params(), 'GET');
    }

    /**
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and booking data, charges the client for the appointment or the selected
     *  Purchase Option, and records the transaction. Requires the client to be authenticated and the
     *  booking data to include a valid service or asset key.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - string[] a_purchase_item: The purchase item keys from the database.

This will be `null` if not set yet.
     *   - int id_pay: The payment type for the appointment. A constant of [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid).
     *   - string k_login_activity_purchase: The key of activity of the purchase made.
Empty if no purchase has been made.
     *   - string k_login_prize: Login prize key. In case when appointment paid by reward prize, there is the key of redeemed login prize. Empty otherwise.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Payment/Payment.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_book_data' => $this->a_book_data,
            'a_uid' => $this->a_uid,
            'id_mode' => $this->id_mode,
            'id_purchase_item' => $this->id_purchase_item,
            'is_walk_in' => $this->is_walk_in,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            'm_variable_price' => $this->m_variable_price,
            's_unique_key' => $this->s_unique_key,
            'text_coupon_code' => $this->text_coupon_code,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            'a_pay_form' => $this->a_pay_form,
            'a_quiz_response' => $this->a_quiz_response,
            ],
            static fn($v) => $v !== null
        );
    }
}
