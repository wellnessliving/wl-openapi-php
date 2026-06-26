<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

/**
 * A class with statuses of dialog.
 *
 * Last used ID: 5.
 *
 * Values:
 * - 1 (`ALL`): Need to show all dialog.
 * - 2 (`ARCHIVED`): Need to show only archived dialogues.
 * - 3 (`READ`): Need to show only read dialogues.
 * - 4 (`REPLIED`): Need to show only replied dialogues.
 * - 5 (`UNREAD`): Need to show only unread dialogues.
 */
class DialogStatusSid
{
    /** Need to show all dialog. */
    public const ALL = 1;

    /** Need to show only archived dialogues. */
    public const ARCHIVED = 2;

    /** Need to show only read dialogues. */
    public const READ = 3;

    /** Need to show only replied dialogues. */
    public const REPLIED = 4;

    /** Need to show only unread dialogues. */
    public const UNREAD = 5;
}
