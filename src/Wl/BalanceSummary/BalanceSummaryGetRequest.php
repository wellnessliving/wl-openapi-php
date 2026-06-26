<?php

namespace WlSdk\Wl\BalanceSummary;

class BalanceSummaryGetRequest
{
    /**
     * End date exclusively to retrieve account balance values.
     *
     * `null` if no need to get opening balance.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The key of the business.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
