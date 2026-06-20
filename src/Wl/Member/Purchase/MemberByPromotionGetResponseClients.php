<?php

namespace WlSdk\Wl\Member\Purchase;

class MemberByPromotionGetResponseClients
{
    /**
     * The list of active Purchase Options. Each element has:
     *
     * @var MemberByPromotionGetResponseClientsPurchaseOptions|null
     */
    public ?MemberByPromotionGetResponseClientsPurchaseOptions $a_purchase_options = null;

    /**
     * The key of the client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_purchase_options = isset($data['a_purchase_options']) ? new MemberByPromotionGetResponseClientsPurchaseOptions((array)$data['a_purchase_options']) : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
