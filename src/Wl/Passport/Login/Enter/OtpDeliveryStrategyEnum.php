<?php

namespace WlSdk\Wl\Passport\Login\Enter;

/**
 * List of different OTP code delivery strategies.
 *
 * Values:
 * - 1 (`BROADCAST`): OTP code is sent to all given communication channels (sms, emails, etc.)
 * - 2 (`PRIORITY`): OTP code is sent to the first communication channel that is available, according to the given list
 * of priorities.
 */
class OtpDeliveryStrategyEnum
{
    /** OTP code is sent to all given communication channels (sms, emails, etc.) */
    public const BROADCAST = 1;

    /** OTP code is sent to the first communication channel that is available, according to the given list of priorities. */
    public const PRIORITY = 2;
}
