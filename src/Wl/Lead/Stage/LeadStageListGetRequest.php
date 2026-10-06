<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageListGetRequest
{
    /**
     * Determines whether statistics of the stages must be returned.
     *
     * `true` to return the number of clients of every stage in `i_user`,
     * `false` to not return the statistics.
     *
     * @var bool|null
     */
    public ?bool $is_statistic = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_statistic' => $this->is_statistic,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
