<?php
namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Deletes specified promotion payment pause.
 */
class PromotionPayPauseDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
