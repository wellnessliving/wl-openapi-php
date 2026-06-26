<?php

namespace WlSdk\Wl\Visit\VisitHistoricalCount;

class VisitHistoricalCountPostRequest
{
    /**
     * Count of visits.
     *
     * @var int|null
     */
    public ?int $i_visit = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_visit' => $this->i_visit,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
