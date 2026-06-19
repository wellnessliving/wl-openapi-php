<?php
namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * Gets information about subscription.
 */
class SubscriptionInfoApi
{
    /**
     * CID of the subscription information of which is requested.
     *
     * @var int|null
     */
    public ?int $cid_subscription = null;

    /**
     * Business key for which subscription information is requested.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return SubscriptionInfoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): SubscriptionInfoApiGetResponse
    {
        return new SubscriptionInfoApiGetResponse($this->client->request('/Wl/Business/Account/Subscription/SubscriptionInfo.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'cid_subscription' => $this->cid_subscription,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
