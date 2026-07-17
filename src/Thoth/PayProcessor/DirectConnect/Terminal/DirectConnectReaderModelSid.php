<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

/**
 * Paragon device type of reader.
 *
 * Last used id: 7.
 *
 * Values:
 * - 1 (`E285`): Verifone e285 reader.
 * - 2 (`P200`): Verifone P200 reader.
 * - 3 (`P400_PLUS`): Verifone P400 plus reader.
 * - 4 (`V200_C`): Verifone V200c reader.
 * - 5 (`V200_C_PLUS`): Verifone V200c plus reader.
 * - 7 (`V400_C_PLUS`): Verifone V400c plus reader.
 * - 6 (`V400_M`): Verifone V400m reader.
 */
class DirectConnectReaderModelSid
{
    /** Verifone e285 reader. */
    public const E285 = 1;

    /** Verifone P200 reader. */
    public const P200 = 2;

    /** Verifone P400 plus reader. */
    public const P400_PLUS = 3;

    /** Verifone V200c reader. */
    public const V200_C = 4;

    /** Verifone V200c plus reader. */
    public const V200_C_PLUS = 5;

    /** Verifone V400c plus reader. */
    public const V400_C_PLUS = 7;

    /** Verifone V400m reader. */
    public const V400_M = 6;
}
