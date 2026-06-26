<?php

namespace WlSdk\Core\Prg;

/**
 * List of mode for editor on programmers page.
 *
 * Values:
 * - 1 (`MYSQL`): Mysql mode.
 * - 3 (`PGSQL`): Postresql mode.
 * - 2 (`PHP`): PHP mode.
 */
class PrgKeywordModeSid
{
    /** Mysql mode. */
    public const MYSQL = 1;

    /** Postresql mode. */
    public const PGSQL = 3;

    /** PHP mode. */
    public const PHP = 2;
}
