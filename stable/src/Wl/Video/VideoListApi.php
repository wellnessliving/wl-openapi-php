<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Returns the list of videos for the specified business.
 */
class VideoListApi
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
     * The calorie range ascribed to the video to use for the search.
     *
     * @var array[]|null
     */
    public ?array $a_calorie = null;

    /**
     * The duration range ascribed to the video to use for the search.
The interval is set in seconds.
     *
     * @var array[]|null
     */
    public ?array $a_duration = null;

    /**
     * A list of levels to show videos for. A level can refer to the difficulty ascribed to the video.
     *
     * @var string[]|null
     */
    public ?array $a_level = null;

    /**
     * A list of locations to show videos from.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * A list of video sources.
     *
     * @var int[]|null
     */
    public ?array $a_source = null;

    /**
     * A list of staff members who appear in videos.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * A list of staff members who appear in videos.
     *
     * @var string[]|null
     */
    public ?array $a_staff_uid = null;

    /**
     * A list of video categories to show videos from.
     *
     * @var string[]|null
     */
    public ?array $a_video_category = null;

    /**
     * A list of video tags to show videos for.
     *
     * @var string[]|null
     */
    public ?array $a_video_tag = null;

    /**
     * Page to return.
Pagination are ignored when count of videos less than `VIDEO_COUNT_PAGINATION`.

`null` if you need to return all the videos.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Sort order ID. One of [SortOrderSid](#/components/schemas/Core.Sid.SortOrderSid) constants. `null` or 0 if order is undefined and depends on sort order.
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * The sorting type.
A constant from [FilterSortSid](#/components/schemas/Wl.Video.Catalog.Filter.Sort.FilterSortSid). `null` or 0 if sort is undefined and custom sort order is used.
     *
     * @var int|null
     */
    public ?int $id_sort = null;

    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase to filter videos by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * UID of the client who request list of videos.

`null` if user is not signed in.

NOTE: Not used directly in API, needed for `KEY` constant.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A list of shared video keys in their saved order.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of videos for the specified business.
     *
     * Returns videos for the business video library with optional filtering by category, tag,
     * difficulty level, staff, location, calorie range, and duration. Supports sorting and
     * pagination for large libraries. In frontend mode, results are restricted to videos the
     * current user is allowed to watch based on their membership and login type.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     *   - array[] a_page: No description.
     *   - int id_embed_source: Embedded video source.
One of [VideoEmbedSourceSid](#/components/schemas/Wl.Video.VideoEmbedSourceSid) constants.

`null` if video is uploaded.
     *   - int id_order: Sort order ID. One of [SortOrderSid](#/components/schemas/Core.Sid.SortOrderSid) constants. `null` or 0 if order is undefined and depends on sort order.
     *   - int id_sort: The sorting type.
A constant from [FilterSortSid](#/components/schemas/Wl.Video.Catalog.Filter.Sort.FilterSortSid). `null` or 0 if sort is undefined and custom sort order is used.
     *   - string json_setup: Video.js media player initialization parameters in JSON format.

Usage example:
     <script>
         videojs($('video'), {
             "techOrder": ["Vimeo"],
             "sources": [
                 {"type": "video/vimeo", "src": "https://vimeo.com/123456789"}
             ]
         });
     </script>
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Video/VideoList.json', $this->params(), 'GET');
    }

    /**
     * Updates the custom sort order of videos for the specified business.
     *
     * Reorders the video library according to the provided list. Only takes effect when the
     * library is configured to use the custom sort order. Requires backend access with the
     * video library management privilege.
     *
     * @return array Parsed JSON response data.
     *   - int id_embed_source: Embedded video source.
One of [VideoEmbedSourceSid](#/components/schemas/Wl.Video.VideoEmbedSourceSid) constants.

`null` if video is uploaded.
     *   - string json_setup: Video.js media player initialization parameters in JSON format.

Usage example:
     <script>
         videojs($('video'), {
             "techOrder": ["Vimeo"],
             "sources": [
                 {"type": "video/vimeo", "src": "https://vimeo.com/123456789"}
             ]
         });
     </script>
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Video/VideoList.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_calorie' => $this->a_calorie,
            'a_duration' => $this->a_duration,
            'a_level' => $this->a_level,
            'a_location' => $this->a_location,
            'a_source' => $this->a_source,
            'a_staff' => $this->a_staff,
            'a_staff_uid' => $this->a_staff_uid,
            'a_video_category' => $this->a_video_category,
            'a_video_tag' => $this->a_video_tag,
            'i_page' => $this->i_page,
            'id_order' => $this->id_order,
            'id_sort' => $this->id_sort,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            'uid' => $this->uid,
            'a_order' => $this->a_order,
            ],
            static fn($v) => $v !== null
        );
    }
}
