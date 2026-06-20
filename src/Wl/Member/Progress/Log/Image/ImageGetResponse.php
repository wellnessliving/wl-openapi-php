<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

/**
 * Response from GET
 */
class ImageGetResponse
{
    /**
     * Image data:
     *
     * @var ImageGetResponseImage|null
     */
    public ?ImageGetResponseImage $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new ImageGetResponseImage((array)$data['a_image']) : null;
    }
}
