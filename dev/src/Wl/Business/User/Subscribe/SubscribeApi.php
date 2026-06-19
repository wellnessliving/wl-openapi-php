<?php
namespace WlSdk\Wl\Business\User\Subscribe;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about if user is subscribed on specified business or not.
 */
class SubscribeApi
{
    /**
     * The business key used for users to subscribe, unsubscribe, and receive information about the status of the
     * subscription.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user whose subscription status needs to be checked or switched to subscribed/unsubscribed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Information about the user`s subscription.
     * 
     * When getting information, `true` indicates the user has an email subscription in the business (`false`
     * otherwise).
     * 
     * When changing a subscription, `true` subscribes the user in the business. `false` unsubscribes the user in
     * the business.
     * 
     * This will be `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_subscribe = null;

    /**
     * Information about the user`s subscription.
     * 
     * When getting information, `true` indicates the user has an SMS subscription in the business (`false`
     * otherwise).
     * 
     * When changing a subscription, `true` subscribes the user in the business. `false1 unsubscribes the user in
     * the business.
     * 
     * This will be `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_subscribe_sms = null;

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
     * @return SubscribeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): SubscribeApiGetResponse
    {
        return new SubscribeApiGetResponse($this->client->request('/Wl/Business/User/Subscribe/Subscribe.json', $this->params(), 'GET'));
    }

    /**
     * Subscribes or unsubscribes user on specified business.
     *
     * Called when a client changes their notification preferences. Controls whether the business can
     * contact the client by email and by SMS.
     *
     * @return SubscribeApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): SubscribeApiPutResponse
    {
        return new SubscribeApiPutResponse($this->client->request('/Wl/Business/User/Subscribe/Subscribe.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_subscribe' => $this->is_subscribe,
            'is_subscribe_sms' => $this->is_subscribe_sms,
            ],
            static fn($v) => $v !== null
        );
    }
}
