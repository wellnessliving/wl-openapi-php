<?php

namespace WlSdk\Thoth\WlPay\Form;

class EnvironmentUserGetRequest
{
    /**
     * The key of the business to retrieve payment information for.
     *
     * This will be `0` if not set yet.
     * An empty string or `null` if payments are performed with the WellnessLiving system merchant.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the currency to retrieve payment information for.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * The key of the location to retrieve payment information for.
     *
     * This will be `0` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user ID to retrieve payment information for.
     *
     * `null` if not defined.
     *
     * @var string|null
     */
    public ?string $uid_owner = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_currency' => $this->k_currency,
            'k_location' => $this->k_location,
            'uid_owner' => $this->uid_owner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
