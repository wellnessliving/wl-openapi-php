<?php

namespace WlSdk\Wl\Announcement;

class AnnouncementElementGetRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

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
            'is_backend' => $this->is_backend,
            'k_announcement' => $this->k_announcement,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
