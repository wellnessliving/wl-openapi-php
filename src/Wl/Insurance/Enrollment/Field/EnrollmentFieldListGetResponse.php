<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

/**
 * Response from GET
 */
class EnrollmentFieldListGetResponse
{
    /**
     * No description.
     *
     * @var EnrollmentFieldListGetResponseFieldList[]|null
     */
    public ?array $a_field_list = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? array_map(static fn($item) => new EnrollmentFieldListGetResponseFieldList((array)$item), (array)$data['a_field_list']) : null;
    }
}
