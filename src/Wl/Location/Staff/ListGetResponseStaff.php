<?php

namespace WlSdk\Wl\Location\Staff;

class ListGetResponseStaff
{
    /**
     * Name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Job title.
     *
     * @var string|null
     */
    public ?string $s_position = null;

    /**
     * 1st letter of surname.
     *
     * @var string|null
     */
    public ?string $s_surname = null;

    /**
     * ID as user. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_position = isset($data['s_position']) ? (string)$data['s_position'] : null;
        $this->s_surname = isset($data['s_surname']) ? (string)$data['s_surname'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
