<?php

namespace WlSdk\Wl\Video\Watch;

/**
 * Response from POST
 */
class WatchPostResponse
{
    /**
     * The video watch key.
     *
     * @var string|null
     */
    public ?string $k_video_watch = null;

    public function __construct(array $data)
    {
        $this->k_video_watch = isset($data['k_video_watch']) ? (string)$data['k_video_watch'] : null;
    }
}
