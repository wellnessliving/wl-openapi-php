<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetResponseUserList
{
    /**
     * List of rank categories with rank details for the user. Each element:
     *
     * @var LoginRankListGetResponseUserListRankCategory|null
     */
    public ?LoginRankListGetResponseUserListRankCategory $a_rank_category = null;

    /**
     * User info:
     *
     * @var LoginRankListGetResponseUserListUserInfo|null
     */
    public ?LoginRankListGetResponseUserListUserInfo $a_user_info = null;

    public function __construct(array $data)
    {
        $this->a_rank_category = isset($data['a_rank_category']) ? new LoginRankListGetResponseUserListRankCategory((array)$data['a_rank_category']) : null;
        $this->a_user_info = isset($data['a_user_info']) ? new LoginRankListGetResponseUserListUserInfo((array)$data['a_user_info']) : null;
    }
}
