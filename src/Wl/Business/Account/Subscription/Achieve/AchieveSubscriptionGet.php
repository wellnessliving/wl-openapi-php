<?php
namespace WlSdk\Wl\Business\Account\Subscription\Achieve;

use WlSdk\WlSdkClient;

/**
 * Returns the Achieve subscription plan flags (free and white-label) for the given business.
 */
class AchieveSubscriptionGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the Achieve subscription plan flags (free and white-label) for the given business.
     *
     * Used to determine which features and branding options are available in the Achieve mobile app for a
     * business. For franchisees, the franchisor's subscription is used. Call this before rendering any
     * Achieve-specific UI that depends on the plan tier.
     *
     * @return AchieveSubscriptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AchieveSubscriptionGetRequest $request): AchieveSubscriptionGetResponse
    {
        return new AchieveSubscriptionGetResponse($this->client->request('/Wl/Business/Account/Subscription/Achieve/AchieveSubscription.json', $request->params(), 'GET'));
    }
}
