<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

/**
 * Response from GET
 */
class EnrollmentFieldListGetResponse
{
    /**
     * The partner field list:
     *
     * @var EnrollmentFieldListGetResponseFieldList|null
     */
    public ?EnrollmentFieldListGetResponseFieldList $a_field_list = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? new EnrollmentFieldListGetResponseFieldList((array)$data['a_field_list']) : null;
    }
}
