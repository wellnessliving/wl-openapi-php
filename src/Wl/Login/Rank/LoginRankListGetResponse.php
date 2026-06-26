<?php

namespace WlSdk\Wl\Login\Rank;

/**
 * Response from GET
 */
class LoginRankListGetResponse
{
    /**
     * List of users with information about their ranks in the business.
     *
     * @var array[]|null
     */
    public ?array $a_user_list = null;

    public function __construct(array $data)
    {
        $this->a_user_list = isset($data['a_user_list']) ? (array)$data['a_user_list'] : null;
    }
}
