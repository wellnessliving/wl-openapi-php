<?php

namespace WlSdk\Wl\Business\AuthorizeSupport\Request;

class RequestGetRequest
{
    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
