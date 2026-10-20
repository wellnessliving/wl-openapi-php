<?php

namespace WlSdk\Wl\DoorAccess\Brivo\Invitation;

/**
 * Response from GET
 */
class BrivoUserInvitationGetResponse
{
    /**
     * Whether the client has a Brivo invitation, and is present in the client's group with Brivo invitation
     * enabled.
     * `true` if the client has a Brivo invitation, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_brivo_invitation = null;

    /**
     * This will be `true` an invitation is redeemed see {@link
     * \WlSdk\Wl\DoorAccess\Brivo\Invitation\BrivoInvitationStatusEnum}, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_redeem = null;

    public function __construct(array $data)
    {
        $this->has_brivo_invitation = isset($data['has_brivo_invitation']) ? (bool)$data['has_brivo_invitation'] : null;
        $this->is_redeem = isset($data['is_redeem']) ? (bool)$data['is_redeem'] : null;
    }
}
