<?php

namespace WlSdk\Wl\Franchise\Fee;

class FeeElementPostRequest
{
    /**
     * Franchisor business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Franchise fee key.
     *
     * `null` when creating new fee.
     *
     * @var string|null
     */
    public ?string $k_franchise_fee = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_franchise_fee' => $this->k_franchise_fee,
            'a_apply' => $this->a_apply,
            'a_location' => $this->a_location,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'f_fee' => $this->f_fee,
            'i_day' => $this->i_day,
            'id_date_week' => $this->id_date_week,
            'id_fee_schedule' => $this->id_fee_schedule,
            'id_fee_type' => $this->id_fee_type,
            'id_frequency' => $this->id_frequency,
            'm_min' => $this->m_min,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
