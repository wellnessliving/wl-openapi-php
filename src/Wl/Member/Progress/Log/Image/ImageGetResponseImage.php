<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

class ImageGetResponseImage
{
    /**
     * Image storage data.
     *
     * @var ImageGetResponseImageImage|null
     */
    public ?ImageGetResponseImageImage $a_image = null;

    /**
     * Max image size.
     *
     * @var int|null
     */
    public ?int $i-size = null;

    /**
     * Image thumbnail height.
     *
     * @var int|null
     */
    public ?int $i-thumbnail-height = null;

    /**
     * Image thumbnail width.
     *
     * @var int|null
     */
    public ?int $i-thumbnail-width = null;

    /**
     * Image link.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    /**
     * Image upload url.
     *
     * @var string|null
     */
    public ?string $url-action = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new ImageGetResponseImageImage((array)$data['a_image']) : null;
        $this->i-size = isset($data['i-size']) ? (int)$data['i-size'] : null;
        $this->i-thumbnail-height = isset($data['i-thumbnail-height']) ? (int)$data['i-thumbnail-height'] : null;
        $this->i-thumbnail-width = isset($data['i-thumbnail-width']) ? (int)$data['i-thumbnail-width'] : null;
        $this->s_link = isset($data['s_link']) ? (string)$data['s_link'] : null;
        $this->url-action = isset($data['url-action']) ? (string)$data['url-action'] : null;
    }
}
