<?php

namespace WlSdk\Wl\Marketing\Banner;

class BannerDeleteRequest
{
    /**
     * The business key within which the request is made.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
