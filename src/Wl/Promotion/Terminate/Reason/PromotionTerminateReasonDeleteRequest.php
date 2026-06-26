<?php

namespace WlSdk\Wl\Promotion\Terminate\Reason;

class PromotionTerminateReasonDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reason key. `null` to create new reason.
     *
     * @var string|null
     */
    public ?string $k_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reason' => $this->k_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
