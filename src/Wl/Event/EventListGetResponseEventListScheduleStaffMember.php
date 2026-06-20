<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventListScheduleStaffMember
{
    /**
     * Staff member key.
     *
     * @var string|null
     */
    public ?string $k_staff_member = null;

    /**
     * Staff member role title.
     *
     * @var string|null
     */
    public ?string $text_business_role = null;

    /**
     * Staff member email address.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Staff member first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Staff member full name.
     *
     * @var string|null
     */
    public ?string $text_name_full = null;

    /**
     * Staff member last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Staff member uid.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->k_staff_member = isset($data['k_staff_member']) ? (string)$data['k_staff_member'] : null;
        $this->text_business_role = isset($data['text_business_role']) ? (string)$data['text_business_role'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_full = isset($data['text_name_full']) ? (string)$data['text_name_full'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
