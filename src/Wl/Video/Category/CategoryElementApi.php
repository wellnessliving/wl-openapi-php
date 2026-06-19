<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video category.
 */
class CategoryElementApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the data for the specified video category.
     *
     * Returns the title, sort order, access restriction flags (by login type and member group),
     * and whether this category is designated as the cloud recording destination for the business.
     *
     * @return CategoryElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CategoryElementApiGetResponse
    {
        return new CategoryElementApiGetResponse($this->client->request('/Wl/Video/Category/CategoryElement.json', $this->params(), 'GET'));
    }

    /**
     * Creates or updates a video category.
     *
     * Saves the category title and access restriction settings. When no category key is supplied,
     * a new category is created; when an existing key is supplied, that category is updated.
     * Requires backend access with the video library management privilege.
     *
     * @return CategoryElementApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): CategoryElementApiPutResponse
    {
        return new CategoryElementApiPutResponse($this->client->request('/Wl/Video/Category/CategoryElement.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes the specified video category.
     *
     * Permanently removes the video category and its localized CMS records. Cannot be deleted
     * if the category is currently configured as the cloud recording destination for the business.
     *
     * @return CategoryElementApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): CategoryElementApiDeleteResponse
    {
        return new CategoryElementApiDeleteResponse($this->client->request('/Wl/Video/Category/CategoryElement.json', $this->params(), 'DELETE'));
    }

    private function params(): array
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
            static fn($v) => $v !== null
        );
    }
}
