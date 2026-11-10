<?php

namespace WlSdk\Wl\Visit\Billing\Code;

class VisitBillingCodeDefaultGetResponseCodeService
{
    /**
     * Always `true`: only custom codes can be default codes of a service.
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
     * Description of the code.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    public function __construct(array $data)
    {
        $this->is_custom = isset($data['is_custom']) ? (bool)$data['is_custom'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
