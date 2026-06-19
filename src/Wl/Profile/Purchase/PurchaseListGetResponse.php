<?php
namespace WlSdk\Wl\Profile\Purchase;

/**
 * Response from GET
 */
class PurchaseListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_purchase = null;

    public function __construct(array $data)
    {
        $this->a_purchase = isset($data['a_purchase']) ? (array)$data['a_purchase'] : null;
    }
}
