<?php

namespace WlSdk\Wl\Ticket;

class TicketScanListPostRequest
{
    /**
     * Keys of the tickets to check in, as {@link \WlSdk\Wl\Ticket\TicketList} returns them.
     *
     * A key that is repeated is checked in once.
     *
     * @var string[]|null
     */
    public ?array $a_ticket_item = null;

    /**
     * Start of the session being checked in, in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * Source of the check-in. One of {@link \WlSdk\Wl\Mode\ModeSid}.
     *
     * `0` if not specified, in this case the source is detected from the current request.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the class period the session being checked in belongs to.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_ticket_item' => $this->a_ticket_item,
            'dtu_start' => $this->dtu_start,
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn ($v) => $v !== null
        );
    }
}
