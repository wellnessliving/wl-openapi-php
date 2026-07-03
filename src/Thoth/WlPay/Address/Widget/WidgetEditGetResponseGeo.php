<?php

namespace WlSdk\Thoth\WlPay\Address\Widget;

class WidgetEditGetResponseGeo
{
    /**
     * List of geographic regions within the country. Each element:
     *
     * @var WidgetEditGetResponseGeoRegion|null
     */
    public ?WidgetEditGetResponseGeoRegion $a_region = null;

    /**
     * `true` if this country is currently selected; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Country key.
     *
     * @var string|null
     */
    public ?string $k_geo = null;

    /**
     * Country title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Country abbreviation.
     *
     * @var string|null
     */
    public ?string $text_abbr = null;

    public function __construct(array $data)
    {
        $this->a_region = isset($data['a_region']) ? new WidgetEditGetResponseGeoRegion((array)$data['a_region']) : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_geo = isset($data['k_geo']) ? (string)$data['k_geo'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_abbr = isset($data['text_abbr']) ? (string)$data['text_abbr'] : null;
    }
}
