<?php

namespace WlSdk\Wl\Lead\Stage;

/**
 * Types of lead stages.
 *
 * Every stage has a type. The type is selected when the stage is created and can not be changed afterwards,
 * neither for system stages ({@link \WlSdk\Wl\Lead\Stage\LeadStageSystemSid}) nor for stages created by a business.
 *
 * A business must always have at least one stage of every type, so the last stage of a type can not be deleted.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 3 (`LOST`): A lead is lost - the client will not make a purchase.
 *
 *   Replaces {@link \WlSdk\Wl\Lead\Conversion\LeadConversionTypeSid}.
 * - 1 (`OPEN`): A lead is still in the funnel - the business is working with the client.
 * - 2 (`WON`): A lead is won - the client is converted into a member.
 *
 *   Replaces {@link \WlSdk\Wl\Lead\Conversion\LeadConversionTypeSid}.
 */
class LeadStageTypeSid
{
    /** A lead is lost - the client will not make a purchase. */
    public const LOST = 3;

    /** A lead is still in the funnel - the business is working with the client. */
    public const OPEN = 1;

    /** A lead is won - the client is converted into a member. */
    public const WON = 2;
}
