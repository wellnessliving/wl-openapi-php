<?php
namespace WlSdk\Wl\Reception\Roster\Design;

/**
 * Response from GET
 */
class ReceptionRosterDesignApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_image = null;

    /**
     * Whether to hide client profile images.
     * `true` if client profile images should be hidden, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_profile_images = null;

    /**
     * Number of seconds of inactivity before automatic redirect.
     *
     * @var int|null
     */
    public ?int $i_attendance_direct_delay = null;

    /**
     * Number of minutes for the client check-in window after session has started.
     *
     * @var int|null
     */
    public ?int $i_book_open = null;

    /**
     * Units of time for the look ahead window for attendance app.
     *
     * @var int|null
     */
    public ?int $i_book_quick_app = null;

    /**
     * Delay in seconds on attendance web app confirmation screen before redirect to login screen.
     *
     * @var int|null
     */
    public ?int $i_confirm_delay = null;

    /**
     * ID of the action to take when automatically redirecting.
     * One of [DirectSid](#/components/schemas/Wl.Reception.Roster.DirectSid) constants.
     *
     * @var int|null
     */
    public ?int $id_attendance_direct = null;

    /**
     * Unit of time for the look ahead window for attendance app.
     *
     * @var int|null
     */
    public ?int $id_book_quick_app = null;

    /**
     * `true` if clients are allowed to check-in unpaid, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_attend_free = null;

    /**
     * Whether to allow sign-ins to classes in progress.
     *
     * @var bool|null
     */
    public ?bool $is_book_open = null;

    /**
     * `true` if clients are allowed to check-in without booking prior,
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_optional = null;

    /**
     * `true` if clients are allowed to sign in before session is started.,
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_quick_app = null;

    /**
     * `true` - show business name on attendance web app; `false` - do not show.
     *
     * @var bool|null
     */
    public ?bool $show_business_name = null;

    /**
     * `true` - show confirm screen on attendance web app;
     * `false` - do not show.
     *
     * @var bool|null
     */
    public ?bool $show_confirm_screen = null;

    /**
     * Name of the business to display in the attendance web app.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
        $this->hide_profile_images = isset($data['hide_profile_images']) ? (bool)$data['hide_profile_images'] : null;
        $this->i_attendance_direct_delay = isset($data['i_attendance_direct_delay']) ? (int)$data['i_attendance_direct_delay'] : null;
        $this->i_book_open = isset($data['i_book_open']) ? (int)$data['i_book_open'] : null;
        $this->i_book_quick_app = isset($data['i_book_quick_app']) ? (int)$data['i_book_quick_app'] : null;
        $this->i_confirm_delay = isset($data['i_confirm_delay']) ? (int)$data['i_confirm_delay'] : null;
        $this->id_attendance_direct = isset($data['id_attendance_direct']) ? (int)$data['id_attendance_direct'] : null;
        $this->id_book_quick_app = isset($data['id_book_quick_app']) ? (int)$data['id_book_quick_app'] : null;
        $this->is_attend_free = isset($data['is_attend_free']) ? (bool)$data['is_attend_free'] : null;
        $this->is_book_open = isset($data['is_book_open']) ? (bool)$data['is_book_open'] : null;
        $this->is_book_optional = isset($data['is_book_optional']) ? (bool)$data['is_book_optional'] : null;
        $this->is_book_quick_app = isset($data['is_book_quick_app']) ? (bool)$data['is_book_quick_app'] : null;
        $this->show_business_name = isset($data['show_business_name']) ? (bool)$data['show_business_name'] : null;
        $this->show_confirm_screen = isset($data['show_confirm_screen']) ? (bool)$data['show_confirm_screen'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
    }
}
