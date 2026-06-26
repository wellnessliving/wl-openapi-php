<?php

namespace WlSdk\Wl\Promotion\Terminate\Reason;

class PromotionTerminateReasonPostRequest
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

    /**
     * Reason title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reason' => $this->k_reason,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
