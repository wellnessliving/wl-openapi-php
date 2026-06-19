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
     * @var array[]|null
     */
    public ?array $a_login_type_list = null;

    public function __construct(array $data)
    {
        $this->a_login_type_list = isset($data['a_login_type_list']) ? (array)$data['a_login_type_list'] : null;
    }
}
