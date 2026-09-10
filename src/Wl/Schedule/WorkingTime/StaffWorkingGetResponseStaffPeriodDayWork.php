<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

class StaffWorkingGetResponseStaffPeriodDayWork
{
    /**
     * Services that affect this hours. Primary keys in  table.
     * `null` if affects all services.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

    /**
     * Date when created period.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * End time. In seconds.
     *
     * @var int|null
     */
    public ?int $i_end = null;

    /**
     * Start time. In seconds.
     *
     * @var int|null
     */
    public ?int $i_start = null;

    /**
     * Primary key of location in  table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Note to available/unavailable time.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Info about when break time. Be present only in unavailable time.
     *
     * @var string|null
     */
    public ?string $html_break_note = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->i_end = isset($data['i_end']) ? (int)$data['i_end'] : null;
        $this->i_start = isset($data['i_start']) ? (int)$data['i_start'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->html_break_note = isset($data['html_break_note']) ? (string)$data['html_break_note'] : null;
    }
}
