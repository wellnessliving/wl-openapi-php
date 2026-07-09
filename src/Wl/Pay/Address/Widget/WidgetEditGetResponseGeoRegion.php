<?php

namespace WlSdk\Wl\Pay\Address\Widget;

class WidgetEditGetResponseGeoRegion
{
    /**
     * `true` if this region is currently selected; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Region key.
     *
     * @var string|null
     */
    public ?string $k_geo = null;

    /**
     * Region title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Region abbreviation.
     *
     * @var string|null
     */
    public ?string $text_abbr = null;

    public function __construct(array $data)
    {
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_geo = isset($data['k_geo']) ? (string)$data['k_geo'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_abbr = isset($data['text_abbr']) ? (string)$data['text_abbr'] : null;
    }
}
