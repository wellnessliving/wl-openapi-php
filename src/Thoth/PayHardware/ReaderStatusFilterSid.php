<?php

namespace WlSdk\Thoth\PayHardware;

/**
 * List of reader status for reader list page.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 2 (`ACTIVE`): Active reader.
 * - 1 (`ALL`): All reader.
 * - 3 (`INACTIVE`): Inactive reader
 */
class ReaderStatusFilterSid
{
    /** Active reader. */
    public const ACTIVE = 2;

    /** All reader. */
    public const ALL = 1;

    /** Inactive reader */
    public const INACTIVE = 3;
}
