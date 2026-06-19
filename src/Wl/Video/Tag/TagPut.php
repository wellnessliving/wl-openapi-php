<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Updates the specified video tag.
 */
class TagPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the specified video tag.
     *
     * Renames an existing content tag in the business video library. Requires backend access
     * and an active video subscription with at least the basic plan.
     *
     * @return TagPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TagPutRequest $request): TagPutResponse
    {
        return new TagPutResponse($this->client->request('/Wl/Video/Tag/Tag.json', $request->params(), 'PUT'));
    }
}
