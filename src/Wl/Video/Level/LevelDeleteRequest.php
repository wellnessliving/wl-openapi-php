<?php

namespace WlSdk\Wl\Video\Level;

class LevelDeleteRequest
{
    /**
     * If `true`, confirmation is required to delete videos. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_delete_confirm = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'is_delete_confirm' => $this->is_delete_confirm,
            'k_business' => $this->k_business,
            'k_video_level' => $this->k_video_level,
            ],
            static fn ($v) => $v !== null
        );
    }
}
