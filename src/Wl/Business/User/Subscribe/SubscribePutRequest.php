<?php
namespace WlSdk\Wl\Business\User\Subscribe;

class SubscribePutRequest
{
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

    public function params(): array
    {
        return array_filter(
            [
            'is_subscribe' => $this->is_subscribe,
            'is_subscribe_sms' => $this->is_subscribe_sms,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
