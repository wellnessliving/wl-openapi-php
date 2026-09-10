<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetResponseUserListUserInfo
{
    /**
     * Result of  function.
     *
     * @var string|null
     */
    public ?string $html_info = null;

    /**
     * Full user name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User key. Primary key in the  table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->html_info = isset($data['html_info']) ? (string)$data['html_info'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
