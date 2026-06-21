<?php

namespace WlSdk\Wl\Appointment\Book\Product;

/**
 * Response from GET
 */
class Product62GetResponse
{
    /**
     * A list service add-ons.
     *
     * This will be `null` if not set yet.
     *
     * @var Product62GetResponseProduct[]|null
     */
    public ?array $a_product = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn ($item) => new Product62GetResponseProduct((array)$item), (array)$data['a_product']) : null;
    }
}
