<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

class SmsChatStaffAssignListGetResponseStaffAssign
{
    /**
     * Staff member first and last name.
     *
     * @var string|null
     */
    public ?string $text_full_name = null;

    /**
     * Staff UID. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->text_full_name = isset($data['text_full_name']) ? (string)$data['text_full_name'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
