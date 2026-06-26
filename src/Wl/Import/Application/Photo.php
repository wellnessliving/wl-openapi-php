<?php

namespace WlSdk\Wl\Import\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Import/Application/Photo.json
 */
class Photo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Import/Application/Photo.json.
     *
     * @return PhotoPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PhotoPostRequest $request): PhotoPostResponse
    {
        return new PhotoPostResponse($this->client->request('/Wl/Import/Application/Photo.json', $request->params(), 'POST'));
    }
}
