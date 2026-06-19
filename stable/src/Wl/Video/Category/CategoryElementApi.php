<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video category.
 */
class CategoryElementApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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
     * This will be `true` if some client or member types can grant access to the video category. Otherwise, this will be
`false`.
     *
     * @var bool|null
     */
    public ?bool $is_login_type = null;

    /**
     * This will be `true` if some member groups can grant access to the video category.
Otherwise, this will be `false` if no member groups can grant access to the video category.
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
     * @return array Parsed JSON response data.
     *   - string[] a_login_type: A list of client and member types who can access videos from the category.
     *   - string[] a_member_group: A list of member groups who can access videos from the category.
     *   - int i_order: The category's placement in the business's list of categories.
     *   - bool is_cloud_recording: This will be `true` if the video category is for cloud session recordings. Otherwise, this will be `false`.
     *   - bool is_login_type: This will be `true` if some client or member types can grant access to the video category. Otherwise, this will be
`false`.
     *   - bool is_member_group: This will be `true` if some member groups can grant access to the video category.
Otherwise, this will be `false` if no member groups can grant access to the video category.
     *   - string k_video_category: The category key.
     *   - string text_title: The category name.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Video/Category/CategoryElement.json', $this->params(), 'GET');
    }

    /**
     * Creates or updates a video category.
     *
     * Saves the category title and access restriction settings. When no category key is supplied,
     * a new category is created; when an existing key is supplied, that category is updated.
     * Requires backend access with the video library management privilege.
     *
     * @return array Parsed JSON response data.
     *   - string k_video_category: The category key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Video/Category/CategoryElement.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the specified video category.
     *
     * Permanently removes the video category and its localized CMS records. Cannot be deleted
     * if the category is currently configured as the cloud recording destination for the business.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Video/Category/CategoryElement.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
