<?php

namespace WlSdk\Wl\Event\Editor;

class SetupGetResponseReminderInfo
{
    /**
     * Times the reminder is sent at, the earliest one first. Every element is an array:
     *
     * @var SetupGetResponseReminderInfoConfig|null
     */
    public ?SetupGetResponseReminderInfoConfig $a_config = null;

    /**
     * Number of the client types the reminder is sent to.
     *
     * @var int|null
     */
    public ?int $i_login_type = null;

    /**
     * Number of the client types of the business.
     *
     * @var int|null
     */
    public ?int $i_login_type_all = null;

    /**
     * Number of the client groups the reminder is sent to.
     *
     * @var int|null
     */
    public ?int $i_member_group = null;

    /**
     * Number of the client groups of the business.
     *
     * @var int|null
     */
    public ?int $i_member_group_all = null;

    /**
     * `true` if the reminder is sent to certain client types only, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_login_type = null;

    /**
     * `true` if every client type of the business is selected, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_login_type_all = null;

    /**
     * `true` if the reminder is sent to certain client groups only, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_member_group = null;

    /**
     * `true` if every client group of the business is selected, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_member_group_all = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? new SetupGetResponseReminderInfoConfig((array)$data['a_config']) : null;
        $this->i_login_type = isset($data['i_login_type']) ? (int)$data['i_login_type'] : null;
        $this->i_login_type_all = isset($data['i_login_type_all']) ? (int)$data['i_login_type_all'] : null;
        $this->i_member_group = isset($data['i_member_group']) ? (int)$data['i_member_group'] : null;
        $this->i_member_group_all = isset($data['i_member_group_all']) ? (int)$data['i_member_group_all'] : null;
        $this->is_login_type = isset($data['is_login_type']) ? (bool)$data['is_login_type'] : null;
        $this->is_login_type_all = isset($data['is_login_type_all']) ? (bool)$data['is_login_type_all'] : null;
        $this->is_member_group = isset($data['is_member_group']) ? (bool)$data['is_member_group'] : null;
        $this->is_member_group_all = isset($data['is_member_group_all']) ? (bool)$data['is_member_group_all'] : null;
    }
}
