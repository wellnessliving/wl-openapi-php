<?php

namespace WlSdk\Wl\Classes\Period\Info;

class ClassPeriodGetResponseStaff
{
    /**
     * Whether the staff member is a substitute for this session.
     *
     * @var bool|null
     */
    public ?bool $is_staff_change = null;

    /**
     * UID of the staff member. Primary key from PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Full name of the staff.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Staff`s job title.
     *
     * @var string|null
     */
    public ?string $text_position = null;

    /**
     * Staff`s logo.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->is_staff_change = isset($data['is_staff_change']) ? (bool)$data['is_staff_change'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_position = isset($data['text_position']) ? (string)$data['text_position'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
