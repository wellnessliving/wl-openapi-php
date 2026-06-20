<?php

namespace WlSdk\Wl\Video;

class VideoListGetResponseListVideoCategory
{
    /**
     * Video category key.
     *
     * @var string|null
     */
    public ?string $k_video_category = null;

    /**
     * Category name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_video_category = isset($data['k_video_category']) ? (string)$data['k_video_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
