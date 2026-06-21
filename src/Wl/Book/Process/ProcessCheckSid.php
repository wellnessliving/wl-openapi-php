<?php

namespace WlSdk\Wl\Book\Process;

/**
 * List of checks that are performed before session book.
 *
 * Last used ID: 2.
 *
 * Values:
 * - 1 (`CARD`): Check that a client has a credit card.
 * - 2 (`WAIVER`): Check a client has no unsigned waiver.
 */
class ProcessCheckSid
{
    /** Check that a client has a credit card. */
    public const CARD = 1;

    /** Check a client has no unsigned waiver. */
    public const WAIVER = 2;
}
