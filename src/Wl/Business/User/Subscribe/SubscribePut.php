<?php
namespace WlSdk\Wl\Business\User\Subscribe;

use WlSdk\WlSdkClient;

/**
 * Subscribes or unsubscribes user on specified business.
 */
class SubscribePut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Subscribes or unsubscribes user on specified business.
     *
     * Called when a client changes their notification preferences. Controls whether the business can
     * contact the client by email and by SMS.
     *
     * @return SubscribePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SubscribePutRequest $request): SubscribePutResponse
    {
        return new SubscribePutResponse($this->client->request('/Wl/Business/User/Subscribe/Subscribe.json', $request->params(), 'PUT'));
    }
}
