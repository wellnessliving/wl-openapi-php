<?php

namespace WlSdk\Wl\Staff\StaffList;

class StaffListGetResponseStaff
{
    /**
     * A list of internal pay rate keys applicable to the staff member.
     *
     * @var string[]|null
     */
    public ?array $a_pay_rate = null;

    /**
     * A list of all services, provided by the staff member.
     * Each element is an array with structure:
     *
     * @var StaffListGetResponseStaffStaffService|null
     */
    public ?StaffListGetResponseStaffStaffService $a_staff_service = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $html_name = null;

    /**
     * Order for sorting.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * Whether this staff provides appointments service.
     *
     * @var bool|null
     */
    public ?bool $is_appointment = null;

    /**
     * Whether this staff provides class service.
     *
     * @var bool|null
     */
    public ?bool $is_class = null;

    /**
     * Whether this staff provides events service.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * The staff key.
     * deprecated Use `uid_staff` instead. Returned only for backward-compatible applications.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The staff member first name. If there are rights, the full first name, if not, then depending on the
     * business settings.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The staff member position in the organization.
     *
     * @var string|null
     */
    public ?string $s_position = null;

    /**
     * The first letter of the staff member surname. If there are rights, the full surname, if not, then depending
     * on the business settings.
     *
     * @var string|null
     */
    public ?string $s_surname = null;

    /**
     * The entire surname of the staff member. This will be `null` if private staff member information isn't
     * accessible.
     *
     * @var string|null
     */
    public ?string $s_surname_full = null;

    /**
     * The full name of the staff member.
     *
     * @var string|null
     */
    public ?string $text_name_full = null;

    /**
     * The user key.
     * Each staff member in WellnessLiving can also access the system as a client of their business.
     * This is the key used to represent the staff member as a client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The staff member user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Url link to user photo, or empty string, if photo is not loaded.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_pay_rate = isset($data['a_pay_rate']) ? (array)$data['a_pay_rate'] : null;
        $this->a_staff_service = isset($data['a_staff_service']) ? new StaffListGetResponseStaffStaffService((array)$data['a_staff_service']) : null;
        $this->html_name = isset($data['html_name']) ? (string)$data['html_name'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->is_appointment = isset($data['is_appointment']) ? (bool)$data['is_appointment'] : null;
        $this->is_class = isset($data['is_class']) ? (bool)$data['is_class'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_position = isset($data['s_position']) ? (string)$data['s_position'] : null;
        $this->s_surname = isset($data['s_surname']) ? (string)$data['s_surname'] : null;
        $this->s_surname_full = isset($data['s_surname_full']) ? (string)$data['s_surname_full'] : null;
        $this->text_name_full = isset($data['text_name_full']) ? (string)$data['text_name_full'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
