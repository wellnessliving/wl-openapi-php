<?php

namespace WlSdk\Wl\Catalog\View\Image;

/**
 * Response from GET
 */
class ImageGetResponse
{
    /**
     * Contains a list of images for the current product.
     *
     * @var array|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
    }
}
