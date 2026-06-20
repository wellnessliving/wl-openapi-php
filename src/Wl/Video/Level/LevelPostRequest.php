<?php

namespace WlSdk\Wl\Video\Level;

class LevelPostRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video level key.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * The video level title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_video_level' => $this->k_video_level,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
