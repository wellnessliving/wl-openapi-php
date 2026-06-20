<?php

namespace WlSdk\Wl\Reception\Application;

/**
 * Define types of icons for notice messages.
 *
 * Last ID: 10.
 *
 * Values:
 * - 1 (`AWARD`): Icon of an award ribbon. For celebration of an occasion (e.g. a client's first visit).
 * - 2 (`CAKE`): Icon of a birthday cake. For birthday messages.
 * - 3 (`CONTRACT`): Icon of a signed contract.
 * - 4 (`DOCUMENT_SLASH`): Icon of a document with a slash. For the unsigned waiver message.
 * - 5 (`DOLLAR`): Icon of dollar sign. For messages relating to personal balance and amounts due.
 * - 6 (`DUMBBELL`): Icon of a dumbbell. For messages relating to visits.
 * - 7 (`FORM`): Icon of a form.
 * - 8 (`INFO`): Icon of an "i". Used for general informative messages.
 * - 9 (`PROBLEM`): Icon of an "x". For messages communicating some important or urgent issue for the user.
 * - 10 (`WARNING`): Icon of an exclamation mark. For messages communicating a mild issue or cautioning the user.
 */
class MemberInfoIconSid
{
    /** Icon of an award ribbon. For celebration of an occasion (e.g. a client's first visit). */
    public const AWARD = 1;

    /** Icon of a birthday cake. For birthday messages. */
    public const CAKE = 2;

    /** Icon of a signed contract. */
    public const CONTRACT = 3;

    /** Icon of a document with a slash. For the unsigned waiver message. */
    public const DOCUMENT_SLASH = 4;

    /** Icon of dollar sign. For messages relating to personal balance and amounts due. */
    public const DOLLAR = 5;

    /** Icon of a dumbbell. For messages relating to visits. */
    public const DUMBBELL = 6;

    /** Icon of a form. */
    public const FORM = 7;

    /** Icon of an "i". Used for general informative messages. */
    public const INFO = 8;

    /** Icon of an "x". For messages communicating some important or urgent issue for the user. */
    public const PROBLEM = 9;

    /** Icon of an exclamation mark. For messages communicating a mild issue or cautioning the user. */
    public const WARNING = 10;
}
