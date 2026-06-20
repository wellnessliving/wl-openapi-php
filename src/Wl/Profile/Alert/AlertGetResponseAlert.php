<?php

namespace WlSdk\Wl\Profile\Alert;

class AlertGetResponseAlert
{
    /**
     * The date and time in MySQL format in local time when the alert was last modified.
     * This will be `null` if the date isn't available for this alert.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * This will be `true` if the alert was added today. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_today = null;

    /**
     * ID of alert type. One of {@link \WlSdk\RsProfileNoteSid} constants.
     *
     * @var int|null
     */
    public ?int $id_profile_note = null;

    /**
     * The key of the client's account.
     *
     * @var string|null
     */
    public ?string $k_pay_account = null;

    /**
     * The key of the purchase item.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * The alert's text.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->is_today = isset($data['is_today']) ? (bool)$data['is_today'] : null;
        $this->id_profile_note = isset($data['id_profile_note']) ? (int)$data['id_profile_note'] : null;
        $this->k_pay_account = isset($data['k_pay_account']) ? (string)$data['k_pay_account'] : null;
        $this->k_purchase_item = isset($data['k_purchase_item']) ? (string)$data['k_purchase_item'] : null;
        $this->s_text = isset($data['s_text']) ? (string)$data['s_text'] : null;
    }
}
