<?php

namespace WlSdk\Wl\Promotion\Pay;

use WlSdk\WlSdkClient;

/**
 * Plans tasks to perform actions with promotions: create,stop or delete payment pause periods.
 */
class PromotionPayPauseList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Plans tasks to perform actions with promotions: create,stop or delete payment pause periods.
     *
     * @return PromotionPayPauseListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromotionPayPauseListPostRequest $request): PromotionPayPauseListPostResponse
    {
        return new PromotionPayPauseListPostResponse($this->client->request('/Wl/Promotion/Pay/PromotionPayPauseList.json', $request->params(), 'POST'));
    }

    /**
     * Returns list of clients who have promotion payment pause on specified period if $dl_start and
$dl_end are provided.
     *
     * @return PromotionPayPauseListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PromotionPayPauseListPutRequest $request): PromotionPayPauseListPutResponse
    {
        return new PromotionPayPauseListPutResponse($this->client->request('/Wl/Promotion/Pay/PromotionPayPauseList.json', $request->params(), 'PUT'));
    }
}
