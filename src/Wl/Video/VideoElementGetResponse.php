<?php
namespace WlSdk\Wl\Video;

/**
 * Response from GET
 */
class VideoElementGetResponse
{
    /**
     * The keys of the locations where this video is available.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * The keys of the user staff members who are on the video.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * No description.
     *
     * @var VideoElementGetResponseStaffInfo[]|null
     */
    public ?array $a_staff_info = null;

    /**
     * The user IDs of the staff members who are on the video (authoritative list for who is assigned to the
     * video).
     *
     * @var string[]|null
     */
    public ?array $a_staff_uid = null;

    /**
     * The video category keys where this video can be found.
     *
     * @var string[]|null
     */
    public ?array $a_video_category = null;

    /**
     * The video tag keys.
     *
     * @var string[]|null
     */
    public ?array $a_video_tag = null;

    /**
     * The date and time when the video was published.
     * 
     * This will be `null` if the published date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * The date and time when the video was unpublished.
     * 
     * This will be `null` if the unpublished date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * The date when the video was uploaded.
     *
     * @var string|null
     */
    public ?string $dtl_upload = null;

    /**
     * The video embed code.
     *
     * @var string|null
     */
    public ?string $html_embed = null;

    /**
     * The count of burned calories associated with the video.
     *
     * @var int|null
     */
    public ?int $i_calorie = null;

    /**
     * The current time as a percentage of the video duration at which the user is at in the video.
     *
     * @var int|null
     */
    public ?int $i_current_percent = null;

    /**
     * The current time in seconds at which the user is at in the video.
     *
     * @var int|null
     */
    public ?int $i_current_time = null;

    /**
     * The video duration in seconds.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The number of video views.
     *
     * @var int|null
     */
    public ?int $i_watch = null;

    /**
     * Embedded video source.
     * One of {@link \WlSdk\Wl\Video\VideoEmbedSourceSid} constants.
     * 
     * `null` if video is uploaded.
     *
     * @var int|null
     */
    public ?int $id_embed_source = null;

    /**
     * {@link \WlSdk\Core\Sid\YesNoSid} if the video is available in all locations.
     * {@link \WlSdk\Core\Sid\YesNoSid} if the video is available only in certain locations.
     *
     * @var int|null
     */
    public ?int $id_location_select = null;

    /**
     * Source of the video.
     * 
     * One of {@link \WlSdk\Wl\Video\VideoSourceSid} constants.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * If `true`, the calorie count will be displayed on the video.
     * If `false`, the calorie count will be hidden on the video.
     *
     * @var bool|null
     */
    public ?bool $is_calorie = null;

    /**
     * If `true`, the video is converted.
     * If `false`, the video isn't converted.
     *
     * @var bool|null
     */
    public ?bool $is_converted = null;

    /**
     * If `true`, the video is published. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_published = null;

    /**
     * If `true`, the video level for the video is enabled.
     * If `false`, the video level for the video is disabled.
     *
     * @var bool|null
     */
    public ?bool $is_video_level = null;

    /**
     * Video.js media player initialization parameters in JSON format.
     * 
     * Usage example:
     *      <script>
     *          videojs($('video'), {
     *              "techOrder": ["Vimeo"],
     *              "sources": [
     *                  {"type": "video/vimeo", "src": "https://vimeo.com/123456789"}
     *              ]
     *          });
     *      </script>
     *
     * @var string|null
     */
    public ?string $json_setup = null;

    /**
     * The binary string video key.
     *
     * @var string|null
     */
    public ?string $k_video_binary = null;

    /**
     * The video category primary key.
     *
     * @var string|null
     */
    public ?string $k_video_category_primary = null;

    /**
     * The video level key.
     * This will be `0` if `All Levels` is selected.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * The string representation of the video's key.
     * 
     * This will be `null` if the video doesn't have a thumbnail image.
     *
     * @var string|null
     */
    public ?string $s_preview_video_key = null;

    /**
     * If `false`, the calorie count for videos is hidden. Otherwise, this will be `true`.
     *
     * @var bool|null
     */
    public ?bool $show_calorie = null;

    /**
     * If `false`, video levels are hidden. Otherwise, this will be `true`.
     *
     * @var bool|null
     */
    public ?bool $show_level = null;

    /**
     * If `false`, the number of views for videos is hidden. Otherwise, this will be `true`.
     *
     * @var bool|null
     */
    public ?bool $show_view = null;

