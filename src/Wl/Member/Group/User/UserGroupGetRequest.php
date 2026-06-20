<?php

namespace WlSdk\Wl\Member\Group\User;

class UserGroupGetRequest
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID of a user.
     *
     * @var string|null
     */
    public ?string $uid_user = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_user' => $this->uid_user,
            ],
            static fn ($v) => $v !== null
        );
    }
}
