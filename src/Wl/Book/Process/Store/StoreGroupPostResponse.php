<?php
namespace WlSdk\Wl\Book\Process\Store;

/**
 * Response from POST
 */
class StoreGroupPostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item_distribute = null;

    public function __construct(array $data)
    {
        $this->a_purchase_item_distribute = isset($data['a_purchase_item_distribute']) ? (array)$data['a_purchase_item_distribute'] : null;
    }
}
