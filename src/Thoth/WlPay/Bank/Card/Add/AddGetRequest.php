<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

class AddGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_pay_owner' => $this->k_pay_owner,
            ],
            static fn($v) => $v !== null
        );
    }
}
