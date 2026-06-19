<?php
namespace WlSdk\Wl\Appointment\Book\Product;

/**
 * Response from GET
 */
class ProductApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_product = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? (array)$data['a_product'] : null;
    }
}
