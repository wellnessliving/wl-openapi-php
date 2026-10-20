<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassTicket
{
    /**
     * Ticket types of a ticketed event, in the order they are offered.
     *
     * Empty for an event that is not ticketed, and for a ticketed event that has no types yet.
     *
     * @var ClassEditorGetResponseClassTicketTicketOption|null
     */
    public ?ClassEditorGetResponseClassTicketTicketOption $a_ticket_option = null;

    /**
     * Number of tickets that may be bought in one order.
     *
     * @var int|null
     */
    public ?int $i_order_limit = null;

    /**
     * `true` if a buyer of a ticket must have an account, `false` if a name and an email address are enough.
     *
     * @var bool|null
     */
    public ?bool $is_account_require = null;

    /**
     * `true` if a buyer may reserve a ticket and pay for it at the door, `false` if a ticket is paid for at once.
     *
     * @var bool|null
     */
    public ?bool $is_door_pay = null;

    /**
     * `true` if a buyer of a ticket must agree to terms and conditions, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_terms = null;

    /**
     * Terms and conditions a buyer of a ticket must agree to.
     *
     * Empty string while `is_terms` is `false`.
     *
     * @var string|null
     */
    public ?string $xml_terms = null;

    public function __construct(array $data)
    {
        $this->a_ticket_option = isset($data['a_ticket_option']) ? new ClassEditorGetResponseClassTicketTicketOption((array)$data['a_ticket_option']) : null;
        $this->i_order_limit = isset($data['i_order_limit']) ? (int)$data['i_order_limit'] : null;
        $this->is_account_require = isset($data['is_account_require']) ? (bool)$data['is_account_require'] : null;
        $this->is_door_pay = isset($data['is_door_pay']) ? (bool)$data['is_door_pay'] : null;
        $this->is_terms = isset($data['is_terms']) ? (bool)$data['is_terms'] : null;
        $this->xml_terms = isset($data['xml_terms']) ? (string)$data['xml_terms'] : null;
    }
}
