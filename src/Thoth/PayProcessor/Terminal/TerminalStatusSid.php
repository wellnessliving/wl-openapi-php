<?php

namespace WlSdk\Thoth\PayProcessor\Terminal;

/**
 * List of possible status of readers.
 *
 * Last ID: 3.
 *
 * Values:
 * - 1 (`ACTIVE`): Status active.
 * - 2 (`INACTIVE`): Status inactive.
 * - 3 (`SETUP`): Status setup, reader is active but not added to stripe yet.
 */
class TerminalStatusSid
{
    /** Status active. */
    public const ACTIVE = 1;

    /** Status inactive. */
    public const INACTIVE = 2;

    /** Status setup, reader is active but not added to stripe yet. */
    public const SETUP = 3;
}
