<?php

namespace WlSdk\Wl\Video;

/**
 * Response from POST
 */
class VideoElementPostResponse
{
    /**
     * The video key.
     *
     * *Be careful, when use this property in code, use {@link \WlSdk\Wl\Video\VideoElement} instead.*
     * In this property can be key in next format:
     * * [Deprecated] String key in old format.
     * * String key in new format.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    public function __construct(array $data)
    {
        $this->k_video = isset($data['k_video']) ? (string)$data['k_video'] : null;
    }
}
