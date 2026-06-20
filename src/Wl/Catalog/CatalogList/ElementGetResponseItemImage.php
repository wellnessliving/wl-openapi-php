<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItemImage
{
    /**
     * No description.
     *
     * @var ElementGetResponseItemImageImage|null
     */
    public ?ElementGetResponseItemImageImage $a_image = null;

    /**
     * Height of the variant image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width of the variant image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` if the image file does not exist, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Link to the variant file.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new ElementGetResponseItemImageImage((array)$data['a_image']) : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
