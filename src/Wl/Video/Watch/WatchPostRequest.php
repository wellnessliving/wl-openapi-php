<?php

namespace WlSdk\Wl\Video\Watch;

class WatchPostRequest
{
    /**
     * The current time in seconds the user is at in the video.
     *
     * @var int|null
     */
    public ?int $i_current_time = null;

    /**
     * The source ID.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video string key:
     * * [Deprecated] String key in old format.
     * * String key in new format.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_current_time' => $this->i_current_time,
            'id_source' => $this->id_source,
            'k_business' => $this->k_business,
            'k_video' => $this->k_video,
            ],
            static fn ($v) => $v !== null
        );
    }
}
