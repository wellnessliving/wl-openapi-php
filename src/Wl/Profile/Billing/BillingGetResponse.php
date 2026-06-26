<?php

namespace WlSdk\Wl\Profile\Billing;

/**
 * Response from GET
 */
class BillingGetResponse
{
    /**
     * Whether to show account information.
     *
     * @var bool|null
     */
    public ?bool $is_show_account = null;

    /**
     * Whether to show credit card and ACH account list.
     *
     * @var bool|null
     */
    public ?bool $is_show_transaction = null;

    /**
     * Payer name in case if user is not self paid, `null` otherwise.
     *
     * @var string|null
     */
    public ?string $s_payer_name = null;

    /**
     * ID of a payer user to show logo for.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function __construct(array $data)
    {
        $this->is_show_account = isset($data['is_show_account']) ? (bool)$data['is_show_account'] : null;
        $this->is_show_transaction = isset($data['is_show_transaction']) ? (bool)$data['is_show_transaction'] : null;
        $this->s_payer_name = isset($data['s_payer_name']) ? (string)$data['s_payer_name'] : null;
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
    }
}
