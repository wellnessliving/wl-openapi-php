<?php
namespace WlSdk;

/**
 * Review status identifiers.
 * 
 * Values:
 * - 1 (`ADMIN`): Admin.
 * - 4 (`HIDDEN`): Hidden.
 * - 3 (`PUBLISH`): Publish.
 */
enum RsReviewStatusSid: int
{
    case ADMIN = 1;
    case HIDDEN = 4;
    case PUBLISH = 3;
}
