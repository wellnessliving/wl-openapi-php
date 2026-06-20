<?php

namespace WlSdk\Wl\Announcement;

/**
 * List of fields by which you can sort.
 *
 * Values:
 * - 1 (`CREATED_BY`): Created by field.
 * - 2 (`CREATED_DATE`): Created date field.
 * - 3 (`DESCRIPTION`): Description field.
 * - 4 (`IMAGE`): Image field.
 * - 5 (`LOCATION`): Location field.
 * - 6 (`PUBLISH_DATE`): Publish date field.
 * - 7 (`STATUS`): Status field.
 * - 8 (`TITLE`): Title field.
 * - 9 (`UNPUBLISH_DATE`): Unpublish date field.
 */
class SortFieldSid
{
    /** Created by field. */
    public const CREATED_BY = 1;

    /** Created date field. */
    public const CREATED_DATE = 2;

    /** Description field. */
    public const DESCRIPTION = 3;

    /** Image field. */
    public const IMAGE = 4;

    /** Location field. */
    public const LOCATION = 5;

    /** Publish date field. */
    public const PUBLISH_DATE = 6;

    /** Status field. */
    public const STATUS = 7;

    /** Title field. */
    public const TITLE = 8;

    /** Unpublish date field. */
    public const UNPUBLISH_DATE = 9;
}
