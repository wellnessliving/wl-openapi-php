<?php
namespace WlSdk\Thoth\ReportCore\Generator;

/**
 * Response from POST
 */
class QueryPostResponse
{
    /**
     * A list of dynamic fields in this report.
     * 
     * Copy of result of {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
     *
     * @var array[]|null
     */
    public $a_dynamic = null;

    /**
     * A list of fields in this report.
     * 
     * This array is effectively a title row for table that is returned in
     * [QueryApi](/Thoth/ReportCore/Generator/Query.json).
     *
     * @var string[]|null
     */
    public ?array $a_field = null;

    /**
     * Report data.
     * 
     * This is an indexed array in which one row is an indexed array also.
     * 
     * Indexes of the columns correspond columns in [QueryApi](/Thoth/ReportCore/Generator/Query.json).
     *
     * @var string[][]|null
     */
    public ?array $a_row = null;

    /**
     * A list of stale rows.
     * 
     * This array is only filled in when report is being updated now, or due to some other reasons contains mixed
     * version
     * data (some data from the latest generation, and other from one of previous generations).
     * 
     * Value is index in [QueryApi](/Thoth/ReportCore/Generator/Query.json).
     * 
     * If a row is not listed here, it is of the latest version.
     *
     * @var int[]|null
     */
    public ?array $a_stale = null;

    /**
     * Warning list of the report.
     *
     * @var string[]|null
     */
    public ?array $a_warning = null;

    /**
     * Date and time when this report has completed generation.
     * 
     * `null` if generation of this report is not completed.
     * 
     * See ReportStorageListSql.`dtu_complete` for additional details.
     *
     * @var string|null
     */
    public ?string $dtu_complete = null;

    /**
     * Date and time when this report was put on generation queue.
     * 
     * Effectively, this is the time when a user clicked to view this report.
     * 
     * See ReportStorageListSql.`dtu_queue` for additional details.
     *
     * @var string|null
     */
    public ?string $dtu_queue = null;

    /**
     * Date and time when generation of this report has started.
     * 
     * `null` if generation of this report is not started.
     * 
     * See ReportStorageListSql.`dtu_start` for additional details.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * A CAS (compare-and-swap) number that allows to track changes in the report storage.
     * 
     * This number is changed every time content of the report gets updated.
     * If this number is not changed, the content is not updated.
     * 
     * Copy of ReportStorageListSql.`i_cas_change`.
     *
     * @var int|null
     */
    public ?int $i_cas_change = null;

    /**
     * Status of the report.
     * 
     * One of {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorStatusSid} constants.
     *
     * @var int|null
     */
    public ?int $id_report_status = null;

    /**
     * Key of this report.
     * 
     * This key may be used to subscribe to report changes with {@link \WlSdk\Core\WebSocket\ChannelBroadcast}.
     *
     * @var string|null
     */
    public ?string $s_report = null;

    /**
     * Text of an error message that occurred during generation of the report.
     * 
     * An empty string in no error messages have occurred.
     *
     * @var string|null
     */
    public ?string $text_error = null;

    public function __construct(array $data)
    {
        $this->a_dynamic = $data['a_dynamic'] ?? null;
        $this->a_field = isset($data['a_field']) ? (array)$data['a_field'] : null;
        $this->a_row = isset($data['a_row']) ? (array)$data['a_row'] : null;
        $this->a_stale = isset($data['a_stale']) ? (array)$data['a_stale'] : null;
        $this->a_warning = isset($data['a_warning']) ? (array)$data['a_warning'] : null;
        $this->dtu_complete = isset($data['dtu_complete']) ? (string)$data['dtu_complete'] : null;
        $this->dtu_queue = isset($data['dtu_queue']) ? (string)$data['dtu_queue'] : null;
        $this->dtu_start = isset($data['dtu_start']) ? (string)$data['dtu_start'] : null;
        $this->i_cas_change = isset($data['i_cas_change']) ? (int)$data['i_cas_change'] : null;
        $this->id_report_status = isset($data['id_report_status']) ? (int)$data['id_report_status'] : null;
        $this->s_report = isset($data['s_report']) ? (string)$data['s_report'] : null;
        $this->text_error = isset($data['text_error']) ? (string)$data['text_error'] : null;
    }
}
