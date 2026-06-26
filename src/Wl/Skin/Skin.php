<?php

namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Gets skin data.
 */
class Skin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets skin data.
     *
     * @return SkinGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SkinGetRequest $request): SkinGetResponse
    {
        return new SkinGetResponse($this->client->request('/Wl/Skin/Skin.json', $request->params(), 'GET'));
    }

    /**
     * Saves the specified skin fields.
     *
     * @return SkinPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SkinPostRequest $request): SkinPostResponse
    {
        return new SkinPostResponse($this->client->request('/Wl/Skin/Skin.json', $request->params(), 'POST'));
    }
}
