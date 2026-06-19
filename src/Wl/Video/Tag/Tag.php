<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Creates a new video tag.
 */
class Tag
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
