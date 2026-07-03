<?php

namespace WlSdk\Wl\Book\Process;

/**
 * Class/Event booking process sid class.
 *
 * Last used ID: 12.
 *
 * Values:
 * - 10 (`DETAIL`): Step "Class details".
 *
 *   Special step - a container for combining other steps.
 *
 *   This constant has been added to the SID class to match the steps interface in JS.
 *
 *   Adding a step to the queue is done on the client side (in JS).
 *
 *   The list of steps that can be displayed on {@link \WlSdk\Wl\Book\Process\ProcessSpaSid}.
 *
 *   Designed for Client Web View.
 * - 8 (`DOCUMENT`): Step "Documents".
 *
 *   Special step - a container for combining other steps.
 *
 *   This constant has been added to the SID class to match the steps interface in JS
 *
 *   Adding a step to the queue is done on the client side (in JS).
 *
 *   The list of steps that can be displayed on:
 *    * {@link \WlSdk\Wl\Book\Process\ProcessSpaSid}
 *    * Purchase options contract
 *
 *   Designed for Client Web View.
 * - 9 (`FREQUENCY`): Step "Frequency".
 *   It is necessary to select booking frequency.
 *
 *   Designed for Client Web View.
 * - 2 (`INFO`): Information about the class.
 *
 *   In the SPA app, this step combines the following steps:
 *   * {@link \WlSdk\Wl\Book\Process\ProcessSpaSid}
 *   * {@link \WlSdk\Wl\Book\Process\ProcessSpaSid}
 * - 4 (`INSTALLMENT`): Installment selection.
 * - 1 (`PASSPORT`): Sign in, Sign up, fill in all necessary account data.
 * - 5 (`PAYMENT`): Card data and the booking confirmation.
 * - 7 (`QUIZ`): Quizzes attached to the class.
 * - 12 (`RELATION`): Booking for.
 * - 6 (`RESOURCE`): Selection of assets.
 * - 11 (`SESSION`): Session selection step for a session event.
 *
 *   Designed for Client Web View.
 * - 3 (`STORE`): A list of possible Purchase Options to be bought.
 */
class ProcessSpaSid
{
    /** Step "Class details". */
    public const DETAIL = 10;

    /** Step "Documents". */
    public const DOCUMENT = 8;

    /** Step "Frequency". */
    public const FREQUENCY = 9;

    /** Information about the class. */
    public const INFO = 2;

    /** Installment selection. */
    public const INSTALLMENT = 4;

    /** Sign in, Sign up, fill in all necessary account data. */
    public const PASSPORT = 1;

    /** Card data and the booking confirmation. */
    public const PAYMENT = 5;

    /** Quizzes attached to the class. */
    public const QUIZ = 7;

    /** Booking for. */
    public const RELATION = 12;

    /** Selection of assets. */
    public const RESOURCE = 6;

    /** Session selection step for a session event. */
    public const SESSION = 11;

    /** A list of possible Purchase Options to be bought. */
    public const STORE = 3;
}
