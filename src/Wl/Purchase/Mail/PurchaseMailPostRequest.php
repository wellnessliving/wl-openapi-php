<?php

namespace WlSdk\Wl\Purchase\Mail;

class PurchaseMailPostRequest
{
    /**
     * Determines whether mail sending should be forced.
     *
     * @var bool|null
     */
    public ?bool $is_send_force = null;

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
            'is_send_force' => $this->is_send_force,
            'k_purchase' => $this->k_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
