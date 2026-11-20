<?php

namespace WlSdk\Wl\Quiz;

class QuizElement72GetResponseNotificationCustom
{
    /**
     * Number of selected client types.
     *
     * @var int|null
     */
    public ?int $i_login_type = null;

    /**
     * Number of all client types of the business.
     *
     * @var int|null
     */
    public ?int $i_login_type_all = null;

    /**
     * Number of selected client groups.
     *
     * @var int|null
     */
    public ?int $i_member_group = null;

    /**
     * Number of all client groups of the business.
     *
     * @var int|null
     */
    public ?int $i_member_group_all = null;

    /**
     * `true` if the confirmation is sent only to specific client types, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_login_type = null;

    /**
     * `true` if all client types are selected, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_login_type_all = null;

    /**
     * `true` if the confirmation is sent only to specific client groups, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_member_group = null;

    /**
     * `true` if all client groups are selected, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_member_group_all = null;

    /**
     * Key of the pattern of the custom confirmation. `null` if the form has no pattern yet.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    public function __construct(array $data)
    {
        $this->i_login_type = isset($data['i_login_type']) ? (int)$data['i_login_type'] : null;
        $this->i_login_type_all = isset($data['i_login_type_all']) ? (int)$data['i_login_type_all'] : null;
        $this->i_member_group = isset($data['i_member_group']) ? (int)$data['i_member_group'] : null;
        $this->i_member_group_all = isset($data['i_member_group_all']) ? (int)$data['i_member_group_all'] : null;
        $this->is_login_type = isset($data['is_login_type']) ? (bool)$data['is_login_type'] : null;
        $this->is_login_type_all = isset($data['is_login_type_all']) ? (bool)$data['is_login_type_all'] : null;
        $this->is_member_group = isset($data['is_member_group']) ? (bool)$data['is_member_group'] : null;
        $this->is_member_group_all = isset($data['is_member_group_all']) ? (bool)$data['is_member_group_all'] : null;
        $this->k_mail_pattern_live = isset($data['k_mail_pattern_live']) ? (string)$data['k_mail_pattern_live'] : null;
    }
}
