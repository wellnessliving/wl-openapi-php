<?php

namespace WlSdk\Wl\Profile;

/**
 * List of sources from where the user registers.
 *
 * Values:
 * - 4 (`BOOKING`): Source when a user registers while booking a service.
 *
 *   <b>Don't use to edit existing user profile.</b>
 * - 1 (`BOOKING_AND_PURCHASE`): Source when a user registers during purchase or booking.
 *
 *   <b>
 *    Don't use to edit existing user profile.
 *    Used only to register new clients during booking or purchase.
 *   </b>
 * - 6 (`GUEST`): Source when a guest (an unregistered visitor) books a service or makes a purchase.
 *
 *   Independent of {@link \WlSdk\Wl\Profile\RegisterSourceSid}/{@link \WlSdk\Wl\Profile\RegisterSourceSid} - a guest
 * may be
 *    asked for a field even when a registered client is not, and vice versa.
 * - 5 (`PURCHASE`): Source when a user registers while making a purchase.
 *
 *   <b>Don't use to edit existing user profile.</b>
 * - 7 (`RELATIONSHIP`): Source when a client adds a family member (a relative profile) - directly, or as part of
 * booking or purchase.
 * - 2 (`SELF`): Source when a user registers on self-registration web app, self-registration web app URL, etc.
 *
 *   <b>Don't use to edit existing user profile.</b>
 * - 8 (`STAFF`): Source when staff add or edit a client profile.
 * - 3 (`UNSET_VALUE`): This is a service value, which means to not choose any specific source.
 */
class RegisterSourceSid
{
    /** Source when a user registers while booking a service. */
    public const BOOKING = 4;

    /** Source when a user registers during purchase or booking. */
    public const BOOKING_AND_PURCHASE = 1;

    /** Source when a guest (an unregistered visitor) books a service or makes a purchase. */
    public const GUEST = 6;

    /** Source when a user registers while making a purchase. */
    public const PURCHASE = 5;

    /** Source when a client adds a family member (a relative profile) - directly, or as part of booking or purchase. */
    public const RELATIONSHIP = 7;

    /** Source when a user registers on self-registration web app, self-registration web app URL, etc. */
    public const SELF = 2;

    /** Source when staff add or edit a client profile. */
    public const STAFF = 8;

    /** This is a service value, which means to not choose any specific source. */
    public const UNSET_VALUE = 3;
}
