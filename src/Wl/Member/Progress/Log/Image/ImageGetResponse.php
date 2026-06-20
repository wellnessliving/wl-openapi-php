<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

/**
 * Response from GET
 */
class ImageGetResponse
{
    /**
     * No description.
     *
     * @var ImageGetResponseImage[]|null
     */
    public ?array $a_image = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? array_map(static fn($item) => new ImageGetResponseImage((array)$item), (array)$data['a_image']) : null;
    }
}
