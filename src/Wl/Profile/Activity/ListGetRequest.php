<?php
namespace WlSdk\Wl\Profile\Activity;

class ListGetRequest
{
    /**
     * Ending date of the date range. Optional.
     * 
     * This is local business timezone date. This day is included in the result.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Starting date of the date range. Optional.
     * 
     *  This is local business timezone date. This day is included in the result.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the client to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
