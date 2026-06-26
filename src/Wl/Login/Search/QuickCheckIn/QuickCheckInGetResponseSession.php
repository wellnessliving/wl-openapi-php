<?php

namespace WlSdk\Wl\Login\Search\QuickCheckIn;

class QuickCheckInGetResponseSession
{
    /**
     * Session datetime in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Number of booked spots. `0` for gym visits and appointments.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * Total session capacity. `0` means unlimited (gym visits, appointments).
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Profile note ID from {@link \WlSdk\RsProfileNoteSid} that caused the denial, or `0` if there is no
     *    corresponding note. Used on the client side to suppress the specific denial message when the same issue
     *    is already shown in the alerts panel on the left.
     *
     * @var int|null
     * @see \WlSdk\RsProfileNoteSid
     */
    public ?int $id_profile_note = null;

    /**
     * Service type. One of {@link \WlSdk\Wl\Service\ServiceSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Service\ServiceSid
     */
    public ?int $id_service = null;

    /**
     * `true` if the client already has access (membership or pass). `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_access = null;

    /**
     * `true` if the client has already attended this session today. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_attend = null;

    /**
     * `true` if the client is already in the booking list. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * Appointment prrimary key. `'0'` if not an appointment.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Class primary key. `0` for gym visits and appointments.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Class session prrimary key. `0` if not a class.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Location primary key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * `true` if the client can check in without payment. `false` if payment is required.
     *
     * @var bool|null
     */
    public ?bool $show_free = null;

    /**
     * Human-readable denial reason when the client cannot check in. Empty string when check-in is available.
     *
     * @var string|null
     */
    public ?string $text_deny = null;

    /**
     * Location name for display.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Service name for display.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * Room name for display. Empty if no room is assigned to the session.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    /**
     * Staff name(s) for display. Empty for gym visits.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * Session time formatted for display. Empty for gym visits.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * Link to the attendance page for this session. Empty if not applicable.
     *
     * @var string|null
     */
    public ?string $url_attendance = null;

    /**
     * URL for the paid booking flow. Non-empty only for class sessions requiring payment.
     *
     * @var string|null
     */
    public ?string $url_book_process = null;

    /**
     * Class thumbnail image URL for the session preview. Empty for gym visits.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->id_profile_note = isset($data['id_profile_note']) ? (int)$data['id_profile_note'] : null;
        $this->id_service = isset($data['id_service']) ? (int)$data['id_service'] : null;
        $this->is_access = isset($data['is_access']) ? (bool)$data['is_access'] : null;
        $this->is_attend = isset($data['is_attend']) ? (bool)$data['is_attend'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->show_free = isset($data['show_free']) ? (bool)$data['show_free'] : null;
        $this->text_deny = isset($data['text_deny']) ? (string)$data['text_deny'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->url_attendance = isset($data['url_attendance']) ? (string)$data['url_attendance'] : null;
        $this->url_book_process = isset($data['url_book_process']) ? (string)$data['url_book_process'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
