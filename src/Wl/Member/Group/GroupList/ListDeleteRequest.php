<?php

namespace WlSdk\Wl\Member\Group\GroupList;

class ListDeleteRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of groups to be deleted.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_delete = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_member_group_delete' => $this->a_member_group_delete,
            ],
            static fn ($v) => $v !== null
        );
    }
}
