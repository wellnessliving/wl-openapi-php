<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseImageList
{
    /**
     * The height in pixels.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The width in pixels.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` - item has no image (in this case ignore other keys of this array).
     * `false` - item has an image.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * The image URL.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
