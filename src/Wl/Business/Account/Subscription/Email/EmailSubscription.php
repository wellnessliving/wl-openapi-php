<?php

namespace WlSdk\Wl\Business\Account\Subscription\Email;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/Email/EmailSubscription.json
 */
class EmailSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Business/Account/Subscription/Email/EmailSubscription.json.
     *
     * @return EmailSubscriptionPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EmailSubscriptionPutRequest $request): EmailSubscriptionPutResponse
    {
        return new EmailSubscriptionPutResponse($this->client->request('/Wl/Business/Account/Subscription/Email/EmailSubscription.json', $request->params(), 'PUT'));
    }

    /**
     * Calls DELETE /Wl/Business/Account/Subscription/Email/EmailSubscription.json.
     *
     * @return EmailSubscriptionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(EmailSubscriptionDeleteRequest $request): EmailSubscriptionDeleteResponse
    {
        return new EmailSubscriptionDeleteResponse($this->client->request('/Wl/Business/Account/Subscription/Email/EmailSubscription.json', $request->params(), 'DELETE'));
    }
}
