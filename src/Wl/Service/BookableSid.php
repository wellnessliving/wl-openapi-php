<?php

namespace WlSdk\Wl\Service;

/**
 * A list of bookable types.
 *
 * Values:
 * - 1 (`ALL`): All users can book.
 * - 3 (`CUSTOM`): Only special client groups can book.
 * - 2 (`NONE`): Nobody can book.
 */
class BookableSid
{
    /** All users can book. */
    public const ALL = 1;

    /** Only special client groups can book. */
    public const CUSTOM = 3;

    /** Nobody can book. */
    public const NONE = 2;
}
