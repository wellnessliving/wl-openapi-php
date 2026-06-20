<?php

namespace WlSdk\Wl\Video\Level;

/**
 * Response from POST
 */
class LevelPostResponse
{
    /**
     * The video level key.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    public function __construct(array $data)
    {
        $this->k_video_level = isset($data['k_video_level']) ? (string)$data['k_video_level'] : null;
    }
}
