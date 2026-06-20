<?php
namespace WlSdk;

/**
 * Class for access type to login note.
 * 
 * Values:
 * - 1 (`CLIENT`): Login note can view all staff and client.
 * - 2 (`ME`): Login note can view only staff which create this note.
 * - 3 (`STAFF`): Login note can view only all staff.
 */
class RsLoginNoteAccessSid
{
    /** Login note can view all staff and client. */
    const CLIENT = 1;
    /** Login note can view only staff which create this note. */
    const ME = 2;
    /** Login note can view only all staff. */
    const STAFF = 3;
}
