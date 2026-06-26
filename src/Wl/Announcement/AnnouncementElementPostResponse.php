<?php

namespace WlSdk\Wl\Announcement;

/**
 * Response from POST
 */
class AnnouncementElementPostResponse
{
    /**
     * Announcement key.
     *
     * @var string|null
     */
    public ?string $k_announcement = null;

    public function __construct(array $data)
    {
        $this->k_announcement = isset($data['k_announcement']) ? (string)$data['k_announcement'] : null;
    }
}
