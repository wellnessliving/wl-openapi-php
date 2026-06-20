<?php

namespace WlSdk\Wl\Login\Type;

/**
 * Response from GET
 */
class LoginTypeGetResponse
{
    /**
     * No description.
     *
     * @var LoginTypeGetResponseLoginTypeList[]|null
     */
    public ?array $a_login_type_list = null;

    public function __construct(array $data)
    {
        $this->a_login_type_list = isset($data['a_login_type_list']) ? array_map(static fn ($item) => new LoginTypeGetResponseLoginTypeList((array)$item), (array)$data['a_login_type_list']) : null;
    }
}
