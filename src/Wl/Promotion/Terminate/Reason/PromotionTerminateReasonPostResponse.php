<?php

namespace WlSdk\Wl\Promotion\Terminate\Reason;

/**
 * Response from POST
 */
class PromotionTerminateReasonPostResponse
{
    /**
     * Reason key. `null` to create new reason.
     *
     * @var string|null
     */
    public ?string $k_reason = null;

    public function __construct(array $data)
    {
        $this->k_reason = isset($data['k_reason']) ? (string)$data['k_reason'] : null;
    }
}
