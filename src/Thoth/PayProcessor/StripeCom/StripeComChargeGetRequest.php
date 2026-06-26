<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

class StripeComChargeGetRequest
{
    /**
     * ID of the currency.
     *
     * One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * ID of the actor.
     *
     * One of {@link \WlSdk\RsPayActorSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * Key of the business.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant to get the public key for.
     *
     * Primary key in RsBusinessMerchantSql.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Charge id to get data for.
     *
     * @var string|null
     */
    public ?string $s_charge = null;

    /**
     * Payment owner user key.
     *
     * @var string|null
     */
    public ?string $uid_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_currency' => $this->id_currency,
            'id_pay_actor' => $this->id_pay_actor,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            's_charge' => $this->s_charge,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
