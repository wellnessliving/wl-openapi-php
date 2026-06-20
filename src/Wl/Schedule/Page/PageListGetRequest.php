<?php

namespace WlSdk\Wl\Schedule\Page;

class PageListGetRequest
{
    /**
     * If the date is set, a list of services before this date will be returned.
     * The date and time is in UTC and in MySQL format.
     * If left as `null`, then a list of services that aren't limited to the end date will be returned.
     *
     * @var string|null
     */
    public ?string $dtu_end = null;

    /**
     * If the date is set, a list of services after this date will be returned.
     * The date and time is in UTC and in MySQL format.
     * If left as `null`, then a list of services that aren't limited to the start date will be returned.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * If `true`, then all the client previous visits will be retrieved.
     * If `false` or left as `null`, then all the client upcoming visits will be retrieved.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_end' => $this->dtu_end,
            'dtu_start' => $this->dtu_start,
            'is_past' => $this->is_past,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
