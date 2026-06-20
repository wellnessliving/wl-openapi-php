<?php

namespace WlSdk\Wl\Business\User\Subscribe;

/**
 * Response from GET
 */
class SubscribeGetResponse
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

    public function __construct(array $data)
    {
        $this->is_subscribe = isset($data['is_subscribe']) ? (bool)$data['is_subscribe'] : null;
        $this->is_subscribe_sms = isset($data['is_subscribe_sms']) ? (bool)$data['is_subscribe_sms'] : null;
    }
}
