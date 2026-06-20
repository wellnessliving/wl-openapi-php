<?php
namespace WlSdk;

/**
 * List of modes to change user's "flag" status within a location
 * 
 * Values:
 * - 1 (`ADD`): Add flag record.
 * - 2 (`REMOVE`): Remove flag record.
 */
enum RsLoginNoteFlagSid: int
{
    case ADD = 1;
    case REMOVE = 2;
}
