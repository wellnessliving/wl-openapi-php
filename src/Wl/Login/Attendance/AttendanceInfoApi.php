<?php
namespace WlSdk\Wl\Login\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about a single class period, appointment, or asset session.
 */
class AttendanceInfoApi
{
    /**
     * Start date of the class in MySQL format in local time.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * ID of appointment to get information for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * ID of business to get information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of class period to get information for.
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
     * Returns detailed information about a single class period, appointment, or asset session.
     *
     * Accepts either a class period key with a local date or an appointment key, validates access, and returns
     * scheduling details including title, start and end times, location, staff, assets, service type, and
     * default purchase option information.
     *
     * @return AttendanceInfoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AttendanceInfoApiGetResponse
    {
        return new AttendanceInfoApiGetResponse($this->client->request('/Wl/Login/Attendance/AttendanceInfo.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date_local' => $this->dt_date_local,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn($v) => $v !== null
        );
    }
}
