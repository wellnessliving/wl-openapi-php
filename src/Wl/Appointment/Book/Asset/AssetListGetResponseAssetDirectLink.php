<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAssetDirectLink
{
    /**
     * The key of the book now tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The direct booking URL. This will open the booking wizard under the related booking tab.
     *
     * @var string|null
     */
    public ?string $url_tab = null;

    public function __construct(array $data)
    {
        $this->k_class_tab = isset($data['k_class_tab']) ? (string)$data['k_class_tab'] : null;
        $this->url_tab = isset($data['url_tab']) ? (string)$data['url_tab'] : null;
    }
}
