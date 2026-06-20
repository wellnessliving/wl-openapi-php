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
     * @var LoginPostResponseLogin[]|null
     */
    public ?array $a_login = null;

    public function __construct(array $data)
    {
        $this->a_login = isset($data['a_login']) ? array_map(static fn ($item) => new LoginPostResponseLogin((array)$item), (array)$data['a_login']) : null;
    }
}
