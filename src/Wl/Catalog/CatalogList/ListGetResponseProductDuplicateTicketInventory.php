<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ListGetResponseProductDuplicateTicketInventory
{
    /**
     * Total number of tickets that can be sold for the event.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Maximum number of tickets that can be ordered in one purchase. `0` if there is no limit.
     *
     * @var int|null
     */
    public ?int $i_order_limit = null;

    /**
     * Number of tickets still available to sell. `0` if the event is sold out.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    public function __construct(array $data)
    {
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_order_limit = isset($data['i_order_limit']) ? (int)$data['i_order_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
    }
}
