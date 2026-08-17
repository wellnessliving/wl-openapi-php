<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetResponseEnrollmentFee
{
    /**
     * If `true`, user has paid tuition fee. If `false`, user is scheduled to pay tuition fee.
     *     If a user did not pay and does not have a scheduled payment, the key is not present.
     *
     * @var string|null
     */
    public ?string $is_paid = null;

    public function __construct(array $data)
    {
        $this->is_paid = isset($data['is_paid']) ? (string)$data['is_paid'] : null;
    }
}
