<?php

namespace WlSdk\Thoth\LayoutBe\UserProfile\Popup;

class UserPopupGetResponseUser
{
    /**
     * Name of the related profile.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Login link for this profile.
     *
     * @var string|null
     */
    public ?string $url_login = null;

    public function __construct(array $data)
    {
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->url_login = isset($data['url_login']) ? (string)$data['url_login'] : null;
    }
}
