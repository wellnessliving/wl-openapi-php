<?php

namespace WlSdk\Wl\Login\Search\SearchData\Region;

class RegionSearchDataGetResponseGeoRegion
{
    /**
     * Region key.
     *
     * @var string|null
     */
    public ?string $k_geo = null;

    /**
     * Region name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_geo = isset($data['k_geo']) ? (string)$data['k_geo'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
