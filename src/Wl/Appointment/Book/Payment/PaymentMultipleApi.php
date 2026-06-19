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
     * The booking process information:
     * 
     * 
     * Set this field value for GET requests.
     *
     * @var array[]|null
     */
    public ?array $a_book_data = null;

    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
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
     * 
     * This field is used if the client books for himself or for the relative.
     * 
     * This field is incorrect to use for guest booking since in this case the client will be checked as a
     * relative.
     * 
     * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
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
     * Keys are quiz keys. 
     * Values are quiz response keys.
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
     * @return PaymentMultipleApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PaymentMultipleApiGetResponse
    {
        return new PaymentMultipleApiGetResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentMultiple.json', $this->params(), 'GET'));
    }

    /**
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and multi-provider booking data, charges the client for all appointments
     *  or selected Purchase Options in the batch, and records the transactions. Requires the client
     *  to be authenticated and each provider entry to include a valid service or asset key with date.
     *
     * @return PaymentMultipleApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PaymentMultipleApiPostResponse
    {
        return new PaymentMultipleApiPostResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentMultiple.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
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
