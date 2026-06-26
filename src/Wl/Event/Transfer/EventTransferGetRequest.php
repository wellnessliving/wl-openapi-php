<?php

namespace WlSdk\Wl\Event\Transfer;

class EventTransferGetRequest
{
    /**
     * Key of event purchase item to be transferred. Primary key in RsPurchaseItemSql table.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * User key to transfer purchased event from. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_from = null;

    /**
     * User key to transfer purchased event to. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_to = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_purchase_item' => $this->k_purchase_item,
            'uid_from' => $this->uid_from,
            'uid_to' => $this->uid_to,
            ],
            static fn ($v) => $v !== null
        );
    }
}
