<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Widget;

/**
 * Response from GET
 */
class WidgetSelectGetResponse
{
    /**
     * List of saved bank accounts, keyed by bank account key. Each entry:
     *
     * @var WidgetSelectGetResponsePayBank|null
     */
    public ?WidgetSelectGetResponsePayBank $a_pay_bank = null;

    public function __construct(array $data)
    {
        $this->a_pay_bank = isset($data['a_pay_bank']) ? new WidgetSelectGetResponsePayBank((array)$data['a_pay_bank']) : null;
    }
}
