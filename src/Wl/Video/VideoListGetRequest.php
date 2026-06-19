<?php
namespace WlSdk\Wl\Video;

class VideoListGetRequest
{
    /**
     * The calorie range ascribed to the video to use for the search.
     *
     * @var array[]|null
     */
    public ?array $a_calorie = null;

    /**
     * The duration range ascribed to the video to use for the search.
     * The interval is set in seconds.
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
     * Pagination are ignored when count of videos less than `VIDEO_COUNT_PAGINATION`.
     * 
     * `null` if you need to return all the videos.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Sort order ID. One of [SortOrderSid](#/components/schemas/Core.Sid.SortOrderSid) constants. `null` or 0 if
     * order is undefined and depends on sort order.
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * The sorting type.
     * A constant from [FilterSortSid](#/components/schemas/Wl.Video.Catalog.Filter.Sort.FilterSortSid). `null` or
     * 0 if sort is undefined and custom sort order is used.
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
     * 
     * `null` if user is not signed in.
     * 
     * NOTE: Not used directly in API, needed for `KEY` constant.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
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
            ],
            static fn($v) => $v !== null
        );
    }
}
