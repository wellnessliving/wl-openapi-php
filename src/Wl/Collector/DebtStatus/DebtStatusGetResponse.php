<?php

namespace WlSdk\Wl\Collector\DebtStatus;

/**
 * Response from GET
 */
class DebtStatusGetResponse
{
    /**
     * Date and time when user sent to collection agency.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $dtl_sent = null;

    /**
     * Date and time since user in given debt status.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $dtl_since = null;

    /**
     * Date and time when user sent to collection agency.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $dtu_sent = null;

    /**
     * Date and time since user in given debt status.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $dtu_since = null;

    /**
     * Number of days past due.
     *
     * @var int|null
     */
    public ?int $i_day_due = null;

    /**
     * The currency for which status should be retrieved.
     * One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * `null` if status should be retrieved for current business currency.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * The debt status ID of the client.
     * One of {@link \WlSdk\Wl\Collector\DebtStatusSid} constants.
     *
     * `0` if collections are not supported or status could not be defined.
     *
     * @var int|null
     * @see \WlSdk\Wl\Collector\DebtStatusSid
     */
    public ?int $id_status = null;

    /**
     * Active debt key. Primary key in CollectorDebtSql.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $k_collector_debt = null;

    /**
     * Current debt amount.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $m_debt_current = null;

    /**
     * Future debt amount.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $m_debt_future = null;

    /**
     * Additional note to the debt.
     *
     * `null` if user has no debts.
     *
     * @var string|null
     */
    public ?string $text_comment = null;

    public function __construct(array $data)
    {
        $this->dtl_sent = isset($data['dtl_sent']) ? (string)$data['dtl_sent'] : null;
        $this->dtl_since = isset($data['dtl_since']) ? (string)$data['dtl_since'] : null;
        $this->dtu_sent = isset($data['dtu_sent']) ? (string)$data['dtu_sent'] : null;
        $this->dtu_since = isset($data['dtu_since']) ? (string)$data['dtu_since'] : null;
        $this->i_day_due = isset($data['i_day_due']) ? (int)$data['i_day_due'] : null;
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->k_collector_debt = isset($data['k_collector_debt']) ? (string)$data['k_collector_debt'] : null;
        $this->m_debt_current = isset($data['m_debt_current']) ? (string)$data['m_debt_current'] : null;
        $this->m_debt_future = isset($data['m_debt_future']) ? (string)$data['m_debt_future'] : null;
        $this->text_comment = isset($data['text_comment']) ? (string)$data['text_comment'] : null;
    }
}
