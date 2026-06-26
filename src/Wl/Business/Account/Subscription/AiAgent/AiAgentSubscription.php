<?php

namespace WlSdk\Wl\Business\Account\Subscription\AiAgent;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json
 */
class AiAgentSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json.
     *
     * @return AiAgentSubscriptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AiAgentSubscriptionGetRequest $request): AiAgentSubscriptionGetResponse
    {
        return new AiAgentSubscriptionGetResponse($this->client->request('/Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json.
     *
     * @return AiAgentSubscriptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AiAgentSubscriptionPostRequest $request): AiAgentSubscriptionPostResponse
    {
        return new AiAgentSubscriptionPostResponse($this->client->request('/Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json.
     *
     * @return AiAgentSubscriptionPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AiAgentSubscriptionPutRequest $request): AiAgentSubscriptionPutResponse
    {
        return new AiAgentSubscriptionPutResponse($this->client->request('/Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json', $request->params(), 'PUT'));
    }

    /**
     * Calls DELETE /Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json.
     *
     * @return AiAgentSubscriptionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AiAgentSubscriptionDeleteRequest $request): AiAgentSubscriptionDeleteResponse
    {
        return new AiAgentSubscriptionDeleteResponse($this->client->request('/Wl/Business/Account/Subscription/AiAgent/AiAgentSubscription.json', $request->params(), 'DELETE'));
    }
}
