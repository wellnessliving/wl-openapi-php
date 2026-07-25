<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Add;

class AddPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * If empty, user's home location will be used.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pay owner key.
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    /**
     * Array with ACH details from ACH widget.
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
