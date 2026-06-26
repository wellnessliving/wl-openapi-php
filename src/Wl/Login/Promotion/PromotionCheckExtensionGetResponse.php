<?php

namespace WlSdk\Wl\Login\Promotion;

/**
 * Response from GET
 */
class PromotionCheckExtensionGetResponse
{
    /**
     * Number of days the contract will get extended
     *
     * @var int|null
     */
    public ?int $i_extend = null;

    /**
     * Whether to show warning upon disabling auto-renew
     * `true` - login promotion has been applied to visit beyond its expiration date, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_expiration_date = null;

    /**
     * Whether login promotion will get extended upon disabling auto-renew.
     * `true` - promotion will be extended, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_extend = null;

    public function __construct(array $data)
    {
        $this->i_extend = isset($data['i_extend']) ? (int)$data['i_extend'] : null;
        $this->is_expiration_date = isset($data['is_expiration_date']) ? (bool)$data['is_expiration_date'] : null;
        $this->is_extend = isset($data['is_extend']) ? (bool)$data['is_extend'] : null;
    }
}
