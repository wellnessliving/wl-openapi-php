<?php

namespace WlSdk\Wl\Business\RegionTravel\ControlPanel;

/**
 * Response from GET
 */
class TravelStatusGetResponse
{
    /**
     * List of businesses that started transferring the earliest (max 100). Each element contains:
     *
     * @var TravelStatusGetResponseBusinessEarlyData[]|null
     */
    public ?array $a_business_early_data = null;

    /**
     * Data for displaying a status message about business travel. Contains:
     *
     * @var TravelStatusGetResponseStatusMessage|null
     */
    public ?TravelStatusGetResponseStatusMessage $a_status_message = null;

    /**
     * Data for each step recorded in the business travel process.
     * Steps are ordered by (ascending): start date (zero dates last), status change date, then {@link
     * \WlSdk\Wl\Business\RegionTravel\TravelStepAbstract} CID.
     * Steps do not exist if business never travelled.
     * Each element represents a travel step and contains:
     *
     * @var TravelStatusGetResponseStepList|null
     */
    public ?TravelStatusGetResponseStepList $a_step_list = null;

    /**
     * Business travelling information is included if available.
     * Data taken from TravelInfoSql.
     *
     * If business did not travel yet, data is unavailable and the object is empty.
     *
     * @var array|null
     */
    public ?array $a_travel_data = null;

    /**
     * Current count of simultaneous business transfers.
     *
     * @var int|null
     */
    public ?int $i_travel_current = null;

    /**
     * Maximum number of simultaneous business transfers.
     *
     * @var int|null
     */
    public ?int $i_travel_max = null;

    /**
     * Amazon region of the business.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\Region\AmazonRegionSid
     */
    public ?int $id_region = null;

    /**
     * `true` if business passed quick check. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_quick_check_pass = null;

    /**
     * Message for why quick check failed.
     *
     * @var string|null
     */
    public ?string $text_quick_check_fail = null;

    public function __construct(array $data)
    {
        $this->a_business_early_data = isset($data['a_business_early_data']) ? array_map(static fn ($item) => new TravelStatusGetResponseBusinessEarlyData((array)$item), (array)$data['a_business_early_data']) : null;
        $this->a_status_message = isset($data['a_status_message']) ? new TravelStatusGetResponseStatusMessage((array)$data['a_status_message']) : null;
        $this->a_step_list = isset($data['a_step_list']) ? new TravelStatusGetResponseStepList((array)$data['a_step_list']) : null;
        $this->a_travel_data = isset($data['a_travel_data']) ? (array)$data['a_travel_data'] : null;
        $this->i_travel_current = isset($data['i_travel_current']) ? (int)$data['i_travel_current'] : null;
        $this->i_travel_max = isset($data['i_travel_max']) ? (int)$data['i_travel_max'] : null;
        $this->id_region = isset($data['id_region']) ? (int)$data['id_region'] : null;
        $this->is_quick_check_pass = isset($data['is_quick_check_pass']) ? (bool)$data['is_quick_check_pass'] : null;
        $this->text_quick_check_fail = isset($data['text_quick_check_fail']) ? (string)$data['text_quick_check_fail'] : null;
    }
}
