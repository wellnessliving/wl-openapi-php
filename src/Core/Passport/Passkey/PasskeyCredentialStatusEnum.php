<?php

namespace WlSdk\Core\Passport\Passkey;

/**
 * Statuses of a registered passkey credential.
 *
 * Values:
 * - 1 (`ACTIVE`): The credential is active and may be used to sign in.
 * - 2 (`REVOKED`): The credential was revoked and may no longer be used to sign in.
 *
 *   No longer set: revoking a credential deletes its row, and the audit is the sign-in log. Rows revoked
 *   earlier keep this status.
 */
class PasskeyCredentialStatusEnum
{
    /** The credential is active and may be used to sign in. */
    public const ACTIVE = 1;

    /** The credential was revoked and may no longer be used to sign in. */
    public const REVOKED = 2;
}
