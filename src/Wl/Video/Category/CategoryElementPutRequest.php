<?php

namespace WlSdk\Wl\Video\Category;

class CategoryElementPutRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The category key.
     *
     * @var string|null
     */
    public ?string $k_video_category = null;

    /**
     * A list of client and member types who can access videos from the category.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * A list of member groups who can access videos from the category.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * This will be `true` if the video category is for cloud session recordings. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_cloud_recording = null;

    /**
     * This will be `true` if some client or member types can grant access to the video category. Otherwise, this
     * will be
     * `false`.
     *
     * @var bool|null
     */
    public ?bool $is_login_type = null;

    /**
     * This will be `true` if some member groups can grant access to the video category.
     * Otherwise, this will be `false` if no member groups can grant access to the video category.
     *
     * @var bool|null
     */
    public ?bool $is_member_group = null;

    /**
     * The category name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_video_category' => $this->k_video_category,
            'a_login_type' => $this->a_login_type,
            'a_member_group' => $this->a_member_group,
            'is_cloud_recording' => $this->is_cloud_recording,
            'is_login_type' => $this->is_login_type,
            'is_member_group' => $this->is_member_group,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
