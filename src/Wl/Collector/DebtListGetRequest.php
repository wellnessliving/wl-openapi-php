<?php

namespace WlSdk\Wl\Collector;

class DebtListGetRequest
{
    /**
     * Date before which debts should be returned.
     *
     * If set, this is the end of the date window. Only debts added before or on this date will be shown.
     *
     * If left `null` and `dl_start` has been specified, only debts added after the start date will be returned.
     * If left `null` and `dl_start` is also `null`, this will return debts from the previous month.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Date since which debts should be returned.
     *
     * If set, this is the start of the date window. Only debts added on or after this date will be shown.
     *
     * If left `null` and `dl_end` has been specified will return debts added since the beginning of time.
     * If left `null` and `dl_end` is also `null`, this will return debts from the previous month.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Defines whether new debts should be returned or only previously sent debts.
     *
     * If `true` then return new debts only.
     * If `false` then return previously sent debts only.
     *
     * @var bool|null
     */
    public ?bool $is_request_debt = null;

    /**
     * Defines whether debts for test or real business should be returned.
     *
     * If `true`, debts from test businesses will be returned. Otherwise, this will be `false` if only
     * debts from real businesses will be returned.
     *
     * @var bool|null
     */
    public ?bool $is_test = null;

    /**
     * The business key for which debts should be returned.
     *
     * Use `null` if debt payments from all businesses should be returned.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'is_request_debt' => $this->is_request_debt,
            'is_test' => $this->is_test,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
