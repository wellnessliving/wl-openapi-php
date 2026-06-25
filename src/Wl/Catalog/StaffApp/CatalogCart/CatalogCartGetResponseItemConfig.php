<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfig
{
    /**
     * List of tuition components:
     *
     * @var CatalogCartGetResponseItemConfigEventList|null
     */
    public ?CatalogCartGetResponseItemConfigEventList $a_event_list = null;

    /**
     * The custom price.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * The prorate date. This should be passed when `is_prorate`=`true`.
     *
     * @var string|null
     */
    public ?string $dt_prorate = null;

    /**
     * The promotion start date.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Determines whether to prorate the first payment.
     *
     * @var bool|null
     */
    public ?bool $is_prorate = null;

    /**
     * Determines if the client should pay for the first period now.
     *
     * @var bool|null
     */
    public ?bool $is_prorate_fix = null;

    /**
     * Determines whether the selected option 'pay prorate amount only' should only include the prorate amount.
     *
     * @var bool|null
     */
    public ?bool $is_prorate_only = null;

    /**
     * The custom price of the gift card.
     *
     * @var string|null
     */
    public ?string $m_custom = null;

    /**
     * The date when the gift card email must be sent.
     *
     * @var string|null
     */
    public ?string $dt_send_local = null;

    /**
     * If `true`, the gift card will be sent via email. Otherwise, `false` if the gift card will be printed.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * The recipient's email.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The message.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    /**
     * The recipient's name.
     *
     * @var string|null
     */
    public ?string $s_recipient = null;

    /**
     * The sender's name.
     *
     * @var string|null
     */
    public ?string $s_sender = null;

    /**
     * The amount of money for the prorate period. This should only be passed in the case of manual entry.
     *
     * @var string|null
     */
    public ?string $m_prorate_custom = null;

    /**
     * The coupon key.
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    /**
     * The coupon amount key.
     *
     * @var string|null
     */
    public ?string $k_coupon_amount = null;

    public function __construct(array $data)
    {
        $this->a_event_list = isset($data['a_event_list']) ? new CatalogCartGetResponseItemConfigEventList((array)$data['a_event_list']) : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->dt_prorate = isset($data['dt_prorate']) ? (string)$data['dt_prorate'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->is_prorate = isset($data['is_prorate']) ? (bool)$data['is_prorate'] : null;
        $this->is_prorate_fix = isset($data['is_prorate_fix']) ? (bool)$data['is_prorate_fix'] : null;
        $this->is_prorate_only = isset($data['is_prorate_only']) ? (bool)$data['is_prorate_only'] : null;
        $this->m_custom = isset($data['m_custom']) ? (string)$data['m_custom'] : null;
        $this->dt_send_local = isset($data['dt_send_local']) ? (string)$data['dt_send_local'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->s_mail = isset($data['s_mail']) ? (string)$data['s_mail'] : null;
        $this->s_message = isset($data['s_message']) ? (string)$data['s_message'] : null;
        $this->s_recipient = isset($data['s_recipient']) ? (string)$data['s_recipient'] : null;
        $this->s_sender = isset($data['s_sender']) ? (string)$data['s_sender'] : null;
        $this->m_prorate_custom = isset($data['m_prorate_custom']) ? (string)$data['m_prorate_custom'] : null;
        $this->k_coupon = isset($data['k_coupon']) ? (string)$data['k_coupon'] : null;
        $this->k_coupon_amount = isset($data['k_coupon_amount']) ? (string)$data['k_coupon_amount'] : null;
    }
}
