<?php

namespace WlSdk\Wl\Member\Group\Select;

class ListGetResponseMemberGroup
{
    /**
     * Quantity of users in a group.
     *
     * @var int|null
     */
    public ?int $i_user = null;

    /**
     * Whether a member group is selected. `true` if selected, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_selected = null;

    /**
     * The key of the member group. Primary key in Sql.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    /**
     * The name of the member group.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_user = isset($data['i_user']) ? (int)$data['i_user'] : null;
        $this->is_selected = isset($data['is_selected']) ? (bool)$data['is_selected'] : null;
        $this->k_member_group = isset($data['k_member_group']) ? (string)$data['k_member_group'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
