<?php
namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Adds or updates a payment pause period for promotion.
 */
class PromotionPayPausePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds or updates a payment pause period for promotion.
     *
     * Creates a new hold period for the purchased promotion if no `k_promotion_pay_pause` is provided, or updates
     * an existing one. Optionally schedules or sends a hold notification via email, push, or SMS based on the
     * provided flags and the business notification template.
     *
     * @return PromotionPayPausePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromotionPayPausePostRequest $request): PromotionPayPausePostResponse
    {
        return new PromotionPayPausePostResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $request->params(), 'POST'));
    }
}
