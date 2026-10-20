<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodePutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_code' => $this->text_code,
            'text_description' => $this->text_description,
            ],
            static fn ($v) => $v !== null
        );
    }
}
