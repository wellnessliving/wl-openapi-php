<?php

namespace WlSdk\Wl\Member\Group\GroupList;

class ListGetResponseMemberGroup
{
    /**
     * The key of the member group.
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
        $this->k_member_group = isset($data['k_member_group']) ? (string)$data['k_member_group'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
