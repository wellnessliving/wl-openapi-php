<?php

namespace WlSdk\Wl\Resource\Type;

class ResourceTypeListGetResponseResourceType
{
    /**
     * Type of the resource.
     *
     * 1 - if this is a bookable asset.
     * 2 - if this is an off-site location with its own address.
     *
     * @var int|null
     */
    public ?int $id_category = null;

    /**
     * Whether resource type is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Resource type key, primary key in RsResourceTypeSql.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Resource type title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_category = isset($data['id_category']) ? (int)$data['id_category'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
