<?php

namespace WlSdk\Wl\Insurance\Profile;

/**
 * Response from POST
 */
class InsuranceHoldPostResponse
{
    /**
     * Key of created promotion pause; table RsPromotionPayPauseSql.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    public function __construct(array $data)
    {
        $this->k_promotion_pay_pause = isset($data['k_promotion_pay_pause']) ? (string)$data['k_promotion_pay_pause'] : null;
    }
}
