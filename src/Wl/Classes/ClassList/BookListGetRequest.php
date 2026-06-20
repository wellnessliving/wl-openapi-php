<?php
namespace WlSdk\Wl\Classes\ClassList;

class BookListGetRequest
{
    /**
     * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
     * If this value isn't specified, the returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
     * If this value isn't specified, the returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
