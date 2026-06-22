<?php

namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 *  the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 *  active hold period otherwise.
 */
class PromotionPayPause
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

    /**
     * Deletes specified promotion payment pause.
     *
     * Validates access and then permanently removes the hold period identified by `k_promotion_pay_pause`,
     * also cancelling any associated expiry reminder notification task.
     *
     * @return PromotionPayPauseDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PromotionPayPauseDeleteRequest $request): PromotionPayPauseDeleteResponse
    {
        return new PromotionPayPauseDeleteResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $request->params(), 'DELETE'));
    }
}
