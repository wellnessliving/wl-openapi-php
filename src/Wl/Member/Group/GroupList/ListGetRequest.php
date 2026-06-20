<?php

namespace WlSdk\Wl\Member\Group\GroupList;

class ListGetRequest
{
    /**
     * List of groups for filtering groups of business.
     *
     * `null` in the case when need to return all groups of business.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_select = null;

    /**
     * Whether include "Isaac Churn Risk" group.
     *
     * @var bool|null
     */
    public ?bool $is_churn_risk = null;

    /**
     * Whether include a list of members of groups.
     *
     * @var bool|null
     */
    public ?bool $is_return_members = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_member_group_select' => $this->a_member_group_select,
            'is_churn_risk' => $this->is_churn_risk,
            'is_return_members' => $this->is_return_members,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
