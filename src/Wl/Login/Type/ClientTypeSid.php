<?php

namespace WlSdk\Wl\Login\Type;

/**
 * A list of client type IDs.
 *
 *
 *
 * Last used ID: 3.
 *
 * Values:
 * - 3 (`MEMBER`): Record contains type of member.
 * - 1 (`NOTHING`): Record is [SystemSid::PROSPECT](#/components/schemas/Wl.Login.Type.SystemSid).
 *
 *   See [SystemSid](#/components/schemas/Wl.Login.Type.SystemSid) for details.
 * - 2 (`PASSHOLDER`): Record contains type of client.
 */
class ClientTypeSid
{
    /** Record contains type of member. */
    public const MEMBER = 3;

    /** Record is [SystemSid::PROSPECT](#/components/schemas/Wl.Login.Type.SystemSid). */
    public const NOTHING = 1;

    /** Record contains type of client. */
    public const PASSHOLDER = 2;
}
