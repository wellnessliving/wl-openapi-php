<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * System-defined lead stages.
 *
 * Every business has one stage of each type by default.
 *
 * Custom stages created by a business have no system ID.
 *
 * Last used ID: 6.
 *
 * Values:
 * - 6 (`CONTACTED`): A lead which was contacted by a staff member.
 * - 2 (`HOT`): A lead which is being actively worked with and is close to a purchase.
 *
 *   Replaces {@link \WlSdk\RsLeadStatusSid}.
 * - 5 (`LOST`): A lead which was lost.
 *
 *   Replaces {@link \WlSdk\Wl\Lead\Conversion\LeadConversionTypeSid}.
 * - 1 (`NEW`): A newly captured lead. This stage is set to a client when they are added as a lead.
 *
 *   Replaces {@link \WlSdk\RsLeadStatusSid}.
 * - 3 (`WARM`): A lead which has shown some interest, but is not ready to purchase yet.
 *
 *   Replaces {@link \WlSdk\RsLeadStatusSid}.
 * - 4 (`WON`): A lead which was successfully converted into a client.
 *
 *   Replaces {@link \WlSdk\Wl\Lead\Conversion\LeadConversionTypeSid}.
 */
class LeadStageSystemSid
{
    /** A lead which was contacted by a staff member. */
    public const CONTACTED = 6;

    /** A lead which is being actively worked with and is close to a purchase. */
    public const HOT = 2;

    /** A lead which was lost. */
    public const LOST = 5;

    /** A newly captured lead. This stage is set to a client when they are added as a lead. */
    public const NEW = 1;

    /** A lead which has shown some interest, but is not ready to purchase yet. */
    public const WARM = 3;

    /** A lead which was successfully converted into a client. */
    public const WON = 4;
}
