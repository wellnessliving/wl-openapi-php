<?php
namespace WlSdk\Wl\Classes\ClassView;

class ElementGetRequest
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class key used to get information for a specific class.
     * 
     * An empty value returns information for all classes of the business.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Defines if canceled schedules should be included in the result.
     * 
     * If `true`, canceled schedules will be shown. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $show_cancelled = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'show_cancelled' => $this->show_cancelled,
            ],
            static fn($v) => $v !== null
        );
    }
}
