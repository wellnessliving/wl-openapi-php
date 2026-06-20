<?php

namespace WlSdk\Wl\Reward\Prize;

/**
 * Response from POST
 */
class ElementPostResponse
{
    /**
     * Key of login prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    public function __construct(array $data)
    {
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
    }
}
