<?php

namespace WlSdk\Wl\Login\Promotion\Share;

class LoginPromotionShareGetResponseShareFamily
{
    /**
     * Whether the login promotion was shared with user.
     *
     * @var bool|null
     */
    public ?bool $is_share = null;

    /**
     * User name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->is_share = isset($data['is_share']) ? (bool)$data['is_share'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
