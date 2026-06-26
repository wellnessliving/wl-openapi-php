<?php

namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Updates a cancelled promotion's options.
 */
class PromotionPayCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates a cancelled promotion's options.
     *
     * @return PromotionPayCancelPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PromotionPayCancelPutRequest $request): PromotionPayCancelPutResponse
    {
        return new PromotionPayCancelPutResponse($this->client->request('/Wl/Login/Promotion/PromotionPayCancel.json', $request->params(), 'PUT'));
    }
}
