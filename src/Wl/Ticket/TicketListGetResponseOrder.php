<?php

namespace WlSdk\Wl\Ticket;

class TicketListGetResponseOrder
{
    /**
     * Ticket types of the order, not counting cancelled tickets. Every item has the next structure:
     *
     * @var TicketListGetResponseOrderType|null
     */
    public ?TicketListGetResponseOrderType $a_type = null;

    /**
     * Time when the order was bought, in the local time of the location, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_purchase = null;

    /**
     * `true` if the buyer agreed to the terms and conditions of the event. `false` if the terms were skipped,
     * or if the event has no terms.
     *
     * @var bool|null
     */
    public ?bool $has_terms_agree = null;

    /**
     * Number of tickets of the order that are checked in.
     *
     * @var int|null
     */
    public ?int $i_attend = null;

    /**
     * Number of tickets in the order, cancelled ones included.
     *
     * @var int|null
     */
    public ?int $i_ticket = null;

    /**
     * `true` if the buyer has an email address on file. `false` for a guest.
     *
     * @var bool|null
     */
    public ?bool $is_email = null;

    /**
     * `true` if the order was bought by a guest, who has no profile. In this case `text_name` is empty.
     *
     * @var bool|null
     */
    public ?bool $is_guest = null;

    /**
     * Number of the order: key of the purchase the tickets were bought with. Key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Amount refunded for the tickets of the order, with the currency {@link
     * \WlSdk\Wl\Ticket\TicketListGetResponse::$k_currency}.
     * Decimal string.
     *
     * @var string|null
     */
    public ?string $m_refund = null;

    /**
     * Amount of the tickets of the order after discounts and before taxes, with the currency
     * {@link \WlSdk\Wl\Ticket\TicketListGetResponse::$k_currency}. Decimal string.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * Surcharge taken for the purchase of the order. `0` if there is none. Decimal string.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * Taxes of the tickets of the order, with the currency {@link
     * \WlSdk\Wl\Ticket\TicketListGetResponse::$k_currency}. Decimal string.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * Total paid for the tickets of the order, net of refunds, with the currency
     * {@link \WlSdk\Wl\Ticket\TicketListGetResponse::$k_currency}. Decimal string.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * Full name of the buyer. Empty for a guest.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Key of the buyer, for the link to the profile. `null` for a guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to the page with all tickets of the order, to view and print them. .
     *
     * @var string|null
     */
    public ?string $url_viewer = null;

    public function __construct(array $data)
    {
        $this->a_type = isset($data['a_type']) ? new TicketListGetResponseOrderType((array)$data['a_type']) : null;
        $this->dtl_purchase = isset($data['dtl_purchase']) ? (string)$data['dtl_purchase'] : null;
        $this->has_terms_agree = isset($data['has_terms_agree']) ? (bool)$data['has_terms_agree'] : null;
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_ticket = isset($data['i_ticket']) ? (int)$data['i_ticket'] : null;
        $this->is_email = isset($data['is_email']) ? (bool)$data['is_email'] : null;
        $this->is_guest = isset($data['is_guest']) ? (bool)$data['is_guest'] : null;
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
        $this->m_refund = isset($data['m_refund']) ? (string)$data['m_refund'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_viewer = isset($data['url_viewer']) ? (string)$data['url_viewer'] : null;
    }
}
