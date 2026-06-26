<?php

namespace WlSdk\Wl\Marketing\Banner;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Marketing/Banner/Banner.json
 */
class Banner
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Marketing/Banner/Banner.json.
     *
     * @return BannerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BannerGetRequest $request): BannerGetResponse
    {
        return new BannerGetResponse($this->client->request('/Wl/Marketing/Banner/Banner.json', $request->params(), 'GET'));
    }

    /**
     * Calls DELETE /Wl/Marketing/Banner/Banner.json.
     *
     * @return BannerDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BannerDeleteRequest $request): BannerDeleteResponse
    {
        return new BannerDeleteResponse($this->client->request('/Wl/Marketing/Banner/Banner.json', $request->params(), 'DELETE'));
    }
}
