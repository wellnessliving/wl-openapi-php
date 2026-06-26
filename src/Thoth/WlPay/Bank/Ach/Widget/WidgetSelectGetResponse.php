<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Widget;

/**
 * Response from GET
 */
class WidgetSelectGetResponse
{
    /**
     * List of saved bank account. See RsPayBankAccountSelectWidget::additional_data() for details.
     *
     * @var array|null
     */
    public ?array $a_pay_bank = null;

    public function __construct(array $data)
    {
        $this->a_pay_bank = isset($data['a_pay_bank']) ? (array)$data['a_pay_bank'] : null;
    }
}
