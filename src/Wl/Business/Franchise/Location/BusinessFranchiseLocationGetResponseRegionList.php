<?php
namespace WlSdk\Wl\Business\Franchise\Location;

class BusinessFranchiseLocationGetResponseRegionList
{
    /**
     * Franchise region key.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * Franchise region title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
