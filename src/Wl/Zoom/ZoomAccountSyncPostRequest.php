<?php

namespace WlSdk\Wl\Zoom;

class ZoomAccountSyncPostRequest
{
    /**
     * Business key which currently use zoom user.
     *
     * @var string|null
     */
    public ?string $k_business_owner = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business_owner' => $this->k_business_owner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
