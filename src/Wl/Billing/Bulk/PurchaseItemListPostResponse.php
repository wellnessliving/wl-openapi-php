<?php

namespace WlSdk\Wl\Billing\Bulk;

/**
 * Response from POST
 */
class PurchaseItemListPostResponse
{
    /**
     * The result of preparing the clients to bill. Has the following structure:
     *
     * @var PurchaseItemListPostResponseClientBill|null
     */
    public ?PurchaseItemListPostResponseClientBill $a_client_bill = null;

    /**
     * The clients removed from the bulk billing because a selected item is not available to their client type or
     *  member group, together with the warnings that explain why. Has the following structure:
     *
     * @var PurchaseItemListPostResponseClientRestrict|null
     */
    public ?PurchaseItemListPostResponseClientRestrict $a_client_restrict = null;

    /**
     * The total amount charged across every client that will be billed (per-client total multiplied by the number
     *  of billed clients). Excludes taxes when {@link \WlSdk\Wl\Billing\Bulk\PurchaseItemList} is `false`.
     *
     * @var string|null
     */
    public ?string $m_batch = null;

    /**
     * The subtotal per client (sum of the selected purchase item prices, excluding taxes).
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * The tax amount per client. Always `0` when {@link \WlSdk\Wl\Billing\Bulk\PurchaseItemList} is `false`.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * The total per client (subtotal plus tax).
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->a_client_bill = isset($data['a_client_bill']) ? new PurchaseItemListPostResponseClientBill((array)$data['a_client_bill']) : null;
        $this->a_client_restrict = isset($data['a_client_restrict']) ? new PurchaseItemListPostResponseClientRestrict((array)$data['a_client_restrict']) : null;
        $this->m_batch = isset($data['m_batch']) ? (string)$data['m_batch'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
