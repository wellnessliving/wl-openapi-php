<?php

namespace WlSdk\Wl\Billing\Bulk;

/**
 * Response from POST
 */
class PurchaseItemListPostResponse
{
    /**
     * The list of clients that will be billed. Each element has the following structure:
     *
     * @var PurchaseItemListPostResponseClientBill[]|null
     */
    public ?array $a_client_bill = null;

    /**
     * The list of clients that will be skipped due to restrictions. Each element has the same structure as an
     *  element of {@link \WlSdk\Wl\Billing\Bulk\PurchaseItemListPostResponse::$a_client_bill}.
     *
     * This list is always empty for now and will be populated once the restriction checks are implemented.
     *
     * @var array[]|null
     */
    public ?array $a_client_ignore = null;

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
        $this->a_client_bill = isset($data['a_client_bill']) ? array_map(static fn ($item) => new PurchaseItemListPostResponseClientBill((array)$item), (array)$data['a_client_bill']) : null;
        $this->a_client_ignore = isset($data['a_client_ignore']) ? (array)$data['a_client_ignore'] : null;
        $this->m_batch = isset($data['m_batch']) ? (string)$data['m_batch'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
