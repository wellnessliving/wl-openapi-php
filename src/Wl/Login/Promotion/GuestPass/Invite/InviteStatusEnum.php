<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

/**
 * Lifecycle state of a guest pass invitation.
 *
 * Last used: 12
 *
 * Values:
 * - 9 (`ATTEND`): Guest attended the visit booked with the guest pass.
 * - 8 (`BOOK`): Guest booked the visit booked with the guest pass.
 * - 10 (`EARLY_CANCELLED`): Guest cancelled the visit early (without penalty). Pass is returned to the host's
 *    available quota and no longer counts toward 'Used'.
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
 * - 12 (`PENDING`): Guest has a visit linked to the guest pass, but its outcome (attended, no-show,
 *    or late-cancelled) has not been determined yet and must be resolved manually by
 *    staff. Distinct from
 * [InviteStatusEnum::INVITE_ACCEPTED](#/components/schemas/Wl.Login.Promotion.GuestPass.Invite.InviteStatusEnum): the
 * guest already
 *    has a linked visit here, rather than merely having accepted the invitation.
 * - 11 (`WAITLISTED`): Guest is on the waitlist for the class session booked with the guest pass.
 *    Pass is committed to the guest - it is no longer "Available" to the host,
 *    but the guest has not secured a confirmed spot in the class yet.
 */
class InviteStatusEnum
{
    /** Guest attended the visit booked with the guest pass. */
    public const ATTEND = 9;

    /** Guest booked the visit booked with the guest pass. */
    public const BOOK = 8;

    /** Guest cancelled the visit early (without penalty). Pass is returned to the host's */
    public const EARLY_CANCELLED = 10;

    /** Guest attended the visit booked with the guest pass. */
    public const CHECKED_IN = 3;

    /** Guest accepted the invitation but did not attend within the pass expiration */
    public const GUEST_PASS_EXPIRED = 6;

    /** Guest claimed the invitation but the linked visit (if any) has not been */
    public const INVITE_ACCEPTED = 2;

    /** Invitation expired before the guest claimed it. Pass returns to the host's */
    public const INVITE_EXPIRED = 7;

    /** Invitation has been sent but the guest has not claimed it yet. Pass is held */
    public const INVITE_SENT = 1;

    /** Guest cancelled the visit too late and was penalised. Pass is consumed and */
    public const LATE_CANCELLED = 5;

    /** Guest accepted the invitation but did not show up for the visit. Pass is */
    public const NO_SHOW = 4;

    /** Guest has a visit linked to the guest pass, but its outcome (attended, no-show, */
    public const PENDING = 12;

    /** Guest is on the waitlist for the class session booked with the guest pass. */
    public const WAITLISTED = 11;
}
