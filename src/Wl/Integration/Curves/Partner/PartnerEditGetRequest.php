<?php

namespace WlSdk\Wl\Integration\Curves\Partner;

class PartnerEditGetRequest
{
    /**
     * If a partner is edited, its key is stored here.
     *
     * Primary key in PartnerSql table.
     *
     * `null` if a new partner should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_partner = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_partner' => $this->k_partner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
