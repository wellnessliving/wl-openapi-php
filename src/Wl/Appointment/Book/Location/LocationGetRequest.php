<?php

namespace WlSdk\Wl\Appointment\Book\Location;

class LocationGetRequest
{
    /**
     * ID of class tab type.
     *
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $id_class_tab = null;

    /**
     * `true` - return all service categories of certain location;
     * `false` - return only service categories which has staff members and are bound to certain book tab.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * ID of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of class tab.
     *
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * ID of user to show information for. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_class_tab' => $this->id_class_tab,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_class_tab' => $this->k_class_tab,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
