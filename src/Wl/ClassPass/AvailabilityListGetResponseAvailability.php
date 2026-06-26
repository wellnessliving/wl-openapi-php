<?php

namespace WlSdk\Wl\ClassPass;

class AvailabilityListGetResponseAvailability
{
    /**
     * No description.
     *
     * @var AvailabilityListGetResponseAvailabilityDiscrete[]|null
     */
    public ?array $a_discrete = null;

    /**
     * No description.
     *
     * @var array[]|array|null
     */
    public $a_window = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $dtu_last_update = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_type = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_bookable_id = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_service_id = null;

    public function __construct(array $data)
    {
        $this->a_discrete = isset($data['a_discrete']) ? array_map(static fn ($item) => new AvailabilityListGetResponseAvailabilityDiscrete((array)$item), (array)$data['a_discrete']) : null;
        $this->a_window = $data['a_window'] ?? null;
        $this->dtu_last_update = isset($data['dtu_last_update']) ? (array)$data['dtu_last_update'] : null;
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->s_bookable_id = isset($data['s_bookable_id']) ? (string)$data['s_bookable_id'] : null;
        $this->s_service_id = isset($data['s_service_id']) ? (string)$data['s_service_id'] : null;
    }
}