    /**
     * The video level name.
     *
     * @var string|null
     */
    public ?string $text_level_title = null;

    /**
     * The video name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The URL of the video thumbnail.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    /**
     * The URL of the video file.
     * 
     * This URL return with domain which you use when you call this API.
     * In case when you make request to local domain and video is
     * `is_converted` links in file will have global domain and for correct
     * work you must replace global domain to local.
     * 
     * Example for `videojs` player you can override method `beforeRequest`: <code>
     *  videojs.Vhs.xhr.beforeRequest = function(options)
     *  {
     *    if (options.uri.startsWith('https://www.'))
     *    {
     *      options.uri = options.uri.replace('https://www.', 'https://us.');
     *    }
     *    return options;
     *  }
     * </code>
     *
     * @var string|null
     */
    public ?string $url_video = null;

    /**
     * The direct URL of the video.
     *
     * @var string|null
     */
    public ?string $url_video_direct = null;

    /**
     * The direct URL of the video for iframe.
     *
     * @var string|null
     */
    public ?string $url_video_frame = null;

    /**
     * The video description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_staff_info = isset($data['a_staff_info']) ? array_map(static fn($item) => new VideoElementGetResponseStaffInfo((array)$item), (array)$data['a_staff_info']) : null;
        $this->a_staff_uid = isset($data['a_staff_uid']) ? (array)$data['a_staff_uid'] : null;
        $this->a_video_category = isset($data['a_video_category']) ? (array)$data['a_video_category'] : null;
        $this->a_video_tag = isset($data['a_video_tag']) ? (array)$data['a_video_tag'] : null;
        $this->dtl_publish = isset($data['dtl_publish']) ? (string)$data['dtl_publish'] : null;
        $this->dtl_unpublish = isset($data['dtl_unpublish']) ? (string)$data['dtl_unpublish'] : null;
        $this->dtl_upload = isset($data['dtl_upload']) ? (string)$data['dtl_upload'] : null;
        $this->html_embed = isset($data['html_embed']) ? (string)$data['html_embed'] : null;
        $this->i_calorie = isset($data['i_calorie']) ? (int)$data['i_calorie'] : null;
        $this->i_current_percent = isset($data['i_current_percent']) ? (int)$data['i_current_percent'] : null;
        $this->i_current_time = isset($data['i_current_time']) ? (int)$data['i_current_time'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_watch = isset($data['i_watch']) ? (int)$data['i_watch'] : null;
        $this->id_embed_source = isset($data['id_embed_source']) ? (int)$data['id_embed_source'] : null;
        $this->id_location_select = isset($data['id_location_select']) ? (int)$data['id_location_select'] : null;
        $this->id_source = isset($data['id_source']) ? (int)$data['id_source'] : null;
        $this->is_calorie = isset($data['is_calorie']) ? (bool)$data['is_calorie'] : null;
        $this->is_converted = isset($data['is_converted']) ? (bool)$data['is_converted'] : null;
        $this->is_published = isset($data['is_published']) ? (bool)$data['is_published'] : null;
        $this->is_video_level = isset($data['is_video_level']) ? (bool)$data['is_video_level'] : null;
        $this->json_setup = isset($data['json_setup']) ? (string)$data['json_setup'] : null;
        $this->k_video_binary = isset($data['k_video_binary']) ? (string)$data['k_video_binary'] : null;
        $this->k_video_category_primary = isset($data['k_video_category_primary']) ? (string)$data['k_video_category_primary'] : null;
        $this->k_video_level = isset($data['k_video_level']) ? (string)$data['k_video_level'] : null;
        $this->s_preview_video_key = isset($data['s_preview_video_key']) ? (string)$data['s_preview_video_key'] : null;
        $this->show_calorie = isset($data['show_calorie']) ? (bool)$data['show_calorie'] : null;
        $this->show_level = isset($data['show_level']) ? (bool)$data['show_level'] : null;
        $this->show_view = isset($data['show_view']) ? (bool)$data['show_view'] : null;
        $this->text_level_title = isset($data['text_level_title']) ? (string)$data['text_level_title'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
        $this->url_video = isset($data['url_video']) ? (string)$data['url_video'] : null;
        $this->url_video_direct = isset($data['url_video_direct']) ? (string)$data['url_video_direct'] : null;
        $this->url_video_frame = isset($data['url_video_frame']) ? (string)$data['url_video_frame'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
