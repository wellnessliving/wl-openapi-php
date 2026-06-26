<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Response from POST
 */
class SubscriptionIntendPostResponse
{
    /**
     * Subscription discount data.
     *
     * `null` in a case no discount considered.
     *
     * @var array|null
     */
    public ?array $a_discount = null;

    /**
     * Contains payment plan information for intended changes.
     *
     * @var array|null
     */
    public ?array $a_plan = null;

    /**
     * Payment prorate data, if the intended subscription changes require payment recalculation.
     *
     * `null` in a case no prorate considered.
     *
     * @var array|null
     */
    public ?array $a_prorate = null;

    /**
     * Subscription trial period data.
     *
     * `null` in a case no trial considered.
     *
     * @var array|null
     */
    public ?array $a_trial = null;

    /**
     * Number of the entities for which the payment intended to be processed.
     * Depending on subscription type different entity used. See `id_payment_entity`.
     *
     * @var int|null
     */
    public ?int $i_payment_entity = null;

    /**
     * Currency ID within which intend would be processed.
     *
     * @var int|null
     */
    public ?int $id_currency = null;

    /**
     * Type of the entities for which the payment intended to be processed.
     * One of {@link \WlSdk\Wl\Business\Account\Subscription\PaymentSid} constants
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\PaymentSid
     */
    public ?int $id_payment_entity = null;

    /**
     * ID of the upgrade action intended to be applied. One of {@link
     * \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid} const.
     *
     * `null` if plan upgrade is not intended to be.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid
     */
    public ?int $id_upgrade = null;

    /**
     * Title of the subscription intended to be changed.
     *
     * @var string|null
     */
    public ?string $text_subscription = null;

    public function __construct(array $data)
    {
        $this->a_discount = isset($data['a_discount']) ? (array)$data['a_discount'] : null;
        $this->a_plan = isset($data['a_plan']) ? (array)$data['a_plan'] : null;
        $this->a_prorate = isset($data['a_prorate']) ? (array)$data['a_prorate'] : null;
        $this->a_trial = isset($data['a_trial']) ? (array)$data['a_trial'] : null;
        $this->i_payment_entity = isset($data['i_payment_entity']) ? (int)$data['i_payment_entity'] : null;
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->id_payment_entity = isset($data['id_payment_entity']) ? (int)$data['id_payment_entity'] : null;
        $this->id_upgrade = isset($data['id_upgrade']) ? (int)$data['id_upgrade'] : null;
        $this->text_subscription = isset($data['text_subscription']) ? (string)$data['text_subscription'] : null;
    }
}
