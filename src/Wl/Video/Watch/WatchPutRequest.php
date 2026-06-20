<?php
namespace WlSdk\Wl\Video\Watch;

class WatchPutRequest
{
    /**
     * The current time in seconds the user is at in the video.
     *
     * @var int|null
     */
    public ?int $i_current_time = null;

    /**
     * The duration in seconds the user has watched the video for.
     *
     * @var int|null
     */
    public ?int $i_watched = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video watch key.
     *
     * @var string|null
     */
    public ?string $k_video_watch = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_current_time' => $this->i_current_time,
            'i_watched' => $this->i_watched,
            'k_business' => $this->k_business,
            'k_video_watch' => $this->k_video_watch,
            ],
            static fn($v) => $v !== null
        );
    }
}
