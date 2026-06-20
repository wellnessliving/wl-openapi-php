<?php

namespace WlSdk\Wl\Member\Group\GroupList;

class ListPutRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of groups in the order in which they will be saved.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_order = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_member_group_order' => $this->a_member_group_order,
            ],
            static fn ($v) => $v !== null
        );
    }
}
