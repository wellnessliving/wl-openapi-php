<?php

namespace WlSdk\Core\Passport\Passkey;

/**
 * `WebAuthn` `credentialDeviceType` values, per the `WebAuthn` specification.
 *
 * Values:
 * - 1 (`SINGLE_DEVICE`): The credential is bound to a single physical authenticator and cannot be backed up or
 *   synced to another device.
 * - 2 (`MULTI_DEVICE`): The credential can be backed up and synced across multiple devices, for example through
 *   iCloud Keychain or Google Password Manager.
 */
class PasskeyDeviceTypeEnum
{
    /** The credential is bound to a single physical authenticator and cannot be backed up or */
    public const SINGLE_DEVICE = 1;

    /** The credential can be backed up and synced across multiple devices, for example through */
    public const MULTI_DEVICE = 2;
}
