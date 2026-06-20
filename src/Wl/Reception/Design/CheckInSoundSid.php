<?php
namespace WlSdk\Wl\Reception\Design;

/**
 * List of sounds used for check ins.
 * 
 * Last used ID: 6.
 * 
 * Values:
 * - 1 (`ERROR_SOUND_1`): Error sound 1 to be played when self check in fails.
 * - 2 (`ERROR_SOUND_2`): Error sound 2 to be played when self check in fails.
 * - 3 (`ERROR_SOUND_3`): Error sound 3 to be played when self check in fails.
 * - 4 (`SUCCESS_SOUND_1`): Success sound 1 to be played when self check in succeeds.
 * - 5 (`SUCCESS_SOUND_2`): Success sound 2 to be played when self check in succeeds.
 * - 6 (`SUCCESS_SOUND_3`): Success sound 3 to be played when self check in succeeds.
 */
enum CheckInSoundSid: int
{
    case ERROR_SOUND_1 = 1;
    case ERROR_SOUND_2 = 2;
    case ERROR_SOUND_3 = 3;
    case SUCCESS_SOUND_1 = 4;
    case SUCCESS_SOUND_2 = 5;
    case SUCCESS_SOUND_3 = 6;
}
