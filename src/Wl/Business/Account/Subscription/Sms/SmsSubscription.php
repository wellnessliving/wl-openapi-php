<?php

namespace WlSdk\Wl\Business\Account\Subscription\Sms;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/Sms/SmsSubscription.json
 */
class SmsSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Account/Subscription/Sms/SmsSubscription.json.
     *
     * @return SmsSubscriptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmsSubscriptionGetRequest $request): SmsSubscriptionGetResponse
    {
        return new SmsSubscriptionGetResponse($this->client->request('/Wl/Business/Account/Subscription/Sms/SmsSubscription.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Business/Account/Subscription/Sms/SmsSubscription.json.
     *
     * @return SmsSubscriptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsSubscriptionPostRequest $request): SmsSubscriptionPostResponse
    {
        return new SmsSubscriptionPostResponse($this->client->request('/Wl/Business/Account/Subscription/Sms/SmsSubscription.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Business/Account/Subscription/Sms/SmsSubscription.json.
     *
     * @return SmsSubscriptionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SmsSubscriptionDeleteRequest $request): SmsSubscriptionDeleteResponse
    {
        return new SmsSubscriptionDeleteResponse($this->client->request('/Wl/Business/Account/Subscription/Sms/SmsSubscription.json', $request->params(), 'DELETE'));
    }
}
