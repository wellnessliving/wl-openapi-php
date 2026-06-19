<?php
namespace WlSdk\Wl\Business\User\Subscribe;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about if user is subscribed on specified business or not.
 */
class Subscribe
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about if user is subscribed on specified business or not.
     *
     * Used to pre-populate the notification preferences toggle in a client's profile page. Shows whether
     * the client has opted in to email and SMS communications from the business.
     *
     * @return SubscribeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SubscribeGetRequest $request): SubscribeGetResponse
    {
        return new SubscribeGetResponse($this->client->request('/Wl/Business/User/Subscribe/Subscribe.json', $request->params(), 'GET'));
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
