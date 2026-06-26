<?php

namespace WlSdk\Wl\Announcement;

class AnnouncementElementDeleteRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_announcement' => $this->k_announcement,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
