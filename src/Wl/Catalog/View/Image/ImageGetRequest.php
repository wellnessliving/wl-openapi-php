<?php

namespace WlSdk\Wl\Catalog\View\Image;

class ImageGetRequest
{
    /**
     * ID of sale category. One of {@link \WlSdk\RsSaleSid}.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * ID of the sale item.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Shop product option ID.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_sale' => $this->id_sale,
            'k_id' => $this->k_id,
            'k_shop_product_option' => $this->k_shop_product_option,
            ],
            static fn ($v) => $v !== null
        );
    }
}
