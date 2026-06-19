<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

/**
 * Response from GET
 */
class EnrollmentFieldListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_field_list = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? (array)$data['a_field_list'] : null;
    }
}
