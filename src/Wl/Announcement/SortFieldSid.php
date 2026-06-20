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
enum SortFieldSid: int
{
    case CREATED_BY = 1;
    case CREATED_DATE = 2;
    case DESCRIPTION = 3;
    case IMAGE = 4;
    case LOCATION = 5;
    case PUBLISH_DATE = 6;
    case STATUS = 7;
    case TITLE = 8;
    case UNPUBLISH_DATE = 9;
}
