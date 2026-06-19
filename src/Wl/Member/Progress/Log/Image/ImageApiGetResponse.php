<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

/**
 * Response from GET
 */
class ImageApiGetResponse
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
