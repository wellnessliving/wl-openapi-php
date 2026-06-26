<?php

namespace WlSdk\Wl\Zoom;

class ZoomUserListGetRequest
{
    /**
     * Business key which currently owns zoom user.
     *
     * `null` in a case of system business.
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
