<?php
namespace WlSdk\Wl\Quiz;

class QuizElementPutResponseSetting
{
    /**
     * List of additional email addresses which should receive email notification after quiz is submitted.
     * 
     * Considered only if `is_notify_additional` is `true`.
     *
     * @var string[]|null
     */
    public ?array $a_notify_additional = null;

    /**
     * List of services grouped by service ID.
     * 
     * Key is service ID. One of [ServiceSid](#/components/schemas/Wl.Quiz.Service.ServiceSid) constants.
     * Values is list of services.
     *
     * @var string[][]|null
     */
    public ?array $a_service = null;

    /**
     * Whether completed forms should be hidden for client in frontend.
     *
     * @var bool|null
     */
    public ?bool $hide_frontend = null;

    /**
     * Number of periods email reminders should be sent for incomplete forms after. Type of a period is specified
     * by
     *   `id_notify_automated`.
     *
     * @var int|string|null
     */
    public $i_notify_automated = null;

    /**
     * Whether response is required every time they book service.
     * 
     * Considered only if `is_book` is `true`.
     *
     * @var int|null
     */
    public ?int $id_book_request_type = null;

    /**
     * Time interval ID. One of [ADurationSid](#/components/schemas/ADurationSid) constants.
     *
     * @var int|null
     */
    public ?int $id_notify_automated = null;

    /**
     * Whether response is required every time they purchase service.
     * 
     * Considered only if `is_purchase` is `true`.
     *
     * @var int|null
     */
    public ?int $id_purchase_request_type = null;

    /**
     * Whether form support amending responses.
     *
     * @var bool|null
     */
    public ?bool $is_amend_support = null;

    /**
     * Whether quiz is required during/after book service selected in `a_service` list.
     * * Related to options:
     * * * `is_service_all`
     * * * `is_book_before`
     * * * `id_book_request_type`
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * Whether quiz is required during booking process.
     * 
     * Considered only if `is_book` is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_book_before = null;

    /**
     * Whether form can be required for clients.
     * Internal forms can be only added to client profiles or filled by direct link,
     *  but they don't prevent clients to perform any actions until form filled.
     *  `true` if form can be visible to clients
     *  `false` otherwise
     *
     * @var bool|null
     */
    public ?bool $is_internal = null;

    /**
     * Whether email notification should be sent to specific email addresses after quiz is submitted.
     * 
     * List of email addresses stored in `a_notify_additional`.
     *
     * @var bool|null
     */
    public ?bool $is_notify_additional = null;

    /**
     * Whether email reminders should be sent for incomplete forms.
     *
     * @var bool|null
     */
    public ?bool $is_notify_automated = null;

    /**
     * Whether email notification should be sent to client after quiz submitted.
     *
     * @var bool|null
     */
    public ?bool $is_notify_client = null;

    /**
     * Whether email notification should be sent to staff members after quiz is submitted.
     *
     * @var bool|null
     */
    public ?bool $is_notify_staff = null;

    /**
     * Whether form can be edited by franchisee.
     * `true` prevent franchisees from editing this form, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_prevent_franchisee = null;

    /**
     * Whether form can be viewed by staff member only after confirmation.
     * `true` if form can be viewed only after confirmation
     * `false` if form can be viewed always
     *
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * Whether quiz is required during/after purchase service selected in `a_service` list.
     * Related to options:
     * * `is_purchase_all`
     * * `is_purchase_before`
     * * `id_purchase_request_type`
     *
     * @var bool|null
     */
    public ?bool $is_purchase = null;

    /**
     * Whether all services for purchase should be added in `a_service`.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_all = null;

    /**
     * Whether quiz is required during purchase process.
     * 
     * Considered only if `is_purchase` is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_before = null;

    /**
     * Whether quiz is required after registration process.
     *
     * @var bool|null
     */
    public ?bool $is_register_after = null;

    /**
     * Whether quiz is required during registration process.
     * 
     * Considered only if `is_register_after` is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_register_before = null;

    /**
     * Whether client should be redirected to sign-in page before completing the form.
     *
     * @var bool|null
     */
    public ?bool $is_require_user = null;

    /**
     * Whether all services for booking should be added in `a_service`.
     *
     * @var bool|null
     */
    public ?bool $is_service_all = null;

    public function __construct(array $data)
    {
        $this->a_notify_additional = isset($data['a_notify_additional']) ? (array)$data['a_notify_additional'] : null;
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->hide_frontend = isset($data['hide_frontend']) ? (bool)$data['hide_frontend'] : null;
        $this->i_notify_automated = $data['i_notify_automated'] ?? null;
        $this->id_book_request_type = isset($data['id_book_request_type']) ? (int)$data['id_book_request_type'] : null;
        $this->id_notify_automated = isset($data['id_notify_automated']) ? (int)$data['id_notify_automated'] : null;
        $this->id_purchase_request_type = isset($data['id_purchase_request_type']) ? (int)$data['id_purchase_request_type'] : null;
        $this->is_amend_support = isset($data['is_amend_support']) ? (bool)$data['is_amend_support'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_book_before = isset($data['is_book_before']) ? (bool)$data['is_book_before'] : null;
        $this->is_internal = isset($data['is_internal']) ? (bool)$data['is_internal'] : null;
        $this->is_notify_additional = isset($data['is_notify_additional']) ? (bool)$data['is_notify_additional'] : null;
        $this->is_notify_automated = isset($data['is_notify_automated']) ? (bool)$data['is_notify_automated'] : null;
        $this->is_notify_client = isset($data['is_notify_client']) ? (bool)$data['is_notify_client'] : null;
        $this->is_notify_staff = isset($data['is_notify_staff']) ? (bool)$data['is_notify_staff'] : null;
        $this->is_prevent_franchisee = isset($data['is_prevent_franchisee']) ? (bool)$data['is_prevent_franchisee'] : null;
        $this->is_private = isset($data['is_private']) ? (bool)$data['is_private'] : null;
        $this->is_purchase = isset($data['is_purchase']) ? (bool)$data['is_purchase'] : null;
        $this->is_purchase_all = isset($data['is_purchase_all']) ? (bool)$data['is_purchase_all'] : null;
        $this->is_purchase_before = isset($data['is_purchase_before']) ? (bool)$data['is_purchase_before'] : null;
        $this->is_register_after = isset($data['is_register_after']) ? (bool)$data['is_register_after'] : null;
        $this->is_register_before = isset($data['is_register_before']) ? (bool)$data['is_register_before'] : null;
        $this->is_require_user = isset($data['is_require_user']) ? (bool)$data['is_require_user'] : null;
        $this->is_service_all = isset($data['is_service_all']) ? (bool)$data['is_service_all'] : null;
    }
}
