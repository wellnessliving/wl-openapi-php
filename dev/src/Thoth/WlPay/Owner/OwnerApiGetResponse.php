<?php
namespace WlSdk\Thoth\WlPay\Owner;

/**
 * Response from GET
 */
class OwnerApiGetResponse
{
    /**
     * The type of user for which transactions can be made (this property is optional).
     * 
     * This is one of the [RsPayOwnerSid](#/components/schemas/RsPayOwnerSid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay_owner = null;

    /**
     * Is client pay only for self. If parent pays for child this flag will be `false` for both.
     * `true` if client pay only for self, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_pay_self_only = null;

    /**
     * The payment owner key. This is used for financial transactions.
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    /**
     * Key of the money owner.
     *
     * @var string|null
     */
    public ?string $k_pay_owner_money = null;

    public function __construct(array $data)
    {
        $this->id_pay_owner = isset($data['id_pay_owner']) ? (int)$data['id_pay_owner'] : null;
        $this->is_pay_self_only = isset($data['is_pay_self_only']) ? (bool)$data['is_pay_self_only'] : null;
        $this->k_pay_owner = isset($data['k_pay_owner']) ? (string)$data['k_pay_owner'] : null;
        $this->k_pay_owner_money = isset($data['k_pay_owner_money']) ? (string)$data['k_pay_owner_money'] : null;
    }
}
