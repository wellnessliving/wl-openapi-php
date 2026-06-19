<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Calculates pricing information for a batch of appointment bookings, including taxes, discounts, surcharges, and
 * per-provider totals.
 */
class PaymentMultipleApi
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
     * The booking process information:


Set this field value for GET requests.
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
     * The ID of the source mode. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The gift card code.
     *
     * @var string|null
     */
    public ?string $text_coupon_code = null;

    /**
     * The discount code.
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
    public ?array $a_book_data_post = null;

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
     * Calculates pricing information for a batch of appointment bookings, including taxes, discounts, surcharges, and per-provider totals.
     *
     * Returns the full pricing breakdown for all providers specified in the booking data, including
     *  available Purchase Options, applicable discount codes, surcharge amounts, and the final total
     *  for each provider. Intended to be called before submitting payment so the client side can
     *  display a pricing summary.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_promotion_data: No description.
     *   - array[] a_purchase: No description.
     *   - string[] a_total: The list of amounts to pay for appointments from the batch, with taxes and without surcharges.
     *   - string k_location: Location to show available appointment booking schedule.
     *   - string m_coupon: The gift card amount.
     *   - string m_discount: The discount amount.
     *   - string m_surcharge: Surcharge amount calculated for credit cards (Virtual Terminal and Card Swiper).
     *   - string m_surcharge_ach: Surcharge amount calculated for money transfers from account: ACH, Direct Entry.
     *   - string m_tax: The amount of tax to pay.
     *   - string m_total: The price of the service, with taxes and without surcharges.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Payment/PaymentMultiple.json', $this->params(), 'GET');
    }

    /**
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and multi-provider booking data, charges the client for all appointments
     *  or selected Purchase Options in the batch, and records the transactions. Requires the client
     *  to be authenticated and each provider entry to include a valid service or asset key with date.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_login_prize: The list of redeemed prizes.
     *   - int[] a_pay: The payment type for the appointment. One of the [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid) constants.
     *   - string[][] a_purchase_item: The keys of purchased items.

The first level of the array is the list of appointments from the batch.
The second level of the array is the list of items purchased for this appointment.
     *   - string k_login_activity_purchase: Key of the activity for the purchase made. This will be empty if no purchase has been made.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Payment/PaymentMultiple.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_book_data' => $this->a_book_data,
            'a_uid' => $this->a_uid,
            'id_mode' => $this->id_mode,
            'is_walk_in' => $this->is_walk_in,
            'k_location' => $this->k_location,
            'text_coupon_code' => $this->text_coupon_code,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            'a_book_data_post' => $this->a_book_data_post,
            'a_pay_form' => $this->a_pay_form,
            'a_quiz_response' => $this->a_quiz_response,
            ],
            static fn($v) => $v !== null
        );
    }
}
