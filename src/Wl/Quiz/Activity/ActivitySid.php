<?php

namespace WlSdk\Wl\Quiz\Activity;

/**
 * The status of form actions.
 *
 * Last used ID: 8.
 *
 * Values:
 * - 1 (`ADD`): Form was added to the profile.
 * - 2 (`DRAFT`): Form was saved as a draft.
 * - 3 (`EDIT`): Form was edited.
 * - 4 (`EXPORT_CSV`): Form was exported to CSV file.
 * - 5 (`EXPORT_PDF`): Form was exported to PDF file.
 * - 6 (`PRINTING`): Form was printed.
 * - 7 (`SUBMIT`): Form was submitted.
 * - 8 (`VIEW`): Form was viewed.
 */
class ActivitySid
{
    /** Form was added to the profile. */
    public const ADD = 1;

    /** Form was saved as a draft. */
    public const DRAFT = 2;

    /** Form was edited. */
    public const EDIT = 3;

    /** Form was exported to CSV file. */
    public const EXPORT_CSV = 4;

    /** Form was exported to PDF file. */
    public const EXPORT_PDF = 5;

    /** Form was printed. */
    public const PRINTING = 6;

    /** Form was submitted. */
    public const SUBMIT = 7;

    /** Form was viewed. */
    public const VIEW = 8;
}
