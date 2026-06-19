<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video.
 */
class VideoElementApi
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
     * The video key.

*Be careful, when use this property in code, use `k_video_binary` instead.*
In this property can be key in next format:
* [Deprecated] String key in old format. 
* String key in new format.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    /**
     * If `true`, the video is converted.
If `false`, the video isn't converted.
     *
     * @var bool|null
     */
    public ?bool $is_converted = null;

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
     * The user IDs of the staff members who are on the video (authoritative list for who is assigned to the video).
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

This will be `null` if the published date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_publish = null;

    /**
     * The date and time when the video was unpublished.

This will be `null` if the unpublished date is not set yet.
     *
     * @var string|null
     */
    public ?string $dtl_unpublish = null;

    /**
     * Video file.
     *
     * @var string|null
     */
    public ?string $file_video = null;

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
     * The video duration in seconds.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The size of the uploaded file.

If the file will be uploaded in parts, its size will be set.
     *
     * @var int|null
     */
    public ?int $i_file_upload_size = null;

    /**
     * [YesNoSid::NO](#/components/schemas/Core.Sid.YesNoSid) if the video is available in all locations.
[YesNoSid::YES](#/components/schemas/Core.Sid.YesNoSid) if the video is available only in certain locations.
     *
     * @var int|null
     */
    public ?int $id_location_select = null;

    /**
     * Source of the video.

One of [VideoSourceSid](#/components/schemas/Wl.Video.VideoSourceSid) constants.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * If `true`, the calorie count will be displayed on the video.
If `false`, the calorie count will be hidden on the video.
     *
     * @var bool|null
     */
    public ?bool $is_calorie = null;

    /**
     * If `true`, the video level for the video is enabled.
If `false`, the video level for the video is disabled.
     *
     * @var bool|null
     */
    public ?bool $is_video_level = null;

    /**
     * The video category primary key.
     *
     * @var string|null
     */
    public ?string $k_video_category_primary = null;

    /**
     * The video level key.
This will be `0` if `All Levels` is selected.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * The action that must be performed to the video thumbnail image.
     *
     * @var string|null
     */
    public ?string $s_command = null;

    /**
     * ID of the uploaded file.
If the file will be uploaded in parts, upload ID will be set.

In this case, the file will not be uploaded to this API.
     *
     * @var string|null
     */
    public ?string $s_file_upload_id = null;

    /**
     * The real name of the uploaded file.

If the file will be uploaded in parts, its name will be set.

In this case, the file won't be uploaded to this API and the POST method won't
return the result.
     *
     * @var string|null
     */
    public ?string $s_file_upload_name = null;

    /**
     * The video thumbnail.
     *
     * @var string|null
     */
    public ?string $s_thumbnail = null;

    /**
     * The video name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The video description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the data for the specified video.
     *
     * Returns detailed information about a single video, including title, description, duration,
     * categories, tags, difficulty level, assigned staff, virtual session settings, and playback
     * progress for the current user. In frontend mode, access is restricted to videos the current
     * user is allowed to watch based on their membership and login type.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_location: The keys of the locations where this video is available.
     *   - string[] a_staff: The keys of the user staff members who are on the video.
     *   - array[] a_staff_info: No description.
     *   - string[] a_staff_uid: The user IDs of the staff members who are on the video (authoritative list for who is assigned to the video).
     *   - string[] a_video_category: The video category keys where this video can be found.
     *   - string[] a_video_tag: The video tag keys.
     *   - string dtl_publish: The date and time when the video was published.

This will be `null` if the published date is not set yet.
     *   - string dtl_unpublish: The date and time when the video was unpublished.

This will be `null` if the unpublished date is not set yet.
     *   - string dtl_upload: The date when the video was uploaded.
     *   - string html_embed: The video embed code.
     *   - int i_calorie: The count of burned calories associated with the video.
     *   - int i_current_percent: The current time as a percentage of the video duration at which the user is at in the video.
     *   - int i_current_time: The current time in seconds at which the user is at in the video.
     *   - int i_duration: The video duration in seconds.
     *   - int i_watch: The number of video views.
     *   - int id_embed_source: Embedded video source.
One of [VideoEmbedSourceSid](#/components/schemas/Wl.Video.VideoEmbedSourceSid) constants.

`null` if video is uploaded.
     *   - int id_location_select: [YesNoSid::NO](#/components/schemas/Core.Sid.YesNoSid) if the video is available in all locations.
[YesNoSid::YES](#/components/schemas/Core.Sid.YesNoSid) if the video is available only in certain locations.
     *   - int id_source: Source of the video.

One of [VideoSourceSid](#/components/schemas/Wl.Video.VideoSourceSid) constants.
     *   - bool is_calorie: If `true`, the calorie count will be displayed on the video.
If `false`, the calorie count will be hidden on the video.
     *   - bool is_converted: If `true`, the video is converted.
If `false`, the video isn't converted.
     *   - bool is_published: If `true`, the video is published. Otherwise, this will be `false`.
     *   - bool is_video_level: If `true`, the video level for the video is enabled.
If `false`, the video level for the video is disabled.
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
     *   - string k_video_binary: The binary string video key.
     *   - string k_video_category_primary: The video category primary key.
     *   - string k_video_level: The video level key.
This will be `0` if `All Levels` is selected.
     *   - string s_preview_video_key: The string representation of the video's key.

This will be `null` if the video doesn't have a thumbnail image.
     *   - bool show_calorie: If `false`, the calorie count for videos is hidden. Otherwise, this will be `true`.
     *   - bool show_level: If `false`, video levels are hidden. Otherwise, this will be `true`.
     *   - bool show_view: If `false`, the number of views for videos is hidden. Otherwise, this will be `true`.
     *   - string text_level_title: The video level name.
     *   - string text_title: The video name.
     *   - string url_thumbnail: The URL of the video thumbnail.
     *   - string url_video: The URL of the video file.

This URL return with domain which you use when you call this API.
In case when you make request to local domain and video is
`is_converted` links in file will have global domain and for correct
work you must replace global domain to local.

Example for `videojs` player you can override method `beforeRequest`: <code>
 videojs.Vhs.xhr.beforeRequest = function(options)
 {
   if (options.uri.startsWith('https://www.'))
   {
     options.uri = options.uri.replace('https://www.', 'https://us.');
   }
   return options;
 }
</code>
     *   - string url_video_direct: The direct URL of the video.
     *   - string url_video_frame: The direct URL of the video for iframe.
     *   - string xml_description: The video description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Video/VideoElement.json', $this->params(), 'GET');
    }

    /**
     * Creates or updates a video for the specified business.
     *
     * Saves a video record with its title, description, categories, tags, difficulty level,
     * staff assignments, and access settings. When no video key is provided, a new record is
     * created; otherwise the existing record is updated. Requires backend access with the
     * video library management privilege and an active video subscription.
     *
     * @return array Parsed JSON response data.
     *   - string k_video: The video key.

*Be careful, when use this property in code, use `k_video_binary` instead.*
In this property can be key in next format:
* [Deprecated] String key in old format. 
* String key in new format.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Video/VideoElement.json', $this->params(), 'POST');
    }

    /**
     * Validates video embed code.
     *
     * Checks that the provided embed snippet conforms to the supported embed code format. Throws
     * if the snippet is malformed or uses an unsupported source. Call this before saving to give
     * the user an immediate validation error without persisting the video record.
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
        return $this->client->request('/Wl/Video/VideoElement.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the specified video.
     *
     * Permanently removes the video, its localized CMS records, and all category associations
     * from the business library. Also deletes the video file and thumbnail from storage.
     * Requires backend access with the video library management privilege.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Video/VideoElement.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_video' => $this->k_video,
            'is_converted' => $this->is_converted,
            'a_location' => $this->a_location,
            'a_staff' => $this->a_staff,
            'a_staff_uid' => $this->a_staff_uid,
            'a_video_category' => $this->a_video_category,
            'a_video_tag' => $this->a_video_tag,
            'dtl_publish' => $this->dtl_publish,
            'dtl_unpublish' => $this->dtl_unpublish,
            'file_video' => $this->file_video,
            'html_embed' => $this->html_embed,
            'i_calorie' => $this->i_calorie,
            'i_duration' => $this->i_duration,
            'i_file_upload_size' => $this->i_file_upload_size,
            'id_location_select' => $this->id_location_select,
            'id_source' => $this->id_source,
            'is_calorie' => $this->is_calorie,
            'is_video_level' => $this->is_video_level,
            'k_video_category_primary' => $this->k_video_category_primary,
            'k_video_level' => $this->k_video_level,
            's_command' => $this->s_command,
            's_file_upload_id' => $this->s_file_upload_id,
            's_file_upload_name' => $this->s_file_upload_name,
            's_thumbnail' => $this->s_thumbnail,
            'text_title' => $this->text_title,
            'xml_description' => $this->xml_description,
            ],
            static fn($v) => $v !== null
        );
    }
}
