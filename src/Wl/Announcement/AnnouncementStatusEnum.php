<?php
namespace WlSdk\Wl\Announcement;

/**
 * List of announcement statuses.
 * 
 * Values:
 * - 1 (`DRAFT`): Announcement does not have publish/unpublish dates.
 * - 2 (`PUBLISH`): Announcement currently is published.
 * - 3 (`SCHEDULE`): Announcement scheduled for publishing.
 * - 4 (`UNPUBLISH`): Announcement previously will be published, but now not published.
 */
enum AnnouncementStatusEnum: int
{
    case DRAFT = 1;
    case PUBLISH = 2;
    case SCHEDULE = 3;
    case UNPUBLISH = 4;
}
