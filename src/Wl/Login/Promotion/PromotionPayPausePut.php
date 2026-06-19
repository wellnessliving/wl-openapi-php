<?php
namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Updates a promotion payment pause period.
 */
class PromotionPayPausePut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates a promotion payment pause period.
     *
     * Requires an existing `k_promotion_pay_pause` key and delegates to `post()` to apply
     * the updated start date, end date, note, and notification settings. Returns an error if no existing hold key
     * is
     * provided.
     *
     * @return PromotionPayPausePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PromotionPayPausePutRequest $request): PromotionPayPausePutResponse
    {
        return new PromotionPayPausePutResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $request->params(), 'PUT'));
    }
}
