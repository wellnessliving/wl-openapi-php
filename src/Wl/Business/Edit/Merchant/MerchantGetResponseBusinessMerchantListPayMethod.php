<?php

namespace WlSdk\Wl\Business\Edit\Merchant;

class MerchantGetResponseBusinessMerchantListPayMethod
{
    /**
     * Id of the payment method. One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * Title of the payment method.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_pay_method = isset($data['id_pay_method']) ? (int)$data['id_pay_method'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
