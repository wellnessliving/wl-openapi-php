<?php

namespace WlSdk;

/**
 * List of ages, which are suitable for visiting this location.
 *
 * Last ID: 5.
 *
 * Values:
 * - 5 (`ADAPTIVE`): An Adaptive / Inclusive Programs.
 * - 2 (`ADULT`): An adult.
 * - 1 (`KID`): A kid.
 * - 4 (`NATAL`): Natal.
 * - 3 (`SENIOR`): Senior.
 */
class RsAgeSid
{
    /** An Adaptive / Inclusive Programs. */
    public const ADAPTIVE = 5;

    /** An adult. */
    public const ADULT = 2;

    /** A kid. */
    public const KID = 1;

    /** Natal. */
    public const NATAL = 4;

    /** Senior. */
    public const SENIOR = 3;
}
