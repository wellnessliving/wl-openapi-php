<?php

namespace WlSdk\Wl\Purchase\Share;

class PurchaseSharePostRequest
{
    /**
     * The social network. One of the {@link \WlSdk\ASocialSid} constants.
     *
     * @var int|null
     * @see \WlSdk\ASocialSid
     */
    public ?int $id_social = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_social' => $this->id_social,
            'k_purchase' => $this->k_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
