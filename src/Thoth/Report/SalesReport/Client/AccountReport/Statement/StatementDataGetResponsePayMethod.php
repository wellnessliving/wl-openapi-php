<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

class StatementDataGetResponsePayMethod
{
    /**
     * Account method key. `0` for the default account balance.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Display name of the account method.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
