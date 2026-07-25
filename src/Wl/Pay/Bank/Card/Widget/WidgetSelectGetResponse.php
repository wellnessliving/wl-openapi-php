<?php

namespace WlSdk\Wl\Pay\Bank\Card\Widget;

/**
 * Response from GET
 */
class WidgetSelectGetResponse
{
    /**
     * List of saved bank cards.
     *
     * @var WidgetSelectGetResponsePayCard|null
     */
    public ?WidgetSelectGetResponsePayCard $a_pay_card = null;

    public function __construct(array $data)
    {
        $this->a_pay_card = isset($data['a_pay_card']) ? new WidgetSelectGetResponsePayCard((array)$data['a_pay_card']) : null;
    }
}
