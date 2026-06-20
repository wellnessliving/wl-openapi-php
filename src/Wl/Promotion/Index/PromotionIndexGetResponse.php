<?php

namespace WlSdk\Wl\Promotion\Index;

/**
 * Response from GET
 */
class PromotionIndexGetResponse
{
    /**
     * No description.
     *
     * @var PromotionIndexGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new PromotionIndexGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
    }
}
