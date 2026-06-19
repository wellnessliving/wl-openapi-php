<?php
namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 *  the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 *  active hold period otherwise.
 */
class PromotionPayPauseGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 active hold period otherwise.
     *
     * Also returns notification settings (email, push, SMS flags and email pattern key) and the date the last
     * notification was sent for the hold period, if a hold notification template is configured for the business.
     *
     * @return PromotionPayPauseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionPayPauseGetRequest $request): PromotionPayPauseGetResponse
    {
        return new PromotionPayPauseGetResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $request->params(), 'GET'));
    }
}
