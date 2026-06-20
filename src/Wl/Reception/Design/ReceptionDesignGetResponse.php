<?php

namespace WlSdk\Wl\Reception\Design;

/**
 * Response from GET
 */
class ReceptionDesignGetResponse
{
    /**
     * Array of image information for Self Check-In logo.
     * Empty if `k_location` is not provided.
     *
     * Will contain the following keys:
     *
     *
     * If image for self check in app is empty, will attempt to obtain business logo instead. If business logo is
     * empty,
     * will attempt to obtain location logo.
     *
     * @var ReceptionDesignGetResponseReceptionLogo[]|null
     */
    public ?array $a_reception_logo = null;

    /**
     * `true` - client profile images will be hidden after the client signs in on the Check-in Kiosk;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_profile_images = null;

    /**
     * Number of minutes for the client check-in window after session has started.
     *
     * @var int|null
     */
    public ?int $i_book_open = null;

    /**
     * Delay in seconds on Check-in Confirmation Screen before redirect to Login screen.
     *
     * @var int|null
     */
    public ?int $i_confirm_delay = null;

    /**
     * Delay in seconds on Schedule Screen before redirect to Login screen.
     *
     * @var int|null
     */
    public ?int $i_schedule_delay = null;

    /**
     * ID of the sound for failed check in.
     *
     * @var int|null
     * @see \WlSdk\Wl\Reception\Design\CheckInSoundSid
     */
    public ?int $id_failed_sound = null;

    /**
     * ID of the sound for successful check in.
     *
     * @var int|null
     * @see \WlSdk\Wl\Reception\Design\CheckInSoundSid
     */
    public ?int $id_success_sound = null;

    /**
     * `true` - allow client to check-in unpaid;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_attend_free = null;

    /**
     * If only one service available with the look ahead window the client will:
     * `true` - automatically check in to it; `false` - have to select the service.
     *
     * @var bool|null
     */
    public ?bool $is_auto_check_in = null;

    /**
     * `true` - allow clients to check-in to sessions in progress;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_open = null;

    /**
     * `true` - allow client check-in without booking prior;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_optional = null;

    /**
     * `true` - enable check-in by client id;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_client_id = null;

    /**
     * `true` - enable check-in by email;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * `true` - require password while check-in;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_password = null;

    /**
     * `true` - enable check-in by phone;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_phone = null;

    /**
     * `true` - automatically reconcile unpaid visits upon check in;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_reconcile_auto = null;

    /**
     * `true` - show business name on client self check-in page;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_business_name = null;

    /**
     * `true` - show confirm screen after client self check-in;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_confirm_screen = null;

    /**
     * Name of the business to display on the client self check-in page.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    public function __construct(array $data)
    {
        $this->a_reception_logo = isset($data['a_reception_logo']) ? array_map(static fn ($item) => new ReceptionDesignGetResponseReceptionLogo((array)$item), (array)$data['a_reception_logo']) : null;
        $this->hide_profile_images = isset($data['hide_profile_images']) ? (bool)$data['hide_profile_images'] : null;
        $this->i_book_open = isset($data['i_book_open']) ? (int)$data['i_book_open'] : null;
        $this->i_confirm_delay = isset($data['i_confirm_delay']) ? (int)$data['i_confirm_delay'] : null;
        $this->i_schedule_delay = isset($data['i_schedule_delay']) ? (int)$data['i_schedule_delay'] : null;
        $this->id_failed_sound = isset($data['id_failed_sound']) ? (int)$data['id_failed_sound'] : null;
        $this->id_success_sound = isset($data['id_success_sound']) ? (int)$data['id_success_sound'] : null;
        $this->is_attend_free = isset($data['is_attend_free']) ? (bool)$data['is_attend_free'] : null;
        $this->is_auto_check_in = isset($data['is_auto_check_in']) ? (bool)$data['is_auto_check_in'] : null;
        $this->is_book_open = isset($data['is_book_open']) ? (bool)$data['is_book_open'] : null;
        $this->is_book_optional = isset($data['is_book_optional']) ? (bool)$data['is_book_optional'] : null;
        $this->is_client_id = isset($data['is_client_id']) ? (bool)$data['is_client_id'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_password = isset($data['is_password']) ? (bool)$data['is_password'] : null;
        $this->is_phone = isset($data['is_phone']) ? (bool)$data['is_phone'] : null;
        $this->is_reconcile_auto = isset($data['is_reconcile_auto']) ? (bool)$data['is_reconcile_auto'] : null;
        $this->show_business_name = isset($data['show_business_name']) ? (bool)$data['show_business_name'] : null;
        $this->show_confirm_screen = isset($data['show_confirm_screen']) ? (bool)$data['show_confirm_screen'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
    }
}
