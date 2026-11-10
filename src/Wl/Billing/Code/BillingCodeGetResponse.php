<?php

namespace WlSdk\Wl\Billing\Code;

/**
 * Response from GET
 */
class BillingCodeGetResponse
{
    /**
     * Whether the code is removed from the central list of the business.
     *
     * `true` for a code that is not offered for selection anymore, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

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
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
