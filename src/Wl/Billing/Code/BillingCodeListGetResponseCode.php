<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeListGetResponseCode
{
    /**
     * List of services the code is applied to by default.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

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
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->k_code = isset($data['k_code']) ? (string)$data['k_code'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
