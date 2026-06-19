<?php
namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_product = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_product_duplicate = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? (array)$data['a_product'] : null;
        $this->a_product_duplicate = isset($data['a_product_duplicate']) ? (array)$data['a_product_duplicate'] : null;
    }
}
