<?php
namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Gets schedule of business [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) for day
 * [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json).
 */
class ScheduleListByTokenApi
{
    /**
     * Configuration options for schedule.
     * Key is option name, value is boolean.
     * 
     * May contain the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_config = null;

    /**
     * The end date of the range from which the list of schedule sessions should be retrieved.
     * 
     * This will be `null` if the range has no end date. If this value is used,
     * [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) should not be set.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The start date of the range from which the list of scheduled sessions should be retrieved.
     * 
     * This will be `null` if the range has no start date. If this value is used,
     * [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) should not be set.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The date of the sessions in Coordinated Universal Time (UTC) and MySQL format.
     * 
     * If this value is used, then
     * [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) and
     * [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) should not be set.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The security token.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets schedule of business [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) for day
[ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json).
     *
     * Returns all classes and appointments scheduled for the given business on the specified date,
     * sorted chronologically. Supports both single-day and date-range modes, and includes full
     * session details such as staff, visit counts, assets, and class images.
     *
     * @return ScheduleListByTokenApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ScheduleListByTokenApiGetResponse
    {
        return new ScheduleListByTokenApiGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/ScheduleListByToken.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'text_token' => $this->text_token,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
