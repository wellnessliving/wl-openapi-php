<?php
namespace WlSdk\Wl\Login\Product;

/**
 * Response from GET
 */
class ProductGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_login_product = null;

    public function __construct(array $data)
    {
        $this->a_login_product = isset($data['a_login_product']) ? (array)$data['a_login_product'] : null;
    }
}
