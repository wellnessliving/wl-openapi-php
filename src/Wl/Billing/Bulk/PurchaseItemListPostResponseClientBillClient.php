<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseClientBillClient
{
    /**
     * `true` if the client has no default payment method on file, has no email on file while a receipt is
     * to be sent, or is not eligible for at least one of the selected introductory items; `false`
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_warning = null;

    /**
     * The client email address. Empty string if the client has no email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The client full name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * The payment method label for this client. `Account` when billing to the client account; otherwise the
     * default stored card label (for example, `Visa ****1234`), the default ACH account label when no card
     * is on file, or an account fallback when neither is on file.
     *
     * @var string|null
     */
    public ?string $text_pay_method = null;

    /**
     * The client cell phone number. Empty string if the client has no cell phone.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The client user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->is_warning = isset($data['is_warning']) ? (bool)$data['is_warning'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_pay_method = isset($data['text_pay_method']) ? (string)$data['text_pay_method'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
