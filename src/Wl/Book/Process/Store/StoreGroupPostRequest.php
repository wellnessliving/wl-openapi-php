<?php

namespace WlSdk\Wl\Book\Process\Store;

class StoreGroupPostRequest
{
    /**
     * Date/time to which session is booked.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
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
     * A list of existing login promotions which are selected by a group of clients.
     *
     * This login promotions will be checked to determine if it can be applied to the current class or event.
     *
     * Keys are UIDs of clients, values are login promotion keys.
     *
     * @var string[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item_check = null;

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
     * A list of existing session passes (drop-in, full-event) which are selected by a group of clients.
     *
     * This session passes will be checked to determine if it can be applied to the current class or event.
     *
     * Keys are UIDs of clients, values are session pass keys.
     *
     * @var string[]|null
     */
    public ?array $a_session_pass = null;

    /**
     * A list of sessions which are selected by a group of clients.
     *
     * Keys are UIDs of clients, values are arrays of class period keys mapped to index arrays of
     *  dates/times when the session occurred (MySQL format; UTC).
     *
     * @var string[][][]|null
     */
    public ?array $a_session_select = null;

    /**
     * A list of wait list (unpaid) sessions which are selected by a group of clients.
     *
     * Keys are UIDs of clients, values are arrays of class period keys mapped to index arrays of
     *  dates/times when the session occurred (MySQL format; UTC).
     *
     * @var string[][][]|null
     */
    public ?array $a_session_wait_list_unpaid = null;

    /**
     * `true` if user pressed 'Pay later'.
     * `false` if user pressed 'Pay now'.
     *
     * @var bool|null
     */
    public ?bool $is_force_pay_later = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'a_login_promotion' => $this->a_login_promotion,
            'a_purchase_item_check' => $this->a_purchase_item_check,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_session_pass' => $this->a_session_pass,
            'a_session_select' => $this->a_session_select,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'is_force_pay_later' => $this->is_force_pay_later,
            ],
            static fn ($v) => $v !== null
        );
    }
}
