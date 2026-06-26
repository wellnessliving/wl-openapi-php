<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Export;

class AccumulationPostRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Partner key.
     *
     * @var string|null
     */
    public ?string $k_partner = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_partner' => $this->k_partner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
