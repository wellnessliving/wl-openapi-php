<?php

namespace WlSdk\Wl\Integration\Collection;

use WlSdk\WlSdkClient;

/**
 * Changes the status of the Collections.
 */
class CollectionActivate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes the status of the Collections.
     *
     * @return CollectionActivatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CollectionActivatePostRequest $request): CollectionActivatePostResponse
    {
        return new CollectionActivatePostResponse($this->client->request('/Wl/Integration/Collection/CollectionActivate.json', $request->params(), 'POST'));
    }
}
