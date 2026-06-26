<?php

namespace WlSdk\Wl\Business\Account\Subscription;

class SubscriptionIntendPostRequest
{
    /**
     * Defines whether prorate payment should be taken into account due to intention analyze.
     *
     * In a case of adjustment intention from customer side prorate is automatically applied.
     * To get correct intention result for customer pass `true` here.
     *
     * In a case of adjustment intention from admin side prorate is not applied.
     * To get correct intention result for admin pass `false` here.
     *
     * `null` to use the subscription's default prorate behaviour.
     *
     * @var bool|null
     */
    public ?bool $can_prorate = null;

    /**
     * Defines whether automatic trial period should be taken into account due to intention analyze.
     *
     * In a case of adjustment intention from customer side trial period automatically applied.
     * To get correct intention result for customer pass `true` here.
     *
     * In a case of adjustment intention from admin side trial period not applied.
     * To get correct intention result for admin pass `false` here.
     *
     * @var bool|null
     */
    public ?bool $can_trial = null;

    /**
     * CID of the subscription intended to be changed.
     *
     * @var int|null
     */
    public ?int $cid_subscription = null;

    /**
     * The date on which the subscription is intended to be activated.
     * The activation date should not be specified if the subscription is already active.
     *
     * `null` if activation date is not intended to be specified.
     * `0000-00-00` to use current date in business timezone to as set activation date.
     *
     * @var string|null
     */
    public ?string $dl_activate = null;

    /**
     * The day of the month intended to be used as the regular payment day for recurring charges.
     * This value determines on which day each month the user will be billed.
     *
     * `null` if payment day not intended to be changed.
     *
     * @var int|null
     */
    public ?int $i_payment_day = null;

    /**
     * ID of the subscription payment periodicity intended to be applied. One of {@link
     * \WlSdk\Wl\Business\Account\Subscription\PeriodicitySid} const.
     *
     * `null` if periodicity is not intended to be changed.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\PeriodicitySid
     */
    public ?int $id_periodicity = null;

    /**
     * ID of the subscription plan intended to be applied.
     *
     * `null` if plan is not intended to be changed.
     *
     * @var int|null
     */
    public ?int $id_plan = null;

    /**
     * JSON compressing information about subscription conversion.
     *
     * `null` if conversion is not intended to be changed.
     *
     * @var string|null
     */
    public ?string $json_convert = null;

    /**
     * JSON compressing information about price overrides intended to be applied.
     *
     * `null` if override is not intended to be changed.
     *
     * @var string|null
     */
    public ?string $json_override = null;

    /**
     * The business key within which the subscription is intended to be changed.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'can_prorate' => $this->can_prorate,
            'can_trial' => $this->can_trial,
            'cid_subscription' => $this->cid_subscription,
            'dl_activate' => $this->dl_activate,
            'i_payment_day' => $this->i_payment_day,
            'id_periodicity' => $this->id_periodicity,
            'id_plan' => $this->id_plan,
            'json_convert' => $this->json_convert,
            'json_override' => $this->json_override,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
