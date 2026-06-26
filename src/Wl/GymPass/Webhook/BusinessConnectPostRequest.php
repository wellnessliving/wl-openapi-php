<?php

namespace WlSdk\Wl\GymPass\Webhook;

class BusinessConnectPostRequest
{
    /**
     * Event type.
     *
     * @var array|null
     */
    public ?array $id_event_type = null;

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
     * Event data.
     *
     * @var array|null
     */
    public ?array $o_event_data = null;

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
            'id_event_type' => $this->id_event_type,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'o_event_data' => $this->o_event_data,
            's_gym_id' => $this->s_gym_id,
            's_product_id' => $this->s_product_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
