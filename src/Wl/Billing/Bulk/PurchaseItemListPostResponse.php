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
     * The totals of the bulk billing: the price of the selected items for a single client, and what the whole
     * batch
     *  adds up to once the client type discount of every client is applied. All amounts are money strings in the
     *  currency of the business. Has the following structure:
     *
     * @var PurchaseItemListPostResponseTotal|null
     */
    public ?PurchaseItemListPostResponseTotal $a_total = null;

    /**
     * The review id that identifies this prepared bulk billing. Pass it to {@link
     * \WlSdk\Wl\Billing\Bulk\BulkBilling} to schedule the
     *  billing without sending the clients and items again.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function __construct(array $data)
    {
        $this->a_client_bill = isset($data['a_client_bill']) ? new PurchaseItemListPostResponseClientBill((array)$data['a_client_bill']) : null;
        $this->a_client_restrict = isset($data['a_client_restrict']) ? new PurchaseItemListPostResponseClientRestrict((array)$data['a_client_restrict']) : null;
        $this->a_total = isset($data['a_total']) ? new PurchaseItemListPostResponseTotal((array)$data['a_total']) : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
    }
}
