<?php
namespace WlSdk\Wl\Classes\ClassView;

use WlSdk\WlSdkClient;

/**
 * Returns class information including schedules, images, and booking settings for the specified business.
 */
class ElementApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class information including schedules, images, and booking settings for the specified business.
     *
     * Used by import tools to read the full class catalog for a business. Returns a map of all classes
     * (or a single class) with the information needed to replicate class data in an external system:
     * schedules, images, booking constraints, and descriptions.
     *
     * @return ElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ElementApiGetResponse
    {
        return new ElementApiGetResponse($this->client->request('/Wl/Classes/ClassView/Element.json', $this->params(), 'GET'));
    }

    private function params(): array
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
