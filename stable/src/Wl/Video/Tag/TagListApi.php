<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video tags for the business.
 */
class TagListApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of video tags for the business.
     *
     * Returns all content tags configured for the business video library. Used to populate
     * tag pickers when creating or editing videos. Requires an active video subscription.
     *
     * @return TagListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TagListApiGetResponse
    {
        return new TagListApiGetResponse($this->client->request('/Wl/Video/Tag/TagList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
