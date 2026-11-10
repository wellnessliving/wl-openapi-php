<?php

namespace WlSdk\Wl\DoorAccess\Brivo\Invitation;

/**
 * Response from POST
 */
class BrivoUserInvitationPostResponse
{
    /**
     * This will be `true` an invitation is redeemed see {@link
     * \WlSdk\Wl\DoorAccess\Brivo\Invitation\BrivoInvitationStatusEnum}, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_redeem = null;

    public function __construct(array $data)
    {
        $this->is_redeem = isset($data['is_redeem']) ? (bool)$data['is_redeem'] : null;
    }
}
