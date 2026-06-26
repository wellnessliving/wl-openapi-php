<?php

namespace WlSdk\Wl\Marketing\Banner;

class BannerGetResponseBannerFeature
{
    /**
     * CSS class suffix for the feature icon.
     *
     * @var string|null
     */
    public ?string $sid_icon = null;

    /**
     * Feature label text.
     *
     * @var string|null
     */
    public ?string $text_label = null;

    public function __construct(array $data)
    {
        $this->sid_icon = isset($data['sid_icon']) ? (string)$data['sid_icon'] : null;
        $this->text_label = isset($data['text_label']) ? (string)$data['text_label'] : null;
    }
}
