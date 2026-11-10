<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeListGetResponseCode
{
    /**
     * List of services the code is applied to by default. Always empty for a system code: system codes are not
     * applied to services by default.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

    /**
     * `true` for a custom code of the business, `false` for a system code of the ICD-10-CM reference library.
     *
     * @var bool|null
     */
    public ?bool $is_custom = null;

    /**
     * Code value, as it is printed on receipts and invoices.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * Description of the code. The business typed it in for a custom code. For a system code it comes from the
     * reference library, in the language of the request.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->is_custom = isset($data['is_custom']) ? (bool)$data['is_custom'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
