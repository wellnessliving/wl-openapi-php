<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ListGetRequest
{
    /**
     * Arguments from direct purchase link, which can give additional access to products, which are available
     *   only by such link.
     *
     * @var array|null
     */
    public ?array $a_direct_link = null;

    /**
     * Filter and sort of the paged mode. Read only when {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint} is set
     * or {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}
     *   is not empty. Every key is optional:
     *
     * @var array|null
     */
    public ?array $a_filter = null;

    /**
     * Items to look up by their keys. When not empty, {@link
     * \WlSdk\Wl\Catalog\CatalogList\ListEndpointGetResponse::$a_product} holds the found items in the order
     *   of this list, without paging, search, category filter and sort. Items that are not found are left out.
     *
     *   Each element has the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * Offset of the page: the number of the items shown before it. `0` for the first page.
     *
     * `null` to return all the items at once in {@link
     * \WlSdk\Wl\Catalog\CatalogList\ListEndpointGetResponse::$a_product} and {@link
     * \WlSdk\Wl\Catalog\CatalogList\ListEndpointGetResponse::$a_product_duplicate},
     *   unless {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint} is not empty. When set, {@link
     * \WlSdk\Wl\Catalog\CatalogList\ListEndpointGetResponse::$a_product} holds one page of the
     *   items, filtered and sorted by {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}.
     *
     * @var int|null
     */
    public ?int $i_last = null;

    /**
     * Number of the items in a page of the paged mode. See {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}.
     *
     * @var int|null
     */
    public ?int $i_limit = 20;

    /**
     * `true` to consider the requirement to have a credit card for booking
     * (this requirement can be set in business settings)
     * `false` to ignore it.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = true;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of a location. If `0`, all products in the business are retrieved.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_direct_link' => $this->a_direct_link,
            'a_filter' => $this->a_filter,
            'a_item' => $this->a_item,
            'i_last' => $this->i_last,
            'i_limit' => $this->i_limit,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
