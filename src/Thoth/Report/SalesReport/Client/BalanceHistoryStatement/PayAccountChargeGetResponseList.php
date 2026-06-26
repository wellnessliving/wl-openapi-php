<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\BalanceHistoryStatement;

class PayAccountChargeGetResponseList
{
    /**
     * The pay method key. `'0'` for the default (system) account.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * URL of the "Make a payment" page for this account. See RsPayAccountCharge::url().
     *
     * @var string|null
     */
    public ?string $url_charge = null;

    public function __construct(array $data)
    {
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->url_charge = isset($data['url_charge']) ? (string)$data['url_charge'] : null;
    }
}
