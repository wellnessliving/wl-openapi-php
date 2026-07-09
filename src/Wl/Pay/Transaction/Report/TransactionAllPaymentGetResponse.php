<?php

namespace WlSdk\Wl\Pay\Transaction\Report;

/**
 * Response from GET
 */
class TransactionAllPaymentGetResponse
{
    /**
     * A list of fields in the report.
     *
     * This array is effectively a title row for the table returned in {@link
     * \WlSdk\Thoth\WlPay\Transaction\Report\TransactionAllPaymentGetResponse::$a_row}.
     *
     * @var string[]|null
     */
    public ?array $a_field = null;

    /**
     * The report data.
     *
     * This is an indexed array where each element is also an indexed array representing one report row.
     * Column positions in each row correspond to the field names in {@link
     * \WlSdk\Thoth\WlPay\Transaction\Report\TransactionAllPaymentGetResponse::$a_field}.
     *
     * Known columns (use {@link \WlSdk\Thoth\WlPay\Transaction\Report\TransactionAllPaymentGetResponse::$a_field}
     * to resolve their positional indexes):
     *
     * @var TransactionAllPaymentGetResponseRow[]|null
     */
    public ?array $a_row = null;

    /**
     * The warning list of the report.
     *
     * @var string[]|null
     */
    public ?array $a_warning = null;

    /**
     * The date and time if the report has completed generation. Otherwise, this will be `null`.
     *
     * @var string|null
     */
    public ?string $dtu_complete = null;

    /**
     * The date and time if this report has been put in the generation queue. Otherwise, this will be `null`.
     *
     * @var string|null
     */
    public ?string $dtu_queue = null;

    /**
     * The date and time if generation of this report has started. Otherwise, this will be `null`.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * The report status.
     *
     * @var int|null
     * @see \WlSdk\Wl\Report\Generator\ReportGeneratorStatusSid
     */
    public ?int $id_report_status = null;

    /**
     * Determines whether to show more rows in the report.
     *
     * If `true`, there are more report rows to get. Otherwise, `false` to indicate that all rows in the report
     * have
     * already been retrieved.
     *
     * @var bool|null
     */
    public ?bool $is_more = null;

    /**
     * Determines whether the report is complete.
     *
     * If the report is accessed on the current day, or is returning a result that was cached on the current day,
     * it could
     * be incomplete as not all the transactions for the day are present.
     *
     * If `true`, the report has been completed. Otherwise, `false`.
     *
     * @var bool|null
     */
    public ?bool $is_report_complete = null;

    public function __construct(array $data)
    {
        $this->a_field = isset($data['a_field']) ? (array)$data['a_field'] : null;
        $this->a_row = isset($data['a_row']) ? array_map(static fn ($item) => new TransactionAllPaymentGetResponseRow((array)$item), (array)$data['a_row']) : null;
        $this->a_warning = isset($data['a_warning']) ? (array)$data['a_warning'] : null;
        $this->dtu_complete = isset($data['dtu_complete']) ? (string)$data['dtu_complete'] : null;
        $this->dtu_queue = isset($data['dtu_queue']) ? (string)$data['dtu_queue'] : null;
        $this->dtu_start = isset($data['dtu_start']) ? (string)$data['dtu_start'] : null;
        $this->id_report_status = isset($data['id_report_status']) ? (int)$data['id_report_status'] : null;
        $this->is_more = isset($data['is_more']) ? (bool)$data['is_more'] : null;
        $this->is_report_complete = isset($data['is_report_complete']) ? (bool)$data['is_report_complete'] : null;
    }
}
