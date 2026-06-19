<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogList;

/**
 * Response from GET
 */
class CatalogListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_shop_product = null;

    /**
     * If `true`, the current user is able to add the purchased item to the account.
     *
     * @var bool|null
     */
    public ?bool $can_add = null;

    public function __construct(array $data)
    {
        $this->a_shop_product = isset($data['a_shop_product']) ? (array)$data['a_shop_product'] : null;
        $this->can_add = isset($data['can_add']) ? (bool)$data['can_add'] : null;
    }
}
