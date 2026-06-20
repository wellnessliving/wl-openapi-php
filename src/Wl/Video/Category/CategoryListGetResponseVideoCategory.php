<?php

namespace WlSdk\Wl\Video\Category;

class CategoryListGetResponseVideoCategory
{
    /**
     * Determines whether the video category can be deleted.
     *
     * @var bool|null
     */
    public ?bool $can_delete = null;

    /**
     * The number of videos.
     *
     * @var int|null
     */
    public ?int $i_video = null;

    /**
     * The key of the video category.
     *
     * @var string|null
     */
    public ?string $k_video_category = null;

    /**
     * The string key of the video category.
     *
     * @var string|null
     */
    public ?string $k_video_category_full = null;

    /**
     * The title of the category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->can_delete = isset($data['can_delete']) ? (bool)$data['can_delete'] : null;
        $this->i_video = isset($data['i_video']) ? (int)$data['i_video'] : null;
        $this->k_video_category = isset($data['k_video_category']) ? (string)$data['k_video_category'] : null;
        $this->k_video_category_full = isset($data['k_video_category_full']) ? (string)$data['k_video_category_full'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
