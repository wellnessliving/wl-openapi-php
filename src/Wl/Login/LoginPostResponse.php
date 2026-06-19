<?php
namespace WlSdk\Wl\Login;

/**
 * Response from POST
 */
class LoginPostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_login = null;

    public function __construct(array $data)
    {
        $this->a_login = isset($data['a_login']) ? (array)$data['a_login'] : null;
    }
}
