<?php
namespace WlSdk\Wl\Video\Category;

/**
 * Response from GET
 */
class CategoryElementGetResponse
{
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
     * The category's placement in the business's list of categories.
     *
     * @var int|null
     */
    public ?int $i_order = null;

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
     * The category key.
     *
     * @var string|null
     */
    public ?string $k_video_category = null;

    /**
     * The category name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->is_cloud_recording = isset($data['is_cloud_recording']) ? (bool)$data['is_cloud_recording'] : null;
        $this->is_login_type = isset($data['is_login_type']) ? (bool)$data['is_login_type'] : null;
        $this->is_member_group = isset($data['is_member_group']) ? (bool)$data['is_member_group'] : null;
        $this->k_video_category = isset($data['k_video_category']) ? (string)$data['k_video_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
