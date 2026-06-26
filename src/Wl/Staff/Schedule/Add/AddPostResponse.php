<?php

namespace WlSdk\Wl\Staff\Schedule\Add;

/**
 * Response from POST
 */
class AddPostResponse
{
    /**
     * Staff period key.
     * Primary key from RsStaffPeriodSql.
     *
     * @var string[]|null
     */
    public ?array $a_staff_period = null;

    public function __construct(array $data)
    {
        $this->a_staff_period = isset($data['a_staff_period']) ? (array)$data['a_staff_period'] : null;
    }
}
