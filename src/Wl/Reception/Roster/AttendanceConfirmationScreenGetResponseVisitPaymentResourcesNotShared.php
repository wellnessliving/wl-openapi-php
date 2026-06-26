<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetResponseVisitPaymentResourcesNotShared
{
    /**
     * The busy resource index.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * The resource name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
