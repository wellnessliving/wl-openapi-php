<?php
namespace WlSdk\Wl\Profile;

/**
 * List of sources from where the user registers.
 * 
 * Values:
 * - 1 (`BOOKING_AND_PURCHASE`): Source when a user registers during purchase or booking.
 * 
 *   <b>
 *    Don't use to edit existing user profile.
 *    Used only to register new clients during booking or purchase.
 *   </b>
 * - 2 (`SELF`): Source when a user registers on self-registration web app, self-registration web app URL, etc.
 * 
 *   <b>Don't use to edit existing user profile.</b>
 * - 3 (`UNSET_VALUE`): This is a service value, which means to not choose any specific source.
 */
enum RegisterSourceSid: int
{
    case BOOKING_AND_PURCHASE = 1;
    case SELF = 2;
    case UNSET_VALUE = 3;
}
