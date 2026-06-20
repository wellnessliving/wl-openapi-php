<?php

namespace WlSdk\Wl\Promotion;

/**
 * Response from GET
 */
class PromotionGetResponse
{
    /**
     * Promotion information.
     *
     * @var PromotionGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the
     * promotion.
     *
     * @var array|mixed|null
     */
    public $o_guest_settings = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new PromotionGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->o_guest_settings = $data['o_guest_settings'] ?? null;
    }
}
