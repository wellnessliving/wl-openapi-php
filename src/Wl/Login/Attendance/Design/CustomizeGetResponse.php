<?php

namespace WlSdk\Wl\Login\Attendance\Design;

/**
 * Response from GET
 */
class CustomizeGetResponse
{
    /**
     * Field settings of attendance list.
     * The key is settings name (sid constant from {@link \WlSdk\Wl\Login\Attendance\Design\FieldListSid}) and the
     * value is
     * settings value.
     *
     * @var int[]|null
     */
    public ?array $a_field = null;

    public function __construct(array $data)
    {
        $this->a_field = isset($data['a_field']) ? (array)$data['a_field'] : null;
    }
}
