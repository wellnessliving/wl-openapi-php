<?php

namespace WlSdk\Wl\Integration\Ecommerce;

/**
 * Response from POST
 */
class OrderSyncPostResponse
{
    /**
     * Created purchase.
     * Primary key in RsPurchaseSql table.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function __construct(array $data)
    {
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
    }
}
