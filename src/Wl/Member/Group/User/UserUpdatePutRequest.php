<?php

namespace WlSdk\Wl\Member\Group\User;

class UserUpdatePutRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Automatic group update flag.
     *
     * `true` to enable automatic update, `false` to disable.
     *
     * @var bool|null
     */
    public ?bool $is_update = null;

    /**
     * The member group key for which the action needs to be performed.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_update' => $this->is_update,
            'k_member_group' => $this->k_member_group,
            ],
            static fn ($v) => $v !== null
        );
    }
}
