<?php

namespace WlSdk\Wl\Location\Flag;

class FlagGetResponseRestrictionsMultiple
{
    /**
     * `true` if the user cannot make new reservations.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * `true` if the user cannot make new purchases.
     *
     * @var bool|null
     */
    public ?bool $is_purchase = null;

    public function __construct(array $data)
    {
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_purchase = isset($data['is_purchase']) ? (bool)$data['is_purchase'] : null;
    }
}
