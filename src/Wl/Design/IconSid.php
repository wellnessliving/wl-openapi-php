<?php
namespace WlSdk\Wl\Design;

/**
 * List of available design icons.
 * Name of the class with this icon will be wl-icon-[sid]
 * 
 * Last used ID 11.
 * 
 * Values:
 * - 4 (`APPOINTMENT`): Signs that session or pass is an appointment connected.
 * - 7 (`ASSET`): Signs that session or pass is an asset connected.
 * - 5 (`CLASSES`): Signs that session or pass is a class or event connected.
 * - 3 (`CYCLE`): Cycle icon. Used, for example, to show transferred status of the promotion.
 * - 8 (`EARLY_CANCELED`): Early cancel activity list icon.
 * - 6 (`GYM_VISIT`): Signs that session or pass is a gym visit connected.
 * - 9 (`LATE_CANCELED`): Late cancel activity list icon.
 * - 2 (`NOTE`): Piece of paper with the curved end for different text notes.
 * - 10 (`NO_SHOW`): No show at visit activity list icon.
 * - 1 (`SOAP`): Paper with medical symbolic for medical notes.
 * - 11 (`SPA_CLOCK`): Clock activity list icon in SPA application.
 */
enum IconSid: int
{
    case APPOINTMENT = 4;
    case ASSET = 7;
    case CLASSES = 5;
    case CYCLE = 3;
    case EARLY_CANCELED = 8;
    case GYM_VISIT = 6;
    case LATE_CANCELED = 9;
    case NOTE = 2;
    case NO_SHOW = 10;
    case SOAP = 1;
    case SPA_CLOCK = 11;
}
