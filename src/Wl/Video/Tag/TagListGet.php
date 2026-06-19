<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video tags for the business.
 */
class TagListGet
{
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
     * @return TagListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TagListGetRequest $request): TagListGetResponse
    {
        return new TagListGetResponse($this->client->request('/Wl/Video/Tag/TagList.json', $request->params(), 'GET'));
    }
}
