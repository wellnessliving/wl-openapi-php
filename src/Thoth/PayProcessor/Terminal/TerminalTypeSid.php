<?php

namespace WlSdk\Thoth\PayProcessor\Terminal;

/**
 * List of supported terminal interaction types.
 * Note: this list is rather internal Wellnessliving application list rather than common-known list. Each of types
 * determines the way how we interact with terminal on application level.
 *
 * Values:
 * - 1 (`MAGTEK_USB`): Magtek USB.
 *   This type of terminal does not require registration on Hardware page.
 */
class TerminalTypeSid
{
    /** Magtek USB. */
    public const MAGTEK_USB = 1;
}
