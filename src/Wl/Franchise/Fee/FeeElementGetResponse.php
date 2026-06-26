<?php

namespace WlSdk\Wl\Franchise\Fee;

/**
 * Response from GET
 */
class FeeElementGetResponse
{
    /**
     * List of {@link \WlSdk\Wl\Franchise\Fee\FeeApplySid}.
     *
     * Used only when `id_fee_type` is {@link \WlSdk\Wl\Franchise\Fee\FeeTypeSid}, otherwise `null`.
     *
     * @var int[]|null
     */
    public ?array $a_apply = null;

    /**
     * List of locations where fee is applied.
     *
     * Key is location key.
     * Value is override of the fee rate(percent/flat).
     *
     * Can be empty in case when we load list of fees by location in FranchiseFee::listGet() method.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * End date of the fee.
     * This is a date of last active day when fee can be applied.
     * `null` in a case fee should be active infinitely.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of the fee.
     * This is a date since which fees applied to franchisee purchases.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Fee rate.
     * Percent or flat rate.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $f_fee = null;

    /**
     * Specific day of the month when fee is applied.
     *
     * Specified when `id_frequency` is {@link \WlSdk\ADurationSid}.
     * And when `id_fee_schedule` is {@link \WlSdk\Wl\Franchise\Fee\FeeScheduleSid}.
     *
     * In others cases `null`.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * Week day ID.
     * Specified when `id_frequency` is:
     * * {@link \WlSdk\ADurationSid}.
     * * {@link \WlSdk\ADurationSid}.
     * And when `id_fee_schedule` is {@link \WlSdk\Wl\Franchise\Fee\FeeScheduleSid}.
     *
     * In others cases `null`.
     *
     * @var int|null
     * @see \WlSdk\ADateWeekSid
     */
    public ?int $id_date_week = null;

    /**
     * Schedule type ID.
     *
     * `null` if not initialized.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Fee\FeeScheduleSid
     */
    public ?int $id_fee_schedule = null;

    /**
     * Fee type ID.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Fee\FeeTypeSid
     */
    public ?int $id_fee_type = null;

    /**
     * Frequency ID.
     * Used when `id_fee_schedule` is {@link \WlSdk\Wl\Franchise\Fee\FeeScheduleSid}.
     *
     * In others cases `null`.
     *
     * @var int|null
     */
    public ?int $id_frequency = null;

    /**
     * Minimum amount of the fee.
     *
     * Set only when `id_fee_type` is {@link \WlSdk\Wl\Franchise\Fee\FeeTypeSid}, otherwise `null`.
     *
     * @var string|null
     */
    public ?string $m_min = null;

    /**
     * Name of the fee.
     * Maximum length is FeeEntity::FEE_TITLE_MAX.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_apply = isset($data['a_apply']) ? (array)$data['a_apply'] : null;
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->f_fee = isset($data['f_fee']) ? (string)$data['f_fee'] : null;
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
        $this->id_date_week = isset($data['id_date_week']) ? (int)$data['id_date_week'] : null;
        $this->id_fee_schedule = isset($data['id_fee_schedule']) ? (int)$data['id_fee_schedule'] : null;
        $this->id_fee_type = isset($data['id_fee_type']) ? (int)$data['id_fee_type'] : null;
        $this->id_frequency = isset($data['id_frequency']) ? (int)$data['id_frequency'] : null;
        $this->m_min = isset($data['m_min']) ? (string)$data['m_min'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
