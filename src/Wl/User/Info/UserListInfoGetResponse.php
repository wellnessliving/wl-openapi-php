<?php

namespace WlSdk\Wl\User\Info;

/**
 * Response from GET
 */
class UserListInfoGetResponse
{
    /**
     * Information about the user's. The information returned has the following structure:
     *
     * @var UserListInfoGetResponseUserData|null
     */
    public ?UserListInfoGetResponseUserData $a_user_data = null;

    public function __construct(array $data)
    {
        $this->a_user_data = isset($data['a_user_data']) ? new UserListInfoGetResponseUserData((array)$data['a_user_data']) : null;
    }
}
