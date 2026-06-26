<?php

namespace WlSdk\Wl\Notification\Banner;

use WlSdk\WlSdkClient;

/**
 * Loads all banners that should be shown to the client.
 */
class BannerList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads all banners that should be shown to the client.
     *
     * @return BannerListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BannerListGetRequest $request): BannerListGetResponse
    {
        return new BannerListGetResponse($this->client->request('/Wl/Notification/Banner/BannerList.json', $request->params(), 'GET'));
    }

    /**
     * Stores that user closes the banner.
     *
     * @return BannerListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BannerListPutRequest $request): BannerListPutResponse
    {
        return new BannerListPutResponse($this->client->request('/Wl/Notification/Banner/BannerList.json', $request->params(), 'PUT'));
    }
}
