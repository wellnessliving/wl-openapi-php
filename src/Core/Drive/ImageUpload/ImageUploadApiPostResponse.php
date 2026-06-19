<?php
namespace WlSdk\Core\Drive\ImageUpload;

/**
 * Response from POST
 */
class ImageUploadApiPostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
    }
}
