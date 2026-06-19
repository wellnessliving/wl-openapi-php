<?php
namespace WlSdk\Wl\Promotion\Index;

use WlSdk\WlSdkClient;

/**
 * Gets a list of packages/passes/memberships.
 */
class PromotionIndexApi
{
    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The program type ID, which will be one of the [RsProgramTypeSid](#/components/schemas/RsProgramTypeSid)
     * constants.
     * 
     * `0` to not filter Purchase Options with type of the Purchase Option.
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of packages/passes/memberships.
     *
     * Returns introductory promotion offers available at the specified location, optionally filtered by program
     * type,
     * including pricing, duration, visit limits, and access information for each item.
     *
     * @return PromotionIndexApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PromotionIndexApiGetResponse
    {
        return new PromotionIndexApiGetResponse($this->client->request('/Wl/Promotion/Index/PromotionIndex.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'id_program_type' => $this->id_program_type,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
