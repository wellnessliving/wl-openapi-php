<?php

namespace WlSdk\Wl\Appointment\Book\Staff;

class ListGetResponseStaff
{
    /**
     * The first time from {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} to the end of the booking window
     * when the staff member can be
     *   booked without the wait list. Local date and time in the time zone of {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint}, in MySQL
     *   format, for example `2026-11-12 13:00:00`.
     * `null` when the staff member is available at {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint}, or has
     * no such time in the booking
     *   window.
     * <p>Returned only when {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is `true` and {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is passed.</p>
     *
     * @var string|null
     */
    public ?string $dt_next = null;

    /**
     * Staff member's gender. One of {@link \WlSdk\AGenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * How many clients can still be booked with the staff member at the requested time.
     * <p>If {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is not passed, this value is `null`.</p>
     * <p>If {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is passed, this is calculated for the specific
     * staff member at that time.</p>
     *
     * @var int|null
     */
    public ?int $i_free_spot = null;

    /**
     * Whether staff member is available for booking. Note, if staff member reached daily limits, this field
     * will be different for client and staff booking flows. If client books, such staff member is not available
     * and
     * this field is `false`. If staff member books, such staff member is available.
     * <p>When {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is `true`, this field is `true` exactly when
     * the first time found for
     *   `dt_next` is {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} itself, whoever books.</p>
     *
     * @var bool|null
     */
    public ?bool $is_available = null;

    /**
     * Whether staff member reached daily limits on number or total duration of the appointments for one day.
     * <p>When {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is `true`, the add-ons of {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} count in the
     *   duration.</p>
     *
     * @var bool|null
     */
    public ?bool $is_daily_limit = null;

    /**
     * Whether staff member available only for wait list booking.
     * <p>When {@link \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} is `true`, the add-ons of {@link
     * \WlSdk\Wl\Appointment\Book\Staff\ListEndpoint} count in the
     *   duration.</p>
     *
     * @var bool|null
     */
    public ?bool $is_wait_list = null;

    /**
     * **DEPRECATED** Legacy staff key.  Returned only for allow-listed apps.
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
        $this->dt_next = isset($data['dt_next']) ? (string)$data['dt_next'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->i_free_spot = isset($data['i_free_spot']) ? (int)$data['i_free_spot'] : null;
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
