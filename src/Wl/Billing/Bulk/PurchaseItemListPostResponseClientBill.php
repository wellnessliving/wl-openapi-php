<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseClientBill
{
    /**
     * The inventory and introductory-eligibility warnings produced while preparing the bill. Each
     * element has the following structure:
     *
     * @var PurchaseItemListPostResponseClientBillWarning|null
     */
    public ?PurchaseItemListPostResponseClientBillWarning $a_warning = null;

    /**
     * The list of clients that will be billed. Each element has the following structure:
     *
     * @var PurchaseItemListPostResponseClientBillClient|null
     */
    public ?PurchaseItemListPostResponseClientBillClient $a_client = null;

    public function __construct(array $data)
    {
        $this->a_warning = isset($data['a_warning']) ? new PurchaseItemListPostResponseClientBillWarning((array)$data['a_warning']) : null;
        $this->a_client = isset($data['a_client']) ? new PurchaseItemListPostResponseClientBillClient((array)$data['a_client']) : null;
    }
}
