<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

class StripeComConnectionTokenPostRequest
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
     * Location key that this connection token is scoped to.
     *
     * If you provide a location, the connection token is only usable with smart readers assigned to that location.
     * If you do not provide a location, the connection token is usable with all readers.
     * For Bluetooth readers, the location of a connection token has no effect.
     * This ensures that Bluetooth readers near you are always discoverable.
     *
     * Primary key in the RsLocationSql.
     *
     * `null` if the connection token should be usable with all readers.
     *
     * @var string|null
     */
    public ?string $k_location = null;

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
            'k_location' => $this->k_location,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
