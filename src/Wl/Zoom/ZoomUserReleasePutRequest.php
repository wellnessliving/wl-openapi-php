<?php

namespace WlSdk\Wl\Zoom;

class ZoomUserReleasePutRequest
{
    /**
     * Business key which currently use zoom user.
     *
     * @var string|null
     */
    public ?string $k_business_use = null;

    /**
     * Zoom user ID.
     *
     * @var string|null
     */
    public ?string $s_user_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business_use' => $this->k_business_use,
            's_user_id' => $this->s_user_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
