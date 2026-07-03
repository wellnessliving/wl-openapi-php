<?php

namespace WlSdk\Wl\Video;

class VideoElementPostRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If `true`, the video is converted.
     * If `false`, the video isn't converted.
     *
     * @var bool|null
     */
    public ?bool $is_converted = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video key.
     *
     * *Be careful, when use this property in code, use
     * [VideoElementApi::$k_video_binary](/Wl/Video/VideoElement.json) instead.*
     * In this property can be key in next format:
     * * [Deprecated] String key in old format.
     * * String key in new format.
     *
     * @var string|null
     */
    public ?string $k_video = null;

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
     *
     * If the file will be uploaded in parts, its size will be set.
     *
     * @var int|null
     */
    public ?int $i_file_upload_size = null;

    /**
     * {@link \WlSdk\Core\Sid\YesNoSid} if the video is available in all locations.
     * {@link \WlSdk\Core\Sid\YesNoSid} if the video is available only in certain locations.
     *
     * @var int|null
     * @see \WlSdk\Core\Sid\YesNoSid
     */
    public ?int $id_location_select = null;

    /**
     * Source of the video.
     *
     * One of {@link \WlSdk\Wl\Video\VideoSourceSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Video\VideoSourceSid
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
     * If `true`, the video level for the video is enabled.
     * If `false`, the video level for the video is disabled.
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
     * This will be `0` if `All Levels` is selected.
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
     * If the file will be uploaded in parts, upload ID will be set.
     *
     * In this case, the file will not be uploaded to this API.
     *
     * @var string|null
     */
    public ?string $s_file_upload_id = null;

    /**
     * The real name of the uploaded file.
     *
     * If the file will be uploaded in parts, its name will be set.
     *
     * In this case, the file won't be uploaded to this API and the POST method won't
     * return the result.
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

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_converted' => $this->is_converted,
            'k_business' => $this->k_business,
            'k_video' => $this->k_video,
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
            static fn ($v) => $v !== null
        );
    }
}
