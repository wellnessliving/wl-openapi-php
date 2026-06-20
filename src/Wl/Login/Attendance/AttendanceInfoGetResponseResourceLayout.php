<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoGetResponseResourceLayout
{
    /**
     * List of clients who occupy assets of class.
     * It is a double nesting array.
     * Keys -  Sub keys - asset index.
     * Values - sub array with keys:
     *
     * @var AttendanceInfoGetResponseResourceLayoutClient|null
     */
    public ?AttendanceInfoGetResponseResourceLayoutClient $a_client = null;

    /**
     * Key of asset.
     *
     * @var string[]|null
     */
    public ?array $a_resource_available = null;

    /**
     * Key of layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /**
     * Title of asset category.
     *
     * @var string|null
     */
    public ?string $text_resource_type = null;

    public function __construct(array $data)
    {
        $this->a_client = isset($data['a_client']) ? new AttendanceInfoGetResponseResourceLayoutClient((array)$data['a_client']) : null;
        $this->a_resource_available = isset($data['a_resource_available']) ? (array)$data['a_resource_available'] : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
        $this->text_resource_type = isset($data['text_resource_type']) ? (string)$data['text_resource_type'] : null;
    }
}
