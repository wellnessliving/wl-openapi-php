<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Creates a new video tag.
 */
class TagPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new video tag.
     *
     * Adds a new content tag to the business video library for use when categorizing videos.
     * Requires backend access and an active video subscription with at least the basic plan.
     *
     * @return TagPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TagPostRequest $request): TagPostResponse
    {
        return new TagPostResponse($this->client->request('/Wl/Video/Tag/Tag.json', $request->params(), 'POST'));
    }
}
