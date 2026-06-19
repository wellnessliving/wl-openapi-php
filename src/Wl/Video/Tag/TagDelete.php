<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified video tag.
 */
class TagDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the specified video tag.
     *
     * Permanently removes the video tag from the business library. If any videos are currently
     * assigned to this tag, a confirmation flag must be set; otherwise the API throws a
     * confirmation-required error so the caller can prompt the user before proceeding.
     *
     * @return TagDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(TagDeleteRequest $request): TagDeleteResponse
    {
        return new TagDeleteResponse($this->client->request('/Wl/Video/Tag/Tag.json', $request->params(), 'DELETE'));
    }
}
