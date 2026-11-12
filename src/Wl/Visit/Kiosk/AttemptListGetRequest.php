<?php

namespace WlSdk\Wl\Visit\Kiosk;

class AttemptListGetRequest
{
    /**
     * Local day at the location, in MySQL format, for example `2026-11-05`.
     *
     * `null` for the current day at the location.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

    /**
     * Time in UTC and MySQL format, for example `2026-11-05 14:30:00`: only the attempts made at this time or
     * later
     * are listed.
     *
     * `null` to list the whole day. The totals always count the whole day.
     *
     * @var string|null
     */
    public ?string $dtu_since = null;

    /**
     * Page of the list, from `0`. A page holds 100 attempts.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location of the kiosk.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_date' => $this->dl_date,
            'dtu_since' => $this->dtu_since,
            'i_page' => $this->i_page,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
