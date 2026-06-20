<?php
namespace WlSdk\Wl\Login\Attendance\Add;

class AddPostRequest
{
    /**
     * The start date and time of the class in GMT and MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * Defines whether only single session can be booked for block event.
     * 
     * `true` Only current session of the block event will be booked in a case if staff event has appropriate
     * setting to do this action.
     *   In this case this session will be considered as session out of event block.
     * `false` all available event sessions will be booked.
     *   In this case session will be considered as part of event block.
     *
     * @var bool|null
     */
    public ?bool $is_event_single = null;

    /**
     * Key of the business in which the request must be processed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The client user key.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * Determines how the payment was handled for the session.
     * One of the {@link \WlSdk\Wl\Login\Attendance\AddOptionSid} constants.
     *
     * @var \WlSdk\Wl\Login\Attendance\AddOptionSid|null
     */
    public ?\WlSdk\Wl\Login\Attendance\AddOptionSid $id_add_option = null;

    /**
     * Determines how the session was booked.
     * One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     * We recommend using the `WEB_BACKEND` value.
     *
     * @var \WlSdk\Wl\Mode\ModeSid|null
     */
    public ?\WlSdk\Wl\Mode\ModeSid $id_mode = null;

    /**
     * The key of the user's promotion to be used for booking.
     * If empty, use any suitable user's promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of a session pass that can be used for a single session payment.
     * If no such payment is available, `0` will be returned.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_global' => $this->dt_date_global,
            'is_event_single' => $this->is_event_single,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid_client' => $this->uid_client,
            'id_add_option' => $this->id_add_option?->value,
            'id_mode' => $this->id_mode?->value,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            ],
            static fn($v) => $v !== null
        );
    }
}
