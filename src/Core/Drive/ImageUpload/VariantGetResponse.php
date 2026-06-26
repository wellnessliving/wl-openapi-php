<?php

namespace WlSdk\Core\Drive\ImageUpload;

/**
 * Response from GET
 */
class VariantGetResponse
{
    /**
     * Information about image.
     *
     * @var VariantGetResponseImage|null
     */
    public ?VariantGetResponseImage $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new VariantGetResponseImage((array)$data['a_image']) : null;
    }
}
