<?php

namespace WlSdk\Wl\Business\Phone;

class PhoneRegulatoryBundlePostRequest
{
    /**
     * Business key.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Regulatory bundle SID from Twilio (located in the Regulatory Bundle they have submitted).
     * Used for australian businesses currently.
     *
     * @var string|null
     */
    public ?string $s_id_regulatory_bundle = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_id_regulatory_bundle' => $this->s_id_regulatory_bundle,
            ],
            static fn ($v) => $v !== null
        );
    }
}
