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
class AnnouncementStatusEnum
{
    /** Announcement does not have publish/unpublish dates. */
    const DRAFT = 1;
    /** Announcement currently is published. */
    const PUBLISH = 2;
    /** Announcement scheduled for publishing. */
    const SCHEDULE = 3;
    /** Announcement previously will be published, but now not published. */
    const UNPUBLISH = 4;
}
