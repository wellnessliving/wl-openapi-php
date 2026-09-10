<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class DialogGetRequest
{
    /**
     * The business key this SMS chat is connected to.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user this SMS chat is related to.
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
            static fn ($v) => $v !== null
        );
    }
}
