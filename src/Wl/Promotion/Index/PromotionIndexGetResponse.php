<?php
namespace WlSdk\Wl\Promotion\Index;

/**
 * Response from GET
 */
class PromotionIndexGetResponse
{
    /**
     * A list of introductory promotion offers available at the location.
     * Every element is an array with the following keys:
     *
     * @var PromotionIndexGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn($item) => new PromotionIndexGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
    }
}
