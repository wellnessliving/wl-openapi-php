<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Add;

class AddGetRequest
{
    /**
     * Locale ID.
     * `null` - if it is not set.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * Determines if the set of configs of the new payment form design is used.
     * `true` - if it is the new payment form design.
     * `false` - if it is the old payment form design.
     *
     * @var bool|null
     */
    public ?bool $is_new = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            'is_new' => $this->is_new,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_pay_owner' => $this->k_pay_owner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
