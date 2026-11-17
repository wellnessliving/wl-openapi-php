<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponsePurchaseDetail
{
    /**
     * The tickets of the purchase grouped by the event: one element for every instance of an event that has a
     * valid
     * ticket in the purchase, in the order of its first ticket. A ticket that is voided or refunded is not in the
     * links of the wallets and not in the PDF file, the page for print shows it as void, and an event whose
     * tickets
     * are all void is not given. Empty if the purchase has no valid tickets. Every element has the following
     * keys:
     *
     * @var PurchaseReceiptGetResponsePurchaseDetailTicketEvent|null
     */
    public ?PurchaseReceiptGetResponsePurchaseDetailTicketEvent $a_ticket_event = null;

    public function __construct(array $data)
    {
        $this->a_ticket_event = isset($data['a_ticket_event']) ? new PurchaseReceiptGetResponsePurchaseDetailTicketEvent((array)$data['a_ticket_event']) : null;
    }
}
