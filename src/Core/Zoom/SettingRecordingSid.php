<?php

namespace WlSdk\Core\Zoom;

/**
 * List of recording options.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`CLOUD`): Start automatic recording on cloud.
 * - 2 (`LOCAL`): Start automatic recording on local.
 * - 3 (`NONE`): Do not start automatic recording.
 */
class SettingRecordingSid
{
    /** Start automatic recording on cloud. */
    public const CLOUD = 1;

    /** Start automatic recording on local. */
    public const LOCAL = 2;

    /** Do not start automatic recording. */
    public const NONE = 3;
}
