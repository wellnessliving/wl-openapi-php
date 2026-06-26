<?php

namespace WlSdk\Wl\Html\Menu;

class MenuGetRequest
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
     * The business in which the user wants to see the menu.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user for which the menu should be displayed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_place' => $this->id_place,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
