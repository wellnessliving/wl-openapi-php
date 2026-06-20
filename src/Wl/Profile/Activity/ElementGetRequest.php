<?php

namespace WlSdk\Wl\Profile\Activity;

class ElementGetRequest
{
    /**
     * The key of the activity item represented by this endpoint.
     *
     * @var string|null
     */
    public ?string $k_login_activity = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_login_activity' => $this->k_login_activity,
            ],
            static fn ($v) => $v !== null
        );
    }
}
