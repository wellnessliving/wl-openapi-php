<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Add;

class AddGetRequest
{
    /**
     * Locale ID. One of {@link \WlSdk\Core\Locale\LocaleSid} constants.
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
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key. Primary key in RsLocationSql table.
     *
     * If empty, user's home location will be used.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Pay owner key.
     *
     * Copy of result of PayOwner::ownerMoney().
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
