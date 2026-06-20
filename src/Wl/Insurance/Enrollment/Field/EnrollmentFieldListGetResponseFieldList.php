<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

class EnrollmentFieldListGetResponseFieldList
{
    /**
     * The list of reimbursement account fields.
     * If the program doesn't require reimbursement, this list will be empty.
     * Each element has the same structure as elements of `a_field`:
     *
     * @var EnrollmentFieldListGetResponseFieldListAccount|null
     */
    public ?EnrollmentFieldListGetResponseFieldListAccount $a_account = null;

    /**
     * The list of partner enrollment fields. Each element:
     *
     * @var EnrollmentFieldListGetResponseFieldListField|null
     */
    public ?EnrollmentFieldListGetResponseFieldListField $a_field = null;

    public function __construct(array $data)
    {
        $this->a_account = isset($data['a_account']) ? new EnrollmentFieldListGetResponseFieldListAccount((array)$data['a_account']) : null;
        $this->a_field = isset($data['a_field']) ? new EnrollmentFieldListGetResponseFieldListField((array)$data['a_field']) : null;
    }
}
