<?php

namespace WlSdk\Wl\Billing\Bulk;

/**
 * Response from GET
 */
class PurchaseItemListGetResponse
{
    /**
     * The list of products available at the location. Each element has the following structure:
     *
     * @var PurchaseItemListGetResponseProduct[]|null
     */
    public ?array $a_product = null;

    /**
     * The list of promotions available at the location. Each element has the following structure:
     *
     * @var PurchaseItemListGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Whether to apply the ACH surcharge.
     *
     * @var bool|null
     */
    public ?bool $is_surcharge_ach = null;

    /**
     * Whether to apply the e-commerce surcharge.
     *
     * @var bool|null
     */
    public ?bool $is_surcharge_ecommerce = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn ($item) => new PurchaseItemListGetResponseProduct((array)$item), (array)$data['a_product']) : null;
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new PurchaseItemListGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->is_surcharge_ach = isset($data['is_surcharge_ach']) ? (bool)$data['is_surcharge_ach'] : null;
        $this->is_surcharge_ecommerce = isset($data['is_surcharge_ecommerce']) ? (bool)$data['is_surcharge_ecommerce'] : null;
    }
}
