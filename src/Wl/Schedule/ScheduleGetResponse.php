<?php

namespace WlSdk\Wl\Schedule;

/**
 * Response from GET
 */
class ScheduleGetResponse
{
    /**
     * Schedule info. Prepares only in the backend mode.
     *
     * @var array[]|null
     */
    public ?array $a_result = null;

    /**
     * Schedule session data.
     *
     * @var array|null
     */
    public ?array $a_schedule = null;

    /**
     * Parsed template of the schedule.
     *
     * @var string|null
     */
    public ?string $html_template = null;

    public function __construct(array $data)
    {
        $this->a_result = isset($data['a_result']) ? (array)$data['a_result'] : null;
        $this->a_schedule = isset($data['a_schedule']) ? (array)$data['a_schedule'] : null;
        $this->html_template = isset($data['html_template']) ? (string)$data['html_template'] : null;
    }
}
