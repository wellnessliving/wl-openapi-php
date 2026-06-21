<?php

namespace WlSdk\Core\Drive\ImageUpload;

/**
 * Response from POST
 */
class ImageUploadPostResponse
{
    /**
     * Image information for every ID.
     *
     * @var ImageUploadPostResponseImage[]|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? array_map(static fn ($item) => new ImageUploadPostResponseImage((array)$item), (array)$data['a_image']) : null;
    }
}
