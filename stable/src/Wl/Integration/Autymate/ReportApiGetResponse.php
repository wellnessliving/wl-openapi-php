<?php
namespace WlSdk\Wl\Integration\Autymate;

/**
 * Response from GET
 */
class ReportApiGetResponse
{
    /**
     * The list of fields in this report.
     * 
     * This array is effectively a title row for table that is returned in `a_row`.
     *
     * @var string[]|null
     */
    public ?array $a_field = null;

    /**
     * The report data.
     * 
     * This is an indexed array in which one row is an indexed array also.
     * 
     * Indexes of the columns correspond to columns in `a_field`.
     *
     * @var string[][]|null
     */
    public ?array $a_row = null;

    /**
     * The warning list of the report, if applicable.
     *
     * @var string[]|null
     */
    public ?array $a_warning = null;

    /**
     * The date and time when this report has completed generation.
     * 
     * `null` if generation of this report isn't completed.
     *
     * @var string|null
     */
    public ?string $dtu_complete = null;

    /**
     * The date and time when this report was put in the generation queue.
     * 
     * Effectively, this is the time when a user clicked to view this report or the report for this day was first
     * called.
     *
     * @var string|null
     */
    public ?string $dtu_queue = null;

    /**
     * The date and time when generation of this report was started.
     * 
     * `null` if generation of this report hasn't started.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * The status of the report.
     * 
     * One of the [ReportGeneratorStatusSid](#/components/schemas/Wl.Report.Generator.ReportGeneratorStatusSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_report_status = null;

    /**
     * If `true` then there are more report rows to get. Otherwise, `false` if all rows have been sent.
     *
     * @var bool|null
     */
    public ?bool $is_more = null;

    /**
     * Determines whether this report is complete. If this report is accessed on the current day, or is returning
     * a result that was cached on the current day it could be incomplete as not all the transactions for the day
     * are present.
     * 
     * If `true` then this report will be complete.
     * 
     * If `false` then this report could be incomplete.
     *
     * @var bool|null
     */
    public ?bool $is_report_complete = null;

    public function __construct(array $data)
    {
        $this->a_field = isset($data['a_field']) ? (array)$data['a_field'] : null;
        $this->a_row = isset($data['a_row']) ? (array)$data['a_row'] : null;
        $this->a_warning = isset($data['a_warning']) ? (array)$data['a_warning'] : null;
        $this->dtu_complete = isset($data['dtu_complete']) ? (string)$data['dtu_complete'] : null;
        $this->dtu_queue = isset($data['dtu_queue']) ? (string)$data['dtu_queue'] : null;
        $this->dtu_start = isset($data['dtu_start']) ? (string)$data['dtu_start'] : null;
        $this->id_report_status = isset($data['id_report_status']) ? (int)$data['id_report_status'] : null;
        $this->is_more = isset($data['is_more']) ? (bool)$data['is_more'] : null;
        $this->is_report_complete = isset($data['is_report_complete']) ? (bool)$data['is_report_complete'] : null;
    }
}
