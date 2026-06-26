<?php

namespace WlSdk\Wl\Business\RegionTravel\ControlPanel;

class TravelStatusGetResponseStepList
{
    /**
     * Travel step class ID. ID for one of {@link \WlSdk\Wl\Business\RegionTravel\TravelStepAbstract} classes.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\RegionTravel\TravelStepAbstract
     */
    public ?int $cid_travel_step = null;

    /**
     * Datetime for step start. Directly from TravelStepSql
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * Datetime for step status change. Directly from TravelStepSql
     *
     * @var string|null
     */
    public ?string $dtu_status = null;

    /**
     * Step status ID. One of {@link \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid
     */
    public ?int $id_step_status = null;

    /**
     * Step status SID. One of {@link \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid} constants.
     *
     * @var string|null
     */
    public ?string $sid_step_status = null;

    /**
     * Translated step status title. Title for one of {@link \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid}
     * constants.
     *
     * @var string|null
     */
    public ?string $text_step_status = null;

    /**
     * Step class name for one of {@link \WlSdk\Wl\Business\RegionTravel\TravelStepAbstract} classes.
     *
     * @var string|null
     */
    public ?string $text_class = null;

    /**
     * Translated step title. Title for one of {@link \WlSdk\Wl\Business\RegionTravel\TravelStepAbstract} CIDs.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Time that has elapsed since start of step in hh:mm:ss format. Empty string if there is no start time.
     *
     * @var string|null
     */
    public ?string $text_time_start = null;

    /**
     * Status time in hh:mm:ss format. Depends on the state of `id_step_status`.
     *   <ul>
     * <li>Time between step start and step status change for {@link
     * \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid} and {@link
     * \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid}.</li>
     * <li>Time elapsed since status change for {@link \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid}.</li>
     * <li>Empty string for {@link \WlSdk\Wl\Business\RegionTravel\TravelStepStatusSid}.</li>
     *   </ul>
     *
     * @var string|null
     */
    public ?string $text_time_status = null;

    public function __construct(array $data)
    {
        $this->cid_travel_step = isset($data['cid_travel_step']) ? (int)$data['cid_travel_step'] : null;
        $this->dtu_start = isset($data['dtu_start']) ? (string)$data['dtu_start'] : null;
        $this->dtu_status = isset($data['dtu_status']) ? (string)$data['dtu_status'] : null;
        $this->id_step_status = isset($data['id_step_status']) ? (int)$data['id_step_status'] : null;
        $this->sid_step_status = isset($data['sid_step_status']) ? (string)$data['sid_step_status'] : null;
        $this->text_step_status = isset($data['text_step_status']) ? (string)$data['text_step_status'] : null;
        $this->text_class = isset($data['text_class']) ? (string)$data['text_class'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_time_start = isset($data['text_time_start']) ? (string)$data['text_time_start'] : null;
        $this->text_time_status = isset($data['text_time_status']) ? (string)$data['text_time_status'] : null;
    }
}
