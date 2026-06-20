<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

/**
 * Lifecycle state of a guest pass invitation.
 * 
 * Last used: 7
 * 
 * Values:
 * - 9 (`ATTEND`): Guest attended the visit booked with the guest pass.
 * - 8 (`BOOK`): Guest booked the visit booked with the guest pass.
 * - 3 (`CHECKED_IN`): Guest attended the visit booked with the guest pass.
 * - 6 (`GUEST_PASS_EXPIRED`): Guest accepted the invitation but did not attend within the pass expiration
 *    window. Distinct from
 * [InviteStatusEnum::INVITE_EXPIRED](#/components/schemas/Wl.Login.Promotion.GuestPass.Invite.InviteStatusEnum): the
 * pass has
 *    already been committed to the guest at acceptance, so it counts toward "Used"
 *    and is not refunded to the host's available quota.
 * - 2 (`INVITE_ACCEPTED`): Guest claimed the invitation but the linked visit (if any) has not been
 *    completed yet. Pass is committed to the guest - it is no longer "Available"
 *    to the host and will not be refunded if the guest fails to attend.
 * - 7 (`INVITE_EXPIRED`): Invitation expired before the guest claimed it. Pass returns to the host's
 *    available quota (refundable case).
 * - 1 (`INVITE_SENT`): Invitation has been sent but the guest has not claimed it yet. Pass is held
 *    against the host's quota but can still be revoked by the host.
 * - 5 (`LATE_CANCELLED`): Guest cancelled the visit too late and was penalised. Pass is consumed and
 *    counts toward "Used".
 * - 4 (`NO_SHOW`): Guest accepted the invitation but did not show up for the visit. Pass is
 *    consumed and counts toward "Used".
 */
enum InviteStatusEnum: int
{
    case ATTEND = 9;
    case BOOK = 8;
    case CHECKED_IN = 3;
    case GUEST_PASS_EXPIRED = 6;
    case INVITE_ACCEPTED = 2;
    case INVITE_EXPIRED = 7;
    case INVITE_SENT = 1;
    case LATE_CANCELLED = 5;
    case NO_SHOW = 4;
}
