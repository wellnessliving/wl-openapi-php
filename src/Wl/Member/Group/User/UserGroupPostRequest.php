<?php

namespace WlSdk\Wl\Member\Group\User;

class UserGroupPostRequest
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

    /**
     * Member group key. Use special value 'quick' to add/remove the user to/from the quick group.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_user' => $this->uid_user,
            'k_member_group' => $this->k_member_group,
            ],
            static fn ($v) => $v !== null
        );
    }
}
