<?php

namespace WlSdk\Wl\Service\Promotion;

/**
 * Response from GET
 */
class ServicePromotionGetResponse
{
    /**
     * Promotion data with structure:.
     *
     * @var ServicePromotionGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Default promotion key. Primary key in RsPromotionSql table.
     * `null` if `k_service` was not provided, or if the service has no default promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion_default = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new ServicePromotionGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
    }
}
