<?php

namespace WlSdk\Thoth\WlPay\Bank\Card\Widget;

/**
 * Response from GET
 */
class WidgetSelectGetResponse
{
    /**
     * List of saved bank cards. See RsPayBankCardSelectWidget::additional_data() for details.
     *
     * @var array|null
     */
    public ?array $a_pay_card = null;

    public function __construct(array $data)
    {
        $this->a_pay_card = isset($data['a_pay_card']) ? (array)$data['a_pay_card'] : null;
    }
}
