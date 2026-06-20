<?php
namespace WlSdk\Wl\Login\Type;

/**
 * Response from GET
 */
class LoginTypeGetResponse
{
    /**
     * A list of login types, keys, and information. Each element is an array with the following information:
     *
     * @var LoginTypeGetResponseLoginTypeList[]|null
     */
    public ?array $a_login_type_list = null;

    public function __construct(array $data)
    {
        $this->a_login_type_list = isset($data['a_login_type_list']) ? array_map(static fn($item) => new LoginTypeGetResponseLoginTypeList((array)$item), (array)$data['a_login_type_list']) : null;
    }
}
