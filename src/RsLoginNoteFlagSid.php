<?php
namespace WlSdk;

/**
 * List of modes to change user's "flag" status within a location
 * 
 * Values:
 * - 1 (`ADD`): Add flag record.
 * - 2 (`REMOVE`): Remove flag record.
 */
class RsLoginNoteFlagSid
{
    /** Add flag record. */
    const ADD = 1;
    /** Remove flag record. */
    const REMOVE = 2;
}
