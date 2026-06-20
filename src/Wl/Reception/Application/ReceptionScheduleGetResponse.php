<?php
namespace WlSdk\Wl\Reception\Application;

/**
 * Response from GET
 */
class ReceptionScheduleGetResponse
{
    /**
     * No description.
     *
     * @var ReceptionScheduleGetResponseClass[]|null
     */
    public ?array $a_class = null;

    /**
     * All types of services that appear in the schedule.
     * Keys are constants from [ServiceSid](#/components/schemas/Wl.Service.ServiceSid). Values are the HTML
     * classes associated with that service.
     *
     * @var int[]|null
     */
    public ?array $a_schedule_class_all = null;

    /**
     * The schedule to be shown in the Self Check-In Web App for the selected user.
     *
     * @var string|null
     */
    public ?string $html_schedule = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? array_map(static fn($item) => new ReceptionScheduleGetResponseClass((array)$item), (array)$data['a_class']) : null;
        $this->a_schedule_class_all = isset($data['a_schedule_class_all']) ? (array)$data['a_schedule_class_all'] : null;
        $this->html_schedule = isset($data['html_schedule']) ? (string)$data['html_schedule'] : null;
    }
}
