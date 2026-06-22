<?php

namespace WlSdk\Wl\Collector;

class DebtTransactionGetRequest
{
    /**
     * If set, this is the end of the date window. Only debt payments added before or on this date will be shown.
     *
     * If left `null` and `dl_start` has been specified only debt payments added after the start date will be
     * returned.
     * If left `null` and `dl_start` is also `null`, this will return debt payments from the previous month.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * If set, this is the start of the date window. Only debt payments added on or after this date will be shown.
     *
     * If left `null` and `dl_end` has been specified, this will return debt payments since the beginning of time.
     * If left `null` and `dl_end` is also `null`, this will return debt payments from the previous month.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * If `true`, debt payments from test businesses will be returned. Otherwise, this will be `false` if only
     * debt payments from real businesses will be returned.
     *
     * @var bool|null
     */
    public ?bool $is_test = null;

    /**
     * The business key for which debt payments should be returned.
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
            'is_test' => $this->is_test,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
