<?php
namespace WlSdk\Thoth\WlPay\Owner;

/**
 * Response from GET
 */
class OwnerGetResponse
{
    /**
     * The type of user for which transactions can be made (this property is optional).
     * 
     * This is one of the {@link \WlSdk\RsPayOwnerSid} constants.
     *
     * @var int|null
     */
    public ?int $id_pay_owner = null;

    /**
     * The payment owner key. This is used for financial transactions.
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    /**
     * Key of the money owner.
     * 
     * Copy of result of PayOwner::ownerMoney().
     *
     * @var string|null
     */
    public ?string $k_pay_owner_money = null;

    public function __construct(array $data)
    {
        $this->id_pay_owner = isset($data['id_pay_owner']) ? (int)$data['id_pay_owner'] : null;
        $this->k_pay_owner = isset($data['k_pay_owner']) ? (string)$data['k_pay_owner'] : null;
        $this->k_pay_owner_money = isset($data['k_pay_owner_money']) ? (string)$data['k_pay_owner_money'] : null;
    }
}
