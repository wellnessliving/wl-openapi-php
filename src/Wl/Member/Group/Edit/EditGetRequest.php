<?php

namespace WlSdk\Wl\Member\Group\Edit;

class EditGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Member group primary key in Sql table.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    /**
     * Key of existing template.
     * Primary key in the SearchTemplateSql table.
     *
     * Can be empty if template needs to be created.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    /**
     * Unique string identifying the name of the search group.
     *
     * @var string|null
     */
    public ?string $s_search_group = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_member_group' => $this->k_member_group,
            'k_search_template' => $this->k_search_template,
            's_search_group' => $this->s_search_group,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
