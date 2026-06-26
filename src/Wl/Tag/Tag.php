<?php

namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Removes the tag.
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
     * Removes the tag.
     *
     * @return TagDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(TagDeleteRequest $request): TagDeleteResponse
    {
        return new TagDeleteResponse($this->client->request('/Wl/Tag/Tag.json', $request->params(), 'DELETE'));
    }
}
