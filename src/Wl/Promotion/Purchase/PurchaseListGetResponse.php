<?php

namespace WlSdk\Wl\Promotion\Purchase;

/**
 * Response from GET
 */
class PurchaseListGetResponse
{
    /**
     * List of promotions.
     *
     * @var PurchaseListGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new PurchaseListGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
    }
}
