<?php
namespace WlSdk\Thoth\WlPay\Method;

class ListGetResponsePayMethod
{
    /**
     * The payment method type ID. One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * @var int|null
     */
    public ?int $id_pay_method = null;

    /**
     * Payment method key. 
     * May be `null` if it is a system payment method.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * The payment method name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->id_pay_method = isset($data['id_pay_method']) ? (int)$data['id_pay_method'] : null;
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
