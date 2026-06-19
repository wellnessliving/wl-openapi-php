<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Returns the schedule and HTML for the Self Check-In Web App for the given user.
 */
class ReceptionScheduleApi
{
    /**
     * The business key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the Self Check-In Web App.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The key of the user to show the schedule for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The date and time of the visit in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The key of the appointment to check in.
     * 
     * If `null`, this is class visit or gym visit.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The key of the class schedule to check in.
     * 
     * If `null`, this is an appointment visit or gym visit.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the schedule and HTML for the Self Check-In Web App for the given user.
     *
     * Returns the rendered schedule HTML, a structured list of upcoming sessions, and a map of service type
     * HTML classes for the authenticated user at the given location.
     *
     * @return ReceptionScheduleApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReceptionScheduleApiGetResponse
    {
        return new ReceptionScheduleApiGetResponse($this->client->request('/Wl/Reception/Application/ReceptionSchedule.json', $this->params(), 'GET'));
    }

    /**
     * Performs check-in for the given user and returns the confirmation HTML and data.
     *
     * Books or checks the user into the specified class period or appointment, then returns confirmation HTML
     * and structured data including payment info, assigned assets, and visit counts.
     *
     * @return ReceptionScheduleApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ReceptionScheduleApiPostResponse
    {
        return new ReceptionScheduleApiPostResponse($this->client->request('/Wl/Reception/Application/ReceptionSchedule.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            'dtu_date' => $this->dtu_date,
            'k_appointment' => $this->k_appointment,
            'k_class_period' => $this->k_class_period,
            ],
            static fn($v) => $v !== null
        );
    }
}
