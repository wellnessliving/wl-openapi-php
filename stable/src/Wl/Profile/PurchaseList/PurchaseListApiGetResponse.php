<?php
namespace WlSdk\Wl\Profile\PurchaseList;

/**
 * Response from GET
 */
class PurchaseListApiGetResponse
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
