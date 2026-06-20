<?php
namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponseCustomer
{
    /**
     * The customer's address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * The customer's email address.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The customer's name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * The customer's phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function __construct(array $data)
    {
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
    }
}
