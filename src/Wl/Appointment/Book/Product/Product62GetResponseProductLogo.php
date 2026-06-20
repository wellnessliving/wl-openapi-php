<?php
namespace WlSdk\Wl\Appointment\Book\Product;

class Product62GetResponseProductLogo
{
    /**
     * Height of the image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width of the image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` mean mock instead of real image.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * URL on the image.
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
