<?php
namespace WlSdk\Wl\Video;

class VideoListGetResponseList
{
    /**
     * List of staff members associated with the video.
     *
     * @var VideoListGetResponseListStaff|null
     */
    public ?VideoListGetResponseListStaff $a_staff = null;

    /**
     * List of video categories.
     *
     * @var VideoListGetResponseListVideoCategory|null
     */
    public ?VideoListGetResponseListVideoCategory $a_video_category = null;

    /**
     * List of video tags.
     *
     * @var VideoListGetResponseListVideoTag|null
     */
    public ?VideoListGetResponseListVideoTag $a_video_tag = null;

    /**
     * Date and time when the video becomes published, in the business time zone. `null` if not set.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * Date and time when the video becomes unpublished, in the business time zone. `null` if not set.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * Date and time when the video was uploaded, in the business time zone.
     *
     * @var string|null
     */
    public ?string $dtl_upload = null;

    /**
     * HTML description of the video parsed from `xml_description`.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Number of calories burned during the video session.
     *
     * @var int|null
     */
    public ?int $i_calorie = null;

    /**
     * Percentage of the video watched by the current user.
     *
     * @var int|null
     */
    public ?int $i_current_percent = null;

    /**
     * Current watch position in seconds for the current user.
     *
     * @var int|null
     */
    public ?int $i_current_time = null;

    /**
     * Video duration in seconds.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Total number of views.
     *
     * @var int|null
     */
    public ?int $i_watch = null;

    /**
     * Video source. One of {@link \WlSdk\Wl\Video\VideoSourceSid} constants.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * `true` if calorie information is enabled for this video; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_calorie = null;

    /**
     * `true` if the video has been converted to HLS format; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_converted = null;

    /**
     * `true` if the video is currently published; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_published = null;

    /**
     * `true` if a difficulty level is assigned to this video; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_video_level = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Video key.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    /**
     * Binary video key.
     *
     * @var string|null
     */
    public ?string $k_video_binary = null;

    /**
     * Video level key. `null` if no level assigned.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * `true` if calorie count should be displayed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_calorie = null;

    /**
     * `true` if difficulty level should be displayed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_level = null;

    /**
     * `true` if view count should be displayed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_view = null;

    /**
     * Difficulty level title.
     *
     * @var string|null
     */
    public ?string $text_level_title = null;

    /**
     * Video title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * URL of the video thumbnail image.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * URL of the video file (HLS stream). `null` if not available.
     * See [VideoElementApi](/Wl/Video/VideoElement.json) for details about the video URL.
     *
     * @var string|null
     */
    public ?string $url_video = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? new VideoListGetResponseListStaff((array)$data['a_staff']) : null;
        $this->a_video_category = isset($data['a_video_category']) ? new VideoListGetResponseListVideoCategory((array)$data['a_video_category']) : null;
        $this->a_video_tag = isset($data['a_video_tag']) ? new VideoListGetResponseListVideoTag((array)$data['a_video_tag']) : null;
        $this->dtl_publish = isset($data['dtl_publish']) ? (string)$data['dtl_publish'] : null;
        $this->dtl_unpublish = isset($data['dtl_unpublish']) ? (string)$data['dtl_unpublish'] : null;
        $this->dtl_upload = isset($data['dtl_upload']) ? (string)$data['dtl_upload'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->i_calorie = isset($data['i_calorie']) ? (int)$data['i_calorie'] : null;
        $this->i_current_percent = isset($data['i_current_percent']) ? (int)$data['i_current_percent'] : null;
        $this->i_current_time = isset($data['i_current_time']) ? (int)$data['i_current_time'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_watch = isset($data['i_watch']) ? (int)$data['i_watch'] : null;
        $this->id_source = isset($data['id_source']) ? (int)$data['id_source'] : null;
        $this->is_calorie = isset($data['is_calorie']) ? (bool)$data['is_calorie'] : null;
        $this->is_converted = isset($data['is_converted']) ? (bool)$data['is_converted'] : null;
        $this->is_published = isset($data['is_published']) ? (bool)$data['is_published'] : null;
        $this->is_video_level = isset($data['is_video_level']) ? (bool)$data['is_video_level'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_video = isset($data['k_video']) ? (string)$data['k_video'] : null;
        $this->k_video_binary = isset($data['k_video_binary']) ? (string)$data['k_video_binary'] : null;
        $this->k_video_level = isset($data['k_video_level']) ? (string)$data['k_video_level'] : null;
        $this->show_calorie = isset($data['show_calorie']) ? (bool)$data['show_calorie'] : null;
        $this->show_level = isset($data['show_level']) ? (bool)$data['show_level'] : null;
        $this->show_view = isset($data['show_view']) ? (bool)$data['show_view'] : null;
        $this->text_level_title = isset($data['text_level_title']) ? (string)$data['text_level_title'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
        $this->url_video = isset($data['url_video']) ? (string)$data['url_video'] : null;
    }
}
