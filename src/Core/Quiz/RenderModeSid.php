<?php

namespace WlSdk\Core\Quiz;

/**
 * List of render modes.
 *
 * Values:
 * - 8 (`ACCESS_DENIED_PRIVATE`): Mode for displaying the error message about access restriction to private quiz.
 * - 5 (`AMEND`): Mode to provide ability to perform question amendment.
 * - 7 (`AMEND_ADD`): Mode to display only part of the question with answer element.
 * - 6 (`ANSWER`): Mode to display only answer of the question without actual question information.
 * - 2 (`EDIT`): Edit mode on quiz edit form.
 * - 1 (`PREVIEW`): Preview mode on quiz edit form.
 * - 4 (`REPORT`): Mode to display element with response.
 * - 3 (`RESPONSE`): Response mode on the form where response expected.
 */
class RenderModeSid
{
    /** Mode for displaying the error message about access restriction to private quiz. */
    public const ACCESS_DENIED_PRIVATE = 8;

    /** Mode to provide ability to perform question amendment. */
    public const AMEND = 5;

    /** Mode to display only part of the question with answer element. */
    public const AMEND_ADD = 7;

    /** Mode to display only answer of the question without actual question information. */
    public const ANSWER = 6;

    /** Edit mode on quiz edit form. */
    public const EDIT = 2;

    /** Preview mode on quiz edit form. */
    public const PREVIEW = 1;

    /** Mode to display element with response. */
    public const REPORT = 4;

    /** Response mode on the form where response expected. */
    public const RESPONSE = 3;
}
