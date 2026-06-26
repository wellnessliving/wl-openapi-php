<?php

namespace WlSdk\Wl\Resource\Promotion;

/**
 * Response from GET
 */
class ResourcePromotionGetResponse
{
    /**
     * Promotion data with structure:.
     *
     * @var ResourcePromotionGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Default promotion key. Primary key in RsPromotionSql table.
     * `null` if `k_resource` was not provided, or if the resource has no default promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion_default = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new ResourcePromotionGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
    }
}
