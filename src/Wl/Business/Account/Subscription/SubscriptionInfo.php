<?php
namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * Gets information about subscription.
 */
class SubscriptionInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about subscription.
     *
     * Used in the backend settings UI to read the current state of a business subscription (e.g., Achieve or
     * another product). Returns whether the subscription is active, the current plan tier, and the business
     * locale. Requires backend access to the business.
     *
     * @return SubscriptionInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SubscriptionInfoGetRequest $request): SubscriptionInfoGetResponse
    {
        return new SubscriptionInfoGetResponse($this->client->request('/Wl/Business/Account/Subscription/SubscriptionInfo.json', $request->params(), 'GET'));
    }
}
