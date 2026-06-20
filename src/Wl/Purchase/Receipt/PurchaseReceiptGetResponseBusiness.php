<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponseBusiness
{
    /**
     * The business logo.
     *
     * @var PurchaseReceiptGetResponseBusinessLogo|null
     */
    public ?PurchaseReceiptGetResponseBusinessLogo $a_logo = null;

    /**
     * The business's address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * The business's email address.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The business's phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The business name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new PurchaseReceiptGetResponseBusinessLogo((array)$data['a_logo']) : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
