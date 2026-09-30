<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeListGetResponseCode
{
    /**
     * Key of the code.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    /**
     * Code value, as it is printed on receipts and invoices.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * Description of the code the business typed in.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    public function __construct(array $data)
    {
        $this->k_code = isset($data['k_code']) ? (string)$data['k_code'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
