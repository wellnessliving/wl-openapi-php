<?php

namespace WlSdk\Wl\Drive;

/**
 * Response from POST
 */
class ProductImageUploadPostResponse
{
    /**
     * Image information for every ID.
     *
     * @var ProductImageUploadPostResponseImage[]|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? array_map(static fn ($item) => new ProductImageUploadPostResponseImage((array)$item), (array)$data['a_image']) : null;
    }
}
