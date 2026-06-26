<?php

namespace WlSdk\Wl\Marketing\Banner;

class BannerGetRequest
{
    /**
     * Banner type identifier to display.
     * One of {@link \WlSdk\Wl\Marketing\Banner\BannerContentSid} constants. `null` if not specified by the caller.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Banner\BannerContentSid
     */
    public ?int $id_banner_type = null;

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
            'id_banner_type' => $this->id_banner_type,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
