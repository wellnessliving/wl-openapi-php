<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassAttendanceResourceType
{
    /**
     * Whether a client picks the asset of this category while booking.
     *
     * @var int|null
     * @see \WlSdk\Wl\Resource\ResourceClientControlSid
     */
    public ?int $id_resource_control = null;

    /**
     * Whether one asset of this category is taken by the whole class or one by every client.
     *
     * @var int|null
     * @see \WlSdk\Wl\Resource\ResourceUseSid
     */
    public ?int $id_resource_use = null;

    /**
     * Key of the category.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    public function __construct(array $data)
    {
        $this->id_resource_control = isset($data['id_resource_control']) ? (int)$data['id_resource_control'] : null;
        $this->id_resource_use = isset($data['id_resource_use']) ? (int)$data['id_resource_use'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
    }
}
