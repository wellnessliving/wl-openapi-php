<?php
namespace WlSdk\Wl\Classes\ClassList;

use WlSdk\WlSdkClient;

/**
 * Gets a list of classes which take place in the specified location.
 */
class BookListApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of classes which take place in the specified location.
     *
     * Used to build the booking page for a location, displaying all classes that clients can sign up for.
     * Returns the full class details needed for display: schedules, assigned staff, booking links, pricing,
     * and category tabs.
     *
     * @return BookListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BookListApiGetResponse
    {
        return new BookListApiGetResponse($this->client->request('/Wl/Classes/ClassList/BookList.json', $this->params(), 'GET'));
    }

    private function params(): array
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
