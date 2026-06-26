<?php

namespace WlSdk\Wl\Business\Lead;

class BusinessChangePostRequest
{
    /**
     * Defines whether `k_business` should be associated with referral or with referrer business.
     *
     * `true` - to associate with referral business.
     * `false` - to associate with referrer business.
     *
     * @var bool|null
     */
    public ?bool $is_referral = null;

    /**
     * Depending on value `is_referral` defines referrer or referral business ID.
     * Empty value mean that business is not specified.
     * Primary key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of the business lead request within partner program.
     *
     * Primary key from LeadSql.
     *
     * @var string|null
     */
    public ?string $k_business_lead = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_referral' => $this->is_referral,
            'k_business' => $this->k_business,
            'k_business_lead' => $this->k_business_lead,
            ],
            static fn ($v) => $v !== null
        );
    }
}
