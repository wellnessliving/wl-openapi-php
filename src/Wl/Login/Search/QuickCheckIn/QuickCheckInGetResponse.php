<?php

namespace WlSdk\Wl\Login\Search\QuickCheckIn;

/**
 * Response from GET
 */
class QuickCheckInGetResponse
{
    /**
     * Alert items for display in the check-in result modal.
     *
     * Empty when `is_navigate` is `true` or when no alerts exist.
     * Each element is one item from RsProfileNote::list_all() with `is_backend` set to `true`.
     * Keys used for rendering: `html_text`, `s_class_css`, `s_text`, `url`, `is_panel`, `s_onclick`,
     *  `s_url`, `is_birthday_icon`, `is_hide`.
     *
     * @var array[]|null
     */
    public ?array $a_note = null;

    /**
     * List of today's sessions available for check-in.
     * Empty when `is_navigate` is `true` or when no sessions are found.
     * Each element:
     *
     * @var QuickCheckInGetResponseSession[]|null
     */
    public ?array $a_session = null;

    /**
     * Number of seconds before the session popup auto-closes when all sessions are already attended.
     * Used only when `is_attend_quick_close_success` is `true`.
     *
     * @var int|null
     */
    public ?int $i_attend_quick_close_success = null;

    /**
     * Whether the session popup should auto-close when all sessions are already attended.
     * The popup closes after `i_attend_quick_close_success` seconds.
     *
     * @var bool|null
     */
    public ?bool $is_attend_quick_close_success = null;

    /**
     * `true` if the business is configured to navigate to the client profile after a QUICK AUTO Check-In scan.
     *  In this case `url_user_profile` is non-empty and `a_session` is empty.
     * `false` if sessions should be processed - see `a_session`.
     *
     * @var bool|null
     */
    public ?bool $is_navigate = null;

    /**
     * Client full name.
     *
     * @var string|null
     */
    public ?string $text_user_name = null;

    /**
     * Client photo URL for display in the session popup.
     *
     * @var string|null
     */
    public ?string $url_user_photo = null;

    /**
     * Client profile URL. Used for navigation when `is_navigate` is `true`,
     *  and for the "View profile" link in the session popup when `false`.
     *
     * @var string|null
     */
    public ?string $url_user_profile = null;

    public function __construct(array $data)
    {
        $this->a_note = isset($data['a_note']) ? (array)$data['a_note'] : null;
        $this->a_session = isset($data['a_session']) ? array_map(static fn ($item) => new QuickCheckInGetResponseSession((array)$item), (array)$data['a_session']) : null;
        $this->i_attend_quick_close_success = isset($data['i_attend_quick_close_success']) ? (int)$data['i_attend_quick_close_success'] : null;
        $this->is_attend_quick_close_success = isset($data['is_attend_quick_close_success']) ? (bool)$data['is_attend_quick_close_success'] : null;
        $this->is_navigate = isset($data['is_navigate']) ? (bool)$data['is_navigate'] : null;
        $this->text_user_name = isset($data['text_user_name']) ? (string)$data['text_user_name'] : null;
        $this->url_user_photo = isset($data['url_user_photo']) ? (string)$data['url_user_photo'] : null;
        $this->url_user_profile = isset($data['url_user_profile']) ? (string)$data['url_user_profile'] : null;
    }
}
