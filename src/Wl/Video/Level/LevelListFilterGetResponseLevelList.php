<?php

namespace WlSdk\Wl\Video\Level;

class LevelListFilterGetResponseLevelList
{
    /**
     * The video level key.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * The video level title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_video_level = isset($data['k_video_level']) ? (string)$data['k_video_level'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
