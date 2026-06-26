<?php

namespace WlSdk\Wl\Profile\Prize;

/**
 * Response from GET
 */
class PrizeGetResponse
{
    /**
     * Array of prize keys redeemed by user.
     *
     * @var array|null
     */
    public ?array $a_login_prize = null;

    public function __construct(array $data)
    {
        $this->a_login_prize = isset($data['a_login_prize']) ? (array)$data['a_login_prize'] : null;
    }
}
