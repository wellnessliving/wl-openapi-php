<?php

namespace WlSdk\Wl\Appointment\Book\Block;

class EligibleGetResponseIneligible
{
    /**
     * `true` if the age of the client does not fit the age restriction of the add-on.
     *
     * @var bool|null
     */
    public ?bool $is_age = null;

    /**
     * `true` if the type or the group of the client, or the sale online, does not allow the add-on.
     *
     * @var bool|null
     */
    public ?bool $is_restricted = null;

    /**
     * Key of the add-on service.
     *
     * @var string|null
     */
    public ?string $k_service_addon = null;

    public function __construct(array $data)
    {
        $this->is_age = isset($data['is_age']) ? (bool)$data['is_age'] : null;
        $this->is_restricted = isset($data['is_restricted']) ? (bool)$data['is_restricted'] : null;
        $this->k_service_addon = isset($data['k_service_addon']) ? (string)$data['k_service_addon'] : null;
    }
}
