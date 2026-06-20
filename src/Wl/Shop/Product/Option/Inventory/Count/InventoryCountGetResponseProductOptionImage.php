<?php
namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

class InventoryCountGetResponseProductOptionImage
{
    /**
     * The image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The image width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * The image URL.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
