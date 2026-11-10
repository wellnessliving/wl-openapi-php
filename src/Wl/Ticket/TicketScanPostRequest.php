<?php

namespace WlSdk\Wl\Ticket;

class TicketScanPostRequest
{
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
     * Whether it is allowed to check in a ticket after its session has ended.
     *
     * `false` to answer with an error in this case.
     *
     * @var bool|null
     */
    public ?bool $is_past_allowed = null;

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

    /**
     * Either the full key of the ticket or its short numbers-only code.
     *
     * The short code may contain any separators, for example `4829-1736`.
     *
     * @var string|null
     */
    public ?string $text_ticket = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_start' => $this->dtu_start,
            'id_mode' => $this->id_mode,
            'is_past_allowed' => $this->is_past_allowed,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'text_ticket' => $this->text_ticket,
            ],
            static fn ($v) => $v !== null
        );
    }
}
