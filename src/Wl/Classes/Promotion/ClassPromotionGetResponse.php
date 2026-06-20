<?php
namespace WlSdk\Wl\Classes\Promotion;

/**
 * Response from GET
 */
class ClassPromotionGetResponse
{
    /**
     * Promotion data with the following structure:.
     *
     * @var ClassPromotionGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * The default promotion key.
     * 
     * This will be `null` if `k_class` wasn't provided, or if the class has no default promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion_default = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn($item) => new ClassPromotionGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
    }
}
