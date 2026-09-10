<?php

namespace WlSdk\Wl\Login\Rank;

/**
 * Response from GET
 */
class LoginRankListGetResponse
{
    /**
     * List of users with information about their ranks in the business. Each element:
     *
     * @var LoginRankListGetResponseUserList[]|null
     */
    public ?array $a_user_list = null;

    public function __construct(array $data)
    {
        $this->a_user_list = isset($data['a_user_list']) ? array_map(static fn ($item) => new LoginRankListGetResponseUserList((array)$item), (array)$data['a_user_list']) : null;
    }
}
