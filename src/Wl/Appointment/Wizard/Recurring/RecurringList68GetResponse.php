<?php

namespace WlSdk\Wl\Appointment\Wizard\Recurring;

/**
 * Response from GET
 */
class RecurringList68GetResponse
{
    /**
     * List of dates, when sessions will be booked.
     *
     * @var RecurringList68GetResponseDate[]|null
     */
    public ?array $a_date = null;

    public function __construct(array $data)
    {
        $this->a_date = isset($data['a_date']) ? array_map(static fn ($item) => new RecurringList68GetResponseDate((array)$item), (array)$data['a_date']) : null;
    }
}
