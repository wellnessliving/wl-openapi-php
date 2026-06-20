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
enum ActivitySid: int
{
    case ADD = 1;
    case DRAFT = 2;
    case EDIT = 3;
    case EXPORT_CSV = 4;
    case EXPORT_PDF = 5;
    case PRINTING = 6;
    case SUBMIT = 7;
    case VIEW = 8;
}
