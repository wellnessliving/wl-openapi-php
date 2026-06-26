<?php

namespace WlSdk\Wl\Service;

/**
 * Response from GET
 */
class ServiceGetResponse
{
    /**
     * Locations where an appointment may be booked.
     * Primary keys in RsServiceSql table.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Service price mode.
     * * One of the {@link \WlSdk\RsServicePriceSid} constants.
     * * Copy of the RsServiceSql.`id_service_price`.
     *
     * @var int|null
     * @see \WlSdk\RsServicePriceSid
     */
    public ?int $id_service_price = null;

    /**
     * Mode to require amount while booking a resource.
     * * One of the {@link \WlSdk\RsServiceRequireSid} constants.
     * * Copy of the RsServiceSql.`id_service_require`.
     *
     * @var int|null
     * @see \WlSdk\RsServiceRequireSid
     */
    public ?int $id_service_require = null;

    /**
     * Whether booking of the service required confirmation from staff member.
     * * Copy of the RsServiceSql.`is_staff_confirm`.
     *
     * @var bool|null
     */
    public ?bool $is_staff_confirm = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->id_service_price = isset($data['id_service_price']) ? (int)$data['id_service_price'] : null;
        $this->id_service_require = isset($data['id_service_require']) ? (int)$data['id_service_require'] : null;
        $this->is_staff_confirm = isset($data['is_staff_confirm']) ? (bool)$data['is_staff_confirm'] : null;
    }
}
