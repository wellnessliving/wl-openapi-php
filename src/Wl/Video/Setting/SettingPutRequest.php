<?php

namespace WlSdk\Wl\Video\Setting;

class SettingPutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Quality ID.
     *
     * @var int|null
     * @see \WlSdk\Wl\Video\Setting\QualityEnum
     */
    public ?int $id_quality = null;

    /**
     * Label for Video tab.
     *
     * @var string|null
     */
    public ?string $s_video_tab_label = null;

    /**
     * `true` if calories is available for video, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_calorie = null;

    /**
     * `true` if levels is available for video, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_level = null;

    /**
     * `true` if calories is available for video, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_view = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'id_quality' => $this->id_quality,
            's_video_tab_label' => $this->s_video_tab_label,
            'show_calorie' => $this->show_calorie,
            'show_level' => $this->show_level,
            'show_view' => $this->show_view,
            ],
            static fn ($v) => $v !== null
        );
    }
}
