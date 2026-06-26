<?php

namespace WlSdk\Wl\Video\MediaConvert;

use WlSdk\WlSdkClient;

/**
 * Getting the list of converted file paths and registering them as variants.
 */
class PathElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Getting the list of converted file paths and registering them as variants.
     *
     * @return PathElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PathElementPostRequest $request): PathElementPostResponse
    {
        return new PathElementPostResponse($this->client->request('/Wl/Video/MediaConvert/PathElement.json', $request->params(), 'POST'));
    }
}
