<?php

namespace WlSdk\Wl\Promotion;

class PromotionPostRequest
{
    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Promotion information.
     *
     * @var array[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the
     * promotion.
     *
     * @var array|mixed|null
     */
    public $o_guest_settings = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            'a_promotion' => $this->a_promotion,
            'o_guest_settings' => $this->o_guest_settings,
            ],
            static fn ($v) => $v !== null
        );
    }
}
