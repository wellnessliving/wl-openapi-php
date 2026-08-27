<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGroupGetResponsePurchaseItem
{
    /**
     * Additional item configurations.
     *       Only `a_event_list` is
     *      expected in the request, and only `k_class` and `uid` are accepted in every its entry.
     *      Prices, discounts, and taxes can not be overridden here: this booking flow is never
     *      authenticated as a staff member, so such fields are stripped from the input. In the
     *      response `a_event_list` comes back recomputed, and `a_registration_fee_list`,
     *      `m_checkout`, and `m_deferred` are added.
     *
     * @var PurchaseElementGroupGetResponsePurchaseItemConfig|null
     */
    public ?PurchaseElementGroupGetResponsePurchaseItemConfig $a_config = null;

    /**
     * Number of sessions which are booked simultaneously.
     *      Make sense only when `id_purchase_item` = {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int|null
     */
    public ?int $i_session = null;

    /**
     * The ID of the purchase item type. One of {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the purchase item in the database.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the user's prize.
     *  Not empty only if the user wants to make a free visit from the prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * Installment template key.
     *  This property is optional.
     *  * can only be set for the purchase option which supports installment plan.
     *  * `null` if installment plan doesn't exist for bought item;
     *  * `0` if installment plan doesn't selected for bought item from the list of installment plans.
     *  NOTE:
     *  * Calculations of discounts and taxes for installment plans are for demonstration purposes only!
     *  * Installment is not an independent purchase item and has no discounts or taxes.
     *  * Installment is a division of the final amount (with taxes and discounts), of some purchase option, into N
     * parts.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The key of the reward prize.
     *  Not empty only if the user wants to redeem prize and use it to pay for a visit.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * The key of the user for whom the purchase item is being bought.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? new PurchaseElementGroupGetResponsePurchaseItemConfig((array)$data['a_config']) : null;
        $this->i_session = isset($data['i_session']) ? (int)$data['i_session'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
        $this->k_pay_installment_template = isset($data['k_pay_installment_template']) ? (string)$data['k_pay_installment_template'] : null;
        $this->k_reward_prize = isset($data['k_reward_prize']) ? (string)$data['k_reward_prize'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
