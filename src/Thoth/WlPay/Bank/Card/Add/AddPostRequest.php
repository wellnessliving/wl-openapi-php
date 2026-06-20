<?php

namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

class AddPostRequest
{
    /**
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The payment owner ID. This is different from the user ID. It can be found with
     * the [OwnerApi](/Thoth/WlPay/Owner/Owner.json).
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    /**
     * An array containing payment card information with the following fields:
     *
     * @var array|null
     */
    public ?array $a_card_detail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_pay_owner' => $this->k_pay_owner,
            'a_card_detail' => $this->a_card_detail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
