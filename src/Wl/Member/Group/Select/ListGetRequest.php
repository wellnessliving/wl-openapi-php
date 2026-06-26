<?php

namespace WlSdk\Wl\Member\Group\Select;

class ListGetRequest
{
    /**
     * Whether include "Isaac Churn Risk" group.
     *
     * @var bool|null
     */
    public ?bool $is_churn_risk = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether to show the quantity of users which belong to a member group. `true` - to show, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_member_group_user = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_churn_risk' => $this->is_churn_risk,
            'k_business' => $this->k_business,
            'show_member_group_user' => $this->show_member_group_user,
            ],
            static fn ($v) => $v !== null
        );
    }
}
