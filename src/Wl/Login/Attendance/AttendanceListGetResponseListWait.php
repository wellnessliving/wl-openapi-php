<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListGetResponseListWait
{
    /**
     * Information about member.
     *
     * @var AttendanceListGetResponseListWaitInfo|null
     */
    public ?AttendanceListGetResponseListWaitInfo $a_info = null;

    /**
     * Information about the user's photo. The information returned has the following structure:
     *
     * @var AttendanceListGetResponseListWaitPhoto|null
     */
    public ?AttendanceListGetResponseListWaitPhoto $a_photo = null;

    /**
     * Information about a user's current progress. By default, this information isn't sent.
     *
     * @var AttendanceListGetResponseListWaitProgress|null
     */
    public ?AttendanceListGetResponseListWaitProgress $a_progress = null;

    /**
     * Quiz information that concerns current visit.
     *
     * @var AttendanceListGetResponseListWaitQuiz|null
     */
    public ?AttendanceListGetResponseListWaitQuiz $a_quiz = null;

    /**
     * A list of information for any associated resources for this visit. Each element:
     *
     * @var AttendanceListGetResponseListWaitResource|null
     */
    public ?AttendanceListGetResponseListWaitResource $a_resource = null;

    /**
     * The date and time when the client transitioned from the wait list to the active list, in human-readable
     * format. Empty array if the visit is not awaiting confirmation. Each element:
     *
     * @var AttendanceListGetResponseListWaitWaitConfirm|null
     */
    public ?AttendanceListGetResponseListWaitWaitConfirm $a_wait_confirm = null;

    /**
     * A list of information pertaining to the client's wearables.
     *
     * @var AttendanceListGetResponseListWaitWearable|null
     */
    public ?AttendanceListGetResponseListWaitWearable $a_wearable = null;

    /**
     * If `true`, the current user can access this client profile.
     *
     * @var bool|null
     */
    public ?bool $can_profile = null;

    /**
     * The date the session was booked, in UTC.
     *
     * @var string|null
     */
    public ?string $dt_book = null;

    /**
     * The date of the session, in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The date the Purchase Option that was used will expire, in UTC.
     *
     * @var string|null
     */
    public ?string $dt_expire = null;

    /**
     * The date the client checked in for the visit, in UTC.
     *
     * @var string|null
     */
    public ?string $dt_register = null;

    /**
     * The client age.
     *
     * @var string|null
     */
    public ?string $html_age = null;

    /**
     * The name of the person who booked this visit.
     *
     * @var string|null
     */
    public ?string $html_book_by = null;

    /**
     * The name of the icon to show under gender in the class attendance list.
     *
     * @var string|null
     */
    public ?string $html_gender_class = null;

    /**
     * The client's member ID, if set.
     *
     * @var string|null
     */
    public ?string $html_member = null;

    /**
     * When and where this visit was booked, along with who booked it.
     *
     * @var string|null
     */
    public ?string $html_tooltip_book_by = null;

    /**
     * The default place in the list to show this client. This is a deprecated copy of the `i_order` field.
     *
     * @var int|null
     */
    public ?int $i = null;

    /**
     * The number of visits left on this Purchase Option. This will be `NULL` if there's no limit.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    /**
     * The default place in the list to show this client.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * The total visits available from this Purchase Option.
     *
     * @var int|null
     */
    public ?int $i_total = null;

    /**
     * Number of purchase option usages that was returned to user.
     *
     * @var int|null
     */
    public ?int $i_visit_return = null;

    /**
     * The gender ID of the client. One of the {@link \WlSdk\AGenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * If this visit was paid for by an external system, this ID will be set. Otherwise, it will be `0`. One of
     * {@link \WlSdk\Wl\Visit\PassProspectSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\PassProspectSid
     */
    public ?int $id_pass_prospect = null;

    /**
     * The program ID of the Purchase Option. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * The status of the visit. One of the {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * This will be `true` if the client has attended the visit.
     *
     * @var bool|null
     */
    public ?bool $is_attend = null;

    /**
     * This will be `true` if the Purchase Option used is a duration pass.
     *
     * @var bool|null
     */
    public ?bool $is_duration_pass = null;

    /**
     * This will be `true` if the client has paid a deposit for the visit.
     *
     * @var bool|null
     */
    public ?bool $is_deposit = null;

    /**
     * This will be `true` if the client has canceled the visit early, incurring no penalty.
     * This will be `false` if canceled late or if not canceled at all.
     *
     * @var bool|null
     */
    public ?bool $is_early = null;

    /**
     * This will be `true` if the visit is free.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * This will be `true` if details on this visit should be hidden from staff members.
     *
     * @var bool|null
     */
    public ?bool $is_hidden = null;

    /**
     * This will be `true` if this visit was cancelled late and a penalty is applied.
     *
     * @var bool|null
     */
    public ?bool $is_penalty = null;

    /**
     * This will be `true` if this was the first visit for the Purchase Option used.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_first = null;

    /**
     * This will be `true` if this was the latest visit for the Purchase Option used.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_last = null;

    /**
     * This will be `true` if the Purchase Option used has no usage limits.
     *
     * @var bool|null
     */
    public ?bool $is_unlimited = null;

    /**
     * This will be `true` if this visit is still considered valid.
     * If visit was removed by the system or a staff member, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_visit = null;

    /**
     * This will be `true` if the visit is on the waiting list.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * This will be `true` if the visit is awaiting confirmation.
     *
     * @var bool|null
     */
    public ?bool $is_wait_confirm = null;

    /**
     * This will be `true` if the visit has priority on the wait list.
     *
     * @var bool|null
     */
    public ?bool $is_wait_priority = null;

    /**
     * The key of the location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the client's Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of the visit.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The purchase used to pay for the session. Instance of
     * [PurchaseListElementApi](/Wl/Profile/PurchaseList/PurchaseListElement.json).
     * `null` if the visit has no associated purchase or access is denied. Only present when
     * `is_purchase_info_return` is `true`.
     *
     * @var string|null
     */
    public ?string $o_purchase_item = null;

    /**
     * The expiry information for the Purchase Option. This field is deprecated, use the text_ version instead.
     *
     * @var string|null
     */
    public ?string $s_expire = null;

    /**
     * The client's first name. This field is deprecated, use the text_ version instead.
     *
     * @var string|null
     */
    public ?string $s_firstname = null;

    /**
     * The client's last name. This field is deprecated, use the text_ version instead.
     *
     * @var string|null
     */
    public ?string $s_lastname = null;

    /**
     * Any notes tied to the client. This field is deprecated, use the text_ version instead.
     *
     * @var string|null
     */
    public ?string $s_note = null;

    /**
     * The description of the type of Purchase Option. This field is deprecated, use the text_ version instead.
     *
     * @var string|null
     */
    public ?string $s_promotion = null;

    /**
     * The expiry information for the Purchase Option.
     *
     * @var string|null
     */
    public ?string $text_expire = null;

    /**
     * The client first name.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * The client last name.
     *
     * @var string|null
     */
    public ?string $text_lastname = null;

    /**
     * Any notes tied to the client.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Title of purchase option usages of that was returned to user.
     *
     * @var string|null
     */
    public ?string $text_promotion_return = null;

    /**
     * The description of the type of Purchase Option.
     *
     * @var string|null
     */
    public ?string $text_promotion = null;

    /**
     * The Purchase Option restriction description. It can be empty string when the Purchase Option has no
     * restrictions.
     *
     * @var string|null
     */
    public ?string $text_restrict_title = null;

    /**
     * The class visit status.
     *
     * @var string|null
     */
    public ?string $text_visit_status_class = null;

    /**
     * The icon to use for the class visit status.
     *
     * @var string|null
     */
    public ?string $text_visit_status_icon = null;

    /**
     * The wearable device ID.
     *
     * @var string|null
     */
    public ?string $text_wearable = null;

    /**
     * The client user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The key of the user who made the booking.
     * If differing from `uid`, the booking could have been made by a staff or family member.
     *
     * @var string|null
     */
    public ?string $uid_book = null;

    /**
     * The URL that can be used to cancel the visit.
     *
     * @var string|null
     */
    public ?string $url_cancel = null;

    /**
     * The URL that can be used by an admin to cancel the visit.
     *
     * @var string|null
     */
    public ?string $url_cancel_admin = null;

    /**
     * The URL that for the user's page.
     *
     * @var string|null
     */
    public ?string $url_login_view = null;

    /**
     * The URL to a page for sending an email to the client.
     *
     * @var string|null
     */
    public ?string $url_mail = null;

    /**
     * The URL that for the client's profile.
     *
     * @var string|null
     */
    public ?string $url_profile = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? new AttendanceListGetResponseListWaitInfo((array)$data['a_info']) : null;
        $this->a_photo = isset($data['a_photo']) ? new AttendanceListGetResponseListWaitPhoto((array)$data['a_photo']) : null;
        $this->a_progress = isset($data['a_progress']) ? new AttendanceListGetResponseListWaitProgress((array)$data['a_progress']) : null;
        $this->a_quiz = isset($data['a_quiz']) ? new AttendanceListGetResponseListWaitQuiz((array)$data['a_quiz']) : null;
        $this->a_resource = isset($data['a_resource']) ? new AttendanceListGetResponseListWaitResource((array)$data['a_resource']) : null;
        $this->a_wait_confirm = isset($data['a_wait_confirm']) ? new AttendanceListGetResponseListWaitWaitConfirm((array)$data['a_wait_confirm']) : null;
        $this->a_wearable = isset($data['a_wearable']) ? new AttendanceListGetResponseListWaitWearable((array)$data['a_wearable']) : null;
        $this->can_profile = isset($data['can_profile']) ? (bool)$data['can_profile'] : null;
        $this->dt_book = isset($data['dt_book']) ? (string)$data['dt_book'] : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->dt_expire = isset($data['dt_expire']) ? (string)$data['dt_expire'] : null;
        $this->dt_register = isset($data['dt_register']) ? (string)$data['dt_register'] : null;
        $this->html_age = isset($data['html_age']) ? (string)$data['html_age'] : null;
        $this->html_book_by = isset($data['html_book_by']) ? (string)$data['html_book_by'] : null;
        $this->html_gender_class = isset($data['html_gender_class']) ? (string)$data['html_gender_class'] : null;
        $this->html_member = isset($data['html_member']) ? (string)$data['html_member'] : null;
        $this->html_tooltip_book_by = isset($data['html_tooltip_book_by']) ? (string)$data['html_tooltip_book_by'] : null;
        $this->i = isset($data['i']) ? (int)$data['i'] : null;
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->i_total = isset($data['i_total']) ? (int)$data['i_total'] : null;
        $this->i_visit_return = isset($data['i_visit_return']) ? (int)$data['i_visit_return'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->id_pass_prospect = isset($data['id_pass_prospect']) ? (int)$data['id_pass_prospect'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_attend = isset($data['is_attend']) ? (bool)$data['is_attend'] : null;
        $this->is_duration_pass = isset($data['is_duration_pass']) ? (bool)$data['is_duration_pass'] : null;
        $this->is_deposit = isset($data['is_deposit']) ? (bool)$data['is_deposit'] : null;
        $this->is_early = isset($data['is_early']) ? (bool)$data['is_early'] : null;
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_hidden = isset($data['is_hidden']) ? (bool)$data['is_hidden'] : null;
        $this->is_penalty = isset($data['is_penalty']) ? (bool)$data['is_penalty'] : null;
        $this->is_promotion_first = isset($data['is_promotion_first']) ? (bool)$data['is_promotion_first'] : null;
        $this->is_promotion_last = isset($data['is_promotion_last']) ? (bool)$data['is_promotion_last'] : null;
        $this->is_unlimited = isset($data['is_unlimited']) ? (bool)$data['is_unlimited'] : null;
        $this->is_visit = isset($data['is_visit']) ? (bool)$data['is_visit'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->is_wait_confirm = isset($data['is_wait_confirm']) ? (bool)$data['is_wait_confirm'] : null;
        $this->is_wait_priority = isset($data['is_wait_priority']) ? (bool)$data['is_wait_priority'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->o_purchase_item = isset($data['o_purchase_item']) ? (string)$data['o_purchase_item'] : null;
        $this->s_expire = isset($data['s_expire']) ? (string)$data['s_expire'] : null;
        $this->s_firstname = isset($data['s_firstname']) ? (string)$data['s_firstname'] : null;
        $this->s_lastname = isset($data['s_lastname']) ? (string)$data['s_lastname'] : null;
        $this->s_note = isset($data['s_note']) ? (string)$data['s_note'] : null;
        $this->s_promotion = isset($data['s_promotion']) ? (string)$data['s_promotion'] : null;
        $this->text_expire = isset($data['text_expire']) ? (string)$data['text_expire'] : null;
        $this->text_firstname = isset($data['text_firstname']) ? (string)$data['text_firstname'] : null;
        $this->text_lastname = isset($data['text_lastname']) ? (string)$data['text_lastname'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_promotion_return = isset($data['text_promotion_return']) ? (string)$data['text_promotion_return'] : null;
        $this->text_promotion = isset($data['text_promotion']) ? (string)$data['text_promotion'] : null;
        $this->text_restrict_title = isset($data['text_restrict_title']) ? (string)$data['text_restrict_title'] : null;
        $this->text_visit_status_class = isset($data['text_visit_status_class']) ? (string)$data['text_visit_status_class'] : null;
        $this->text_visit_status_icon = isset($data['text_visit_status_icon']) ? (string)$data['text_visit_status_icon'] : null;
        $this->text_wearable = isset($data['text_wearable']) ? (string)$data['text_wearable'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_book = isset($data['uid_book']) ? (string)$data['uid_book'] : null;
        $this->url_cancel = isset($data['url-cancel']) ? (string)$data['url-cancel'] : null;
        $this->url_cancel_admin = isset($data['url-cancel-admin']) ? (string)$data['url-cancel-admin'] : null;
        $this->url_login_view = isset($data['url-login-view']) ? (string)$data['url-login-view'] : null;
        $this->url_mail = isset($data['url-mail']) ? (string)$data['url-mail'] : null;
        $this->url_profile = isset($data['url-profile']) ? (string)$data['url-profile'] : null;
    }
}
