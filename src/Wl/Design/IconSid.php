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
class IconSid
{
    /** Signs that session or pass is an appointment connected. */
    public const APPOINTMENT = 4;

    /** Signs that session or pass is an asset connected. */
    public const ASSET = 7;

    /** Signs that session or pass is a class or event connected. */
    public const CLASSES = 5;

    /** Cycle icon. Used, for example, to show transferred status of the promotion. */
    public const CYCLE = 3;

    /** Early cancel activity list icon. */
    public const EARLY_CANCELED = 8;

    /** Signs that session or pass is a gym visit connected. */
    public const GYM_VISIT = 6;

    /** Late cancel activity list icon. */
    public const LATE_CANCELED = 9;

    /** Piece of paper with the curved end for different text notes. */
    public const NOTE = 2;

    /** No show at visit activity list icon. */
    public const NO_SHOW = 10;

    /** Paper with medical symbolic for medical notes. */
    public const SOAP = 1;

    /** Clock activity list icon in SPA application. */
    public const SPA_CLOCK = 11;
}
