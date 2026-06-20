<?php
namespace WlSdk\Wl\Business\User\Subscribe;

class SubscribeGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
