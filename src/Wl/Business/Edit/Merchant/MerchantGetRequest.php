<?php

namespace WlSdk\Wl\Business\Edit\Merchant;

class MerchantGetRequest
{
    /**
     * Business key.
     * Primary key in RsBusinessSql table.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Specified payment merchant for which detail information should be return.
     * Primary key in RsBusinessMerchantSql table.
     *
     * `null` if it is need to return information about all payment processors for specified business.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            ],
            static fn ($v) => $v !== null
        );
    }
}
