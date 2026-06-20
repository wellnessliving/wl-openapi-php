<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

class PaymentPostGetRequest
{
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
     * The business key. Currently used only with [PaymentApi](/Wl/Appointment/Book/Payment/Payment.json) variable.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The item key. Depends on [PaymentApi](/Wl/Appointment/Book/Payment/Payment.json) property.
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
     *   {@link \WlSdk\RsServicePriceSid} from spa backend {@link \WlSdk\Wl\Mode\ModeSid}.
     *
     * @var string|null
     */
    public ?string $m_variable_price = null;

    /**
     * Service unique key.
     * Used for model cache.
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

    public function params(): array
    {
        return array_filter(
            [
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
            ],
            static fn($v) => $v !== null
        );
    }
}
