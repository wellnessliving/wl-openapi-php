<?php
namespace WlSdk\Wl\Login\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns the attendance list for a class period or appointment session.
 */
class AttendanceListByTokenApi
{
    /**
     * The local date of the class or event session.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * If `true`, then return the purchase used to pay for session.
     * Otherwise, do not return any purchase information.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_info_return = null;

    /**
     * The appointment key. Not used if requesting information for a class or event session.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key. Not used if requesting information for an appointment.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The security token.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the attendance list for a class period or appointment session.
     *
     * Accepts either a class period key with a local date or an appointment key, validates access and date, and
     * returns
     * the active list, wait list, and confirmed list of attending clients, along with session capacity, wait list
     * limit,
     * and per-client details such as purchase option, visit status, wearables, and quiz responses.
     *
     * @return AttendanceListByTokenApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AttendanceListByTokenApiGetResponse
    {
        return new AttendanceListByTokenApiGetResponse($this->client->request('/Wl/Login/Attendance/AttendanceListByToken.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date_local' => $this->dt_date_local,
            'is_purchase_info_return' => $this->is_purchase_info_return,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
