<?php

namespace WlSdk\Wl\Pay\Bank\Card\Remove;

class RemoveDeleteRequest
{
    /**
     * Key of the business the card is being removed for. The card must belong to this business, see
     * PayBank::payBusinessTrx().
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the card to remove.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_pay_bank' => $this->k_pay_bank,
            ],
            static fn ($v) => $v !== null
        );
    }
}
