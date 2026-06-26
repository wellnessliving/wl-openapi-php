<?php

namespace WlSdk\Wl\Appointment\Wizard\Recurring;

class RecurringListGetResponseDate
{
    /**
     * Session date in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Whether booking is not available for session.
     *
     * @var bool|null
     */
    public ?bool $is_disable = null;

    /**
     * Whether booking for session available only into wait list.
     *
     * @var bool|null
     */
    public ?bool $is_waitlist = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->is_disable = isset($data['is_disable']) ? (bool)$data['is_disable'] : null;
        $this->is_waitlist = isset($data['is_waitlist']) ? (bool)$data['is_waitlist'] : null;
    }
}
