<?php
namespace WlSdk\Thoth\WlPay\Form;

class EnvironmentUserGetResponseMethodSupport
{
    /**
     * The ID of type of payment method. One of [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay_method = null;

    /**
     * Determines whether this method is available for clients. This field is only returned for custom payment
     * methods.
     *
     * @var bool|null
     */
    public ?bool $is_client = null;

    /**
     * The key of the custom payment method.
     * This will be `null` if this payment method isn't customized.
     * Primary key in MethodSql table.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * The name of payment method. This field is only returned for custom payment methods.
     *
     * @var string|null
     */
    public ?string $s_method = null;

    public function __construct(array $data)
    {
        $this->id_pay_method = isset($data['id_pay_method']) ? (int)$data['id_pay_method'] : null;
        $this->is_client = isset($data['is_client']) ? (bool)$data['is_client'] : null;
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->s_method = isset($data['s_method']) ? (string)$data['s_method'] : null;
    }
}
