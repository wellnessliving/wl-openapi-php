<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

class PaymentPostRequest
{
    /**
     * Information detailing an appointment booking:
     *
     * @var array|null
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
     * The key of source mode. A constant of {@link \WlSdk\Wl\Mode\ModeSid}.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The purchase item ID. A constant of {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var \WlSdk\RsPurchaseItemSid|null
     */
    public ?\WlSdk\RsPurchaseItemSid $id_purchase_item = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

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
     * A list of payment sources to pay with.
     * 
     * Each element has next keys:
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

    public function params(): array
    {
        return array_filter(
            [
            'a_book_data' => $this->a_book_data,
            'a_uid' => $this->a_uid,
            'id_mode' => $this->id_mode,
            'id_purchase_item' => $this->id_purchase_item?->value,
            'is_walk_in' => $this->is_walk_in,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
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
