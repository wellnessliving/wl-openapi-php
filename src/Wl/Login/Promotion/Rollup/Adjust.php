<?php

namespace WlSdk\Wl\Login\Promotion\Rollup;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class Adjust
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
     * @return AdjustPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AdjustPostRequest $request): AdjustPostResponse
    {
        return new AdjustPostResponse($this->client->request('/Wl/Login/Promotion/Rollup/Adjust.json', $request->params(), 'POST'));
    }
}
