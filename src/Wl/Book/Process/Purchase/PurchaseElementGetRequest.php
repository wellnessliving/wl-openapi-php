<?php
namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGetRequest
{
    /**
     * Date/time of session is booking.
     * 
     * `null` until initialized.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The number of sessions which are booked simultaneously.
     * 
     * Required when `id_purchase_item` = {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var \WlSdk\RsPurchaseItemSid|null
     */
    public ?\WlSdk\RsPurchaseItemSid $i_session = null;

    /**
     * The ID of the purchase item type. One of {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var \WlSdk\RsPurchaseItemSid|null
     */
    public ?\WlSdk\RsPurchaseItemSid $id_purchase_item = null;

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
     * This is also the booking process location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user's prize.
     * Not empty only if the user wants to make a free visit from the prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * Installment template key.
     * This property is optional.
     * 
     * * can only be set for the purchase option which supports installment plan.
     *   
     * * `null` if installment plan doesn't exist for bought item;
     * * `0` if installment plan doesn't selected for bought item from the list of installment plans.
     * 
     * NOTE:
     * * Calculations of discounts and taxes for installment plans are for demonstration purposes only!
     * * Installment is not an independent purchase item and has no discounts or taxes.
     * * Installment is a division of the final amount (with taxes and discounts), of some purchase option, into N
     * parts.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The key of the reward prize.
     * Not empty only if the user wants to redeem prize and use it to pay for a visit.
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

    public function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'i_session' => $this->i_session?->value,
            'id_purchase_item' => $this->id_purchase_item?->value,
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
