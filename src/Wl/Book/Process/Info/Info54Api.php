<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Returns class and location booking information, enriched with localized date and time for each session.
 */
class Info54Api
{
    /**
     * Date/time to which session is booked.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * `true` if action is performed as a staff member; `false` otherwise.
     * 
     * If `true` is sent, access to the business and to the client will be checked.
     * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag
     * is set to `false`.
     * 
     * Use this field with caution.
     * The final booking will not use this flag, and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * Key of session which is booked.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * `true` if class capacity should be shown,
     * `false` to use business setting.
     *
     * @var bool|null
     */
    public ?bool $show_class_capacity = null;

    /**
     * `true` to show "book for" option in booking wizard. `false` for default behavior.
     *
     * @var bool|null
     */
    public ?bool $show_relation = null;

    /**
     * The client key for which the booking is being made.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_repeat = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_resource = null;

    /**
     * The selected sessions.
     * 
     * Keys are class period keys. 
     * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_select = null;

    /**
     * Selected sessions on the waiting list without pay.
     * 
     * Keys are class period keys. 
     * Values are index arrays of dates/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_wait_list_unpaid = null;

    /**
     * Determines whether the class/event can be booked at this step or not.
     * This is an external process control flag.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * Determines if the user has agreed to the liability release.
     * `true` - if  the user has agreed. Otherwise, this will be.
     * `false` - if the user hasn't agreed or the agreement isn't required.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * `true` to book unpaid.
     * `false` otherwise.
     * 
     * Allows booking unpaid when client has a login promotion that can be used to pay for the service.
     * Allowed in [ModeSid::WIDGET](#/components/schemas/Wl.Mode.ModeSid) mode only.
     *
     * @var bool|null
     */
    public ?bool $is_book_unpaid = null;

    /**
     * `true` if user pressed 'Pay later'.
     * `false` if user pressed 'Pay now'.
     *
     * @var bool|null
     */
    public ?bool $is_force_pay_later = null;

    /**
     * Login promotion to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Session pass to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * User signature.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class and location booking information, enriched with localized date and time for each session.
     *
     * Delegates to the parent implementation and then appends a localized `html_date_time` string to each
     * available session using the business locale and either the client's profile timezone or the location
     * timezone.
     *
     * @return Info54ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): Info54ApiGetResponse
    {
        return new Info54ApiGetResponse($this->client->request('/Wl/Book/Process/Info/Info54.json', $this->params(), 'GET'));
    }

    /**
     * Processes the "Class and Location" step of the booking wizard, optionally recording the waiver agreement and booking the session.
     *
     * Accepts the selected sessions, asset assignments, recurring configuration, and waiver signature, then
     * attempts
     * to book the session immediately when no further payment or resource steps are needed. Returns booking keys,
     * activity keys, and flags indicating whether additional wizard steps are required.
     *
     * @return Info54ApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): Info54ApiPostResponse
    {
        return new Info54ApiPostResponse($this->client->request('/Wl/Book/Process/Info/Info54.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'show_class_capacity' => $this->show_class_capacity,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_session_select' => $this->a_session_select,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'can_book' => $this->can_book,
            'is_agree' => $this->is_agree,
            'is_book_unpaid' => $this->is_book_unpaid,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            's_signature' => $this->s_signature,
            ],
            static fn($v) => $v !== null
        );
    }
}
