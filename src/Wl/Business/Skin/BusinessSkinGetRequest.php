<?php

namespace WlSdk\Wl\Business\Skin;

class BusinessSkinGetRequest
{
    /**
     * Current place ID.
     * Constant from {@link \WlSdk\RsPlaceSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPlaceSid
     */
    public ?int $id_place = null;

    /**
     * Business key from RsBusinessSql.
     *
     * If `null` you will receive data for the default skin.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_place' => $this->id_place,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
