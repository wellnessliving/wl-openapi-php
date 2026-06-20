<?php
namespace WlSdk\Wl\Video;

class VideoListGetResponseListVideoTag
{
    /**
     * Video tag key.
     *
     * @var string|null
     */
    public ?string $k_video_tag = null;

    /**
     * Tag name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_video_tag = isset($data['k_video_tag']) ? (string)$data['k_video_tag'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
