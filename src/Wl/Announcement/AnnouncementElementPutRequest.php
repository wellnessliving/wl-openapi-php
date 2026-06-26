<?php

namespace WlSdk\Wl\Announcement;

class AnnouncementElementPutRequest
{
    /**
     * Announcement key.
     *
     * @var string|null
     */
    public ?string $k_announcement = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` to pin the announcement, `false` to unpin.
     *
     * @var bool|null
     */
    public ?bool $is_pin = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_announcement' => $this->k_announcement,
            'k_business' => $this->k_business,
            'is_pin' => $this->is_pin,
            ],
            static fn ($v) => $v !== null
        );
    }
}
