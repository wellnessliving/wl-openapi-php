<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class Purchase56GetResponsePurchase
{
    /**
     * A list of installment plans. Every element has the next keys:
     *
     * @var Purchase56GetResponsePurchaseInstallmentTemplate|null
     */
    public ?Purchase56GetResponsePurchaseInstallmentTemplate $a_installment_template = null;

    /**
     * This is only set for Purchase Options. A list of limits on booking by the Purchase Option. Every element has
     * the next keys:
     *
     * @var Purchase56GetResponsePurchaseVisitLimit|null
     */
    public ?Purchase56GetResponsePurchaseVisitLimit $a_visit_limit = null;

    /**
     * The client prorate date.
     *
     * @var string|null
     */
    public ?string $dl_client_prorate = null;

    /**
     * The price.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * The price for early bookings.
     *
     * @var string|null
     */
    public ?string $f_price_early = null;

    /**
     * This is only set for Purchase Options with the 'membership' program type. The measurement unit int
     * `i_payment_period` in short form.
     *
     * @var string|null
     */
    public ?string $html_payment_period = null;

    /**
     * The description, ready to paste in a browser.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * The limit of sessions that can be booked by Purchase Options.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * This is only set for Purchase Options with the 'membership' program type. The duration of the regular
     * payment interval.
     *
     * @var int|null
     */
    public ?int $i_payment_period = null;

    /**
     * This is only set for purchases of single sessions. The number of sessions booked simultaneously.
     *
     * @var int|null
     */
    public ?int $i_session = null;

    /**
     * This is only set for promotions. The ID of the promotion program category. One of the {@link
     * \WlSdk\RsProgramCategorySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramCategorySid
     */
    public ?int $id_program_category = null;

    /**
     * This is only set for promotions. The ID of the promotion program type. One of the {@link
     * \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * The ID of Purchase Option type. One of the {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * If `true`, the Purchase Option requires a contract assignment. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_contract = null;

    /**
     * If `true`, the Purchase Option converts to another instance upon expiration. Otherwise, this will be
     * `false`.
     *
     * @var bool|null
     */
    public ?bool $is_convert = null;

    /**
     * If `true`, the Purchase Option is renewable. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /**
     * If `true`, the Purchase Option is renewable and the "auto-renew" option is turned on by default. Otherwise,
     * this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_renew_check = null;

    /**
     * The key of the Purchase Option in the database. The table depends on `id_purchase_item`.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the user's prize that can be used instead a Purchase Option to book the session.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * The key of the reward prize that can be used instead a Purchase Option to book the session.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * Payment for membership prorate. Not empty only if prorate payment is required.
     *
     * @var string|null
     */
    public ?string $m_prorate = null;

    /**
     * The contract of the Purchase Option. This is only set if `is_contract` is `true`.
     *
     * @var string|null
     */
    public ?string $s_contract = null;

    /**
     * This is only set for Purchase Options with the 'membership' program type. The measurement unit int
     * `i_payment_period`.
     *
     * @var string|null
     */
    public ?string $s_payment_duration = null;

    /**
     * This is only set if `is_convert` is `true`. The title to use for the new Purchase Option instance upon
     * auto-renewal.
     *
     * @var string|null
     */
    public ?string $s_promotion_convert = null;

    /**
     * The title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The unique identifier.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function __construct(array $data)
    {
        $this->a_installment_template = isset($data['a_installment_template']) ? new Purchase56GetResponsePurchaseInstallmentTemplate((array)$data['a_installment_template']) : null;
        $this->a_visit_limit = isset($data['a_visit_limit']) ? new Purchase56GetResponsePurchaseVisitLimit((array)$data['a_visit_limit']) : null;
        $this->dl_client_prorate = isset($data['dl_client_prorate']) ? (string)$data['dl_client_prorate'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->f_price_early = isset($data['f_price_early']) ? (string)$data['f_price_early'] : null;
        $this->html_payment_period = isset($data['html_payment_period']) ? (string)$data['html_payment_period'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_payment_period = isset($data['i_payment_period']) ? (int)$data['i_payment_period'] : null;
        $this->i_session = isset($data['i_session']) ? (int)$data['i_session'] : null;
        $this->id_program_category = isset($data['id_program_category']) ? (int)$data['id_program_category'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->is_contract = isset($data['is_contract']) ? (bool)$data['is_contract'] : null;
        $this->is_convert = isset($data['is_convert']) ? (bool)$data['is_convert'] : null;
        $this->is_renew = isset($data['is_renew']) ? (bool)$data['is_renew'] : null;
        $this->is_renew_check = isset($data['is_renew_check']) ? (bool)$data['is_renew_check'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
        $this->k_reward_prize = isset($data['k_reward_prize']) ? (string)$data['k_reward_prize'] : null;
        $this->m_prorate = isset($data['m_prorate']) ? (string)$data['m_prorate'] : null;
        $this->s_contract = isset($data['s_contract']) ? (string)$data['s_contract'] : null;
        $this->s_payment_duration = isset($data['s_payment_duration']) ? (string)$data['s_payment_duration'] : null;
        $this->s_promotion_convert = isset($data['s_promotion_convert']) ? (string)$data['s_promotion_convert'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
    }
}
