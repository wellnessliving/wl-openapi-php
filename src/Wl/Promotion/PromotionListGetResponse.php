<?php
namespace WlSdk\Wl\Promotion;

/**
 * Response from GET
 */
class PromotionListGetResponse
{
    /**
     * A list of promotions.
     *
     * @var PromotionListGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn($item) => new PromotionListGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
    }
}
