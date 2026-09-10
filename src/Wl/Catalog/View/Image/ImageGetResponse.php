<?php

namespace WlSdk\Wl\Catalog\View\Image;

/**
 * Response from GET
 */
class ImageGetResponse
{
    /**
     * Contains a list of images for the current product. Each element has the structure
     *  described in .
     *
     * @var ImageGetResponseImage[]|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? array_map(static fn ($item) => new ImageGetResponseImage((array)$item), (array)$data['a_image']) : null;
    }
}
