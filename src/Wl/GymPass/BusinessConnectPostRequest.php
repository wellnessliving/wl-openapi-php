<?php

namespace WlSdk\Wl\GymPass;

class BusinessConnectPostRequest
{
    /**
     * Business key.
     *
     * `null` in a case value is not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * `null` in a case value is not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Gym ID.
     *
     * `null` in a case value is not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_gym_id = null;

    /**
     * Product ID.
     *
     * `null` in a case value is not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_product_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_gym_id' => $this->s_gym_id,
            's_product_id' => $this->s_product_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
