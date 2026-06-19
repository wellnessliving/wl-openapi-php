<?php
namespace WlSdk\Wl\Login\Promotion;

/**
 * Response from PUT
 */
class PromotionPayPauseApiPutResponse
{
    /**
     * The promotion payment hold key. If this key is used, it will edit an existing hold.
     * This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.
     * 
     * `null` if not yet initialized or if the request is based on `k_login_promotion`.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    public function __construct(array $data)
    {
        $this->k_promotion_pay_pause = isset($data['k_promotion_pay_pause']) ? (string)$data['k_promotion_pay_pause'] : null;
    }
}
