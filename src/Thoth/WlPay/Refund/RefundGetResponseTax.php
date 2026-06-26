<?php

namespace WlSdk\Thoth\WlPay\Refund;

class RefundGetResponseTax
{
    /**
     * Tax name.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Tax key. Primary key in RsTaxSql table.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    public function __construct(array $data)
    {
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->k_tax = isset($data['k_tax']) ? (string)$data['k_tax'] : null;
    }
}
