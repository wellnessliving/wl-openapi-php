<?php

namespace WlSdk\Wl\Staff\Role;

class StaffRoleGetRequest
{
    /**
     * Whether need return all roles in the business, else if you need return only available roles for current
     * user.
     *
     * @var bool|null
     */
    public ?bool $is_all = null;

    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_all' => $this->is_all,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
