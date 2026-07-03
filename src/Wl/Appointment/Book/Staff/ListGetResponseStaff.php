<?php

namespace WlSdk\Wl\Appointment\Book\Staff;

class ListGetResponseStaff
{
    /**
     * Staff member's gender. One of {@link \WlSdk\AGenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * Whether staff member is available for booking. Note, if staff member reached daily limits, this field
     * will be different for client and staff booking flows. If client books, such staff member is not available
     * and
     * this field is `false`. If staff member books, such staff member is available.
     *
     * @var bool|null
     */
    public ?bool $is_available = null;

    /**
     * Whether staff member reached daily limits on number or total duration of the appointments for one day.
     *
     * @var bool|null
     */
    public ?bool $is_daily_limit = null;

    /**
     * Whether staff member available only for wait list booking.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list = null;

    /**
     * @deprecated Legacy staff key.  Returned only for allow-listed apps.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Position of the staff member in the business.
     *
     * @var string|null
     */
    public ?string $s_position = null;

    /**
     * Name of the staff member.
     *
     * @var string|null
     */
    public ?string $s_staff = null;

    /**
     * UID of the staff member.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Biography of the staff member.
     *
     * @var string|null
     */
    public ?string $xml_biography = null;

    public function __construct(array $data)
    {
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->is_available = isset($data['is_available']) ? (bool)$data['is_available'] : null;
        $this->is_daily_limit = isset($data['is_daily_limit']) ? (bool)$data['is_daily_limit'] : null;
        $this->is_wait_list = isset($data['is_wait_list']) ? (bool)$data['is_wait_list'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_position = isset($data['s_position']) ? (string)$data['s_position'] : null;
        $this->s_staff = isset($data['s_staff']) ? (string)$data['s_staff'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->xml_biography = isset($data['xml_biography']) ? (string)$data['xml_biography'] : null;
    }
}
