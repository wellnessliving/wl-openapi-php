<?php

namespace WlSdk\Wl\Video\MediaConvert;

class PathElementPostRequest
{
    /**
     * List of fully qualified file paths.
     *
     * @var string|null
     */
    public ?string $json_file_path = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * String key of the video.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_file_path' => $this->json_file_path,
            'k_business' => $this->k_business,
            'k_video' => $this->k_video,
            ],
            static fn ($v) => $v !== null
        );
    }
}
