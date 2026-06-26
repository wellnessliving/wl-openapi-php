<?php

namespace WlSdk\Wl\Resource;

/**
 * Response from GET
 */
class ResourceGetResponse
{
    /**
     * Type of the resource.
     *
     * 1 - if this is a bookable asset.
     * 2 - if this is an off-site location with its own address.
     *
     * @var int|null
     * @see \WlSdk\Wl\Resource\ResourceCategoryEnum
     */
    public ?int $id_category = null;

    /**
     * Mode to require amount while booking a resource.
     * * One of the {@link \WlSdk\RsServiceRequireSid} constants.
     * * Copy of the RsResourceSql.`id_service_require`.
     *
     * @var int|null
     * @see \WlSdk\RsServiceRequireSid
     */
    public ?int $id_service_require = null;

    /**
     * Whether booking of the resource required confirmation from staff member.
     * * Copy of RsResourceSql.`is_staff_confirm`.
     *
     * @var bool|null
     */
    public ?bool $is_staff_confirm = null;

    /**
     * Key of the location. Primary key from RsLocationSql table.
     *
     * `null` - if not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Title of the resource.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_category = isset($data['id_category']) ? (int)$data['id_category'] : null;
        $this->id_service_require = isset($data['id_service_require']) ? (int)$data['id_service_require'] : null;
        $this->is_staff_confirm = isset($data['is_staff_confirm']) ? (bool)$data['is_staff_confirm'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
