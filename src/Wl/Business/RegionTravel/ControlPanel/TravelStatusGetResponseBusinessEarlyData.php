<?php

namespace WlSdk\Wl\Business\RegionTravel\ControlPanel;

class TravelStatusGetResponseBusinessEarlyData
{
    /**
     * Business Key. Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * URL to the business' travel control panel.
     *
     * @var string|null
     */
    public ?string $url_travel_panel = null;

    public function __construct(array $data)
    {
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->url_travel_panel = isset($data['url_travel_panel']) ? (string)$data['url_travel_panel'] : null;
    }
}
