<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItemData
{
    /**
     * Whether to display individual prices for each item in the package.
     * `true` display individual prices for each item in the package,
     * `false` display a single total price for the package.
     *
     * @var bool|null
     */
    public ?bool $is_price_breakdown = null;

    public function __construct(array $data)
    {
        $this->is_price_breakdown = isset($data['is_price_breakdown']) ? (bool)$data['is_price_breakdown'] : null;
    }
}
