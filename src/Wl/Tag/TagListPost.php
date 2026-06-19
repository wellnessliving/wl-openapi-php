<?php
namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Saves the list of tags.
 * Can be used to create new tags or update existing ones.
 */
class TagListPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the list of tags.
Can be used to create new tags or update existing ones.
     *
     * Persists the given set of client tags for the business. Tags without a key are created;
     * tags with an existing key are updated with the new title. Requires backend access.
     *
     * @return TagListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TagListPostRequest $request): TagListPostResponse
    {
        return new TagListPostResponse($this->client->request('/Wl/Tag/TagList.json', $request->params(), 'POST'));
    }
}
