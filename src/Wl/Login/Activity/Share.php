<?php

namespace WlSdk\Wl\Login\Activity;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class Share
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return SharePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SharePostRequest $request): SharePostResponse
    {
        return new SharePostResponse($this->client->request('/Wl/Login/Activity/Share.json', $request->params(), 'POST'));
    }
}
