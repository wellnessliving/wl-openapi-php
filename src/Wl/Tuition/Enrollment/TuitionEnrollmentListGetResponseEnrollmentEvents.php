<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetResponseEnrollmentEvents
{
    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
