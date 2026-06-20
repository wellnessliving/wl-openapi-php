<?php

namespace WlSdk\Wl\Profile\PurchaseList;

class PurchaseListElementGetResponseLogo
{
    /**
     * The height of the image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The width of the image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * If `true`, then the purchased item doesn't have an image. If `false`, then the item has an image.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
    }
}
