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
enum RsLoginNoteAccessSid: int
{
    case CLIENT = 1;
    case ME = 2;
    case STAFF = 3;
}
