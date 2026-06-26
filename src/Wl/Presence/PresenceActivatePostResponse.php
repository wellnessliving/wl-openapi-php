<?php

namespace WlSdk\Wl\Presence;

/**
 * Response from POST
 */
class PresenceActivatePostResponse
{
    /**
     * Whether business does not have a subscription.
     *
     * @var bool|null
     */
    public ?bool $is_prospect = null;

    /**
     * Whether email has been sent in 24 hours.
     *
     * @var bool|null
     */
    public ?bool $is_sent = null;

    public function __construct(array $data)
    {
        $this->is_prospect = isset($data['is_prospect']) ? (bool)$data['is_prospect'] : null;
        $this->is_sent = isset($data['is_sent']) ? (bool)$data['is_sent'] : null;
    }
}
