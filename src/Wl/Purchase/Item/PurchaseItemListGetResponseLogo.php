<?php

namespace WlSdk\Wl\Purchase\Item;

class PurchaseItemListGetResponseLogo
{
    /**
     * Image details, present only when the business has a logo image (when `is_empty` is
     * `false`):
     *
     * @var PurchaseItemListGetResponseLogoImage|null
     */
    public ?PurchaseItemListGetResponseLogoImage $a_image = null;

    /**
     * Thumbnail height, or the empty-image placeholder height when the business has no logo.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Thumbnail width, or the empty-image placeholder width when the business has no logo.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Whether the business has no logo image.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Logo image URL, or the empty-image placeholder URL when the business has no logo.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new PurchaseItemListGetResponseLogoImage((array)$data['a_image']) : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
