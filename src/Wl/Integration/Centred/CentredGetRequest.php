<?php

namespace WlSdk\Wl\Integration\Centred;

class CentredGetRequest
{
    /**
     * Business key.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Studio ID of the business.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_studio_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_studio_id' => $this->s_studio_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
