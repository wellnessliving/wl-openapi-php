<?php
namespace WlSdk\Wl\Book\Process;

/**
 * Response from GET
 */
class ProcessGetResponse
{
    /**
     * Relationships who clients are allowed to book for.
     * One of the {@link \WlSdk\RsFamilyRelationSid} constants.
     * 
     * This will be `null` if clients aren't allowed to book for their relationships.
     *
     * @var int[]|null
     */
    public ?array $a_family_relation_login_allow = null;

    /**
     * All the steps to be performed to make a booking. Every element has the next keys:
     *
     * @var ProcessGetResponsePath[]|null
     */
    public ?array $a_path = null;

    /**
     * The purchase rule ID.
     * One of the {@link \WlSdk\Wl\Classes\RequirePaySid} constants.
     *
     * @var int|null
     */
    public ?int $id_pay_require = null;

    /**
     * `true` if this class has age restriction and requires user to specify age. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_age_require = null;

    /**
     * Determines if the client must authorize the credit card.
     *
     * @var bool|null
     */
    public ?bool $is_card_authorize = null;

    /**
     * If `true`, the session being booked is an event. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Determines whether clients are allowed to book for their relationships without switching profiles.
     *
     * @var bool|null
     */
    public ?bool $is_family_relation_book = null;

    /**
     * Determines whether the class/event is free (price).
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * `true` if the client has an ach account, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_have_ach = null;

    /**
     * If `true`, the client has a credit card. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_have_credit_card = null;

    /**
     * `true` - the client can select several sessions per booking.
     * 
     * `false` - the client can't select several sessions.
     *
     * @var bool|null
     */
    public ?bool $is_session = null;

    /**
     * If `true`, the user can be placed on a wait list. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * If `true`, the user can be placed on a wait list without payment, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_unpaid = null;

    /**
     * The key of the location where the session is booked.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_family_relation_login_allow = isset($data['a_family_relation_login_allow']) ? (array)$data['a_family_relation_login_allow'] : null;
        $this->a_path = isset($data['a_path']) ? array_map(static fn($item) => new ProcessGetResponsePath((array)$item), (array)$data['a_path']) : null;
        $this->id_pay_require = isset($data['id_pay_require']) ? (int)$data['id_pay_require'] : null;
        $this->is_age_require = isset($data['is_age_require']) ? (bool)$data['is_age_require'] : null;
        $this->is_card_authorize = isset($data['is_card_authorize']) ? (bool)$data['is_card_authorize'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_family_relation_book = isset($data['is_family_relation_book']) ? (bool)$data['is_family_relation_book'] : null;
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_have_ach = isset($data['is_have_ach']) ? (bool)$data['is_have_ach'] : null;
        $this->is_have_credit_card = isset($data['is_have_credit_card']) ? (bool)$data['is_have_credit_card'] : null;
        $this->is_session = isset($data['is_session']) ? (bool)$data['is_session'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->is_wait_list_unpaid = isset($data['is_wait_list_unpaid']) ? (bool)$data['is_wait_list_unpaid'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
