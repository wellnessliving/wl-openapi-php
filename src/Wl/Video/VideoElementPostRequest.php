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
     * *Be careful, when use this property in code, use {@link
     * \WlSdk\Wl\Video\VideoElementGetResponse::$k_video_binary} instead.*
     * In this property can be key in next format:
     * * [Deprecated] String key in old format.
     * * String key in new format.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_converted' => $this->is_converted,
            'k_business' => $this->k_business,
            'k_video' => $this->k_video,
            ],
            static fn ($v) => $v !== null
        );
    }
}
