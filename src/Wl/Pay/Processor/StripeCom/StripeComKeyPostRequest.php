<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

class StripeComKeyPostRequest
{
    /**
     * ID of the actor.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant to get the public key for.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

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
            'id_pay_actor' => $this->id_pay_actor,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
