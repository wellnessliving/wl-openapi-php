<?php

namespace WlSdk\Wl\Search;

/**
 * Search operation constants.
 *
 * Last used ID: 31
 *
 * Values:
 * - 1 (`CONTAIN`): Contains
 * - 27 (`CUSTOM`): Custom
 * - 2 (`DATE`): On
 * - 3 (`DATE_AFTER`): After
 * - 4 (`DATE_BEFORE`): Before
 * - 5 (`DATE_RANGE`): In specific range
 * - 6 (`END_WITH`): Ends with
 * - 13 (`EQUAL`): =
 * - 17 (`GREATER_THAN`): >
 * - 18 (`GREATER_THAN_OR_EQUAL`): >=
 * - 23 (`IN_LAST`): In the last
 * - 24 (`IN_SPECIFIC_RANGE`): In a specific range
 * - 7 (`IS`): Is
 * - 30 (`IS_CHECKED`): Is checked
 * - 11 (`IS_EMPTY`): Is empty
 * - 8 (`IS_NOT`): Isn`t
 * - 31 (`IS_UNCHECKED`): Is unchecked
 * - 29 (`LAST_MONTH`): Last month
 * - 28 (`LAST_WEEK`): Last week
 * - 15 (`LESS_THAN`): <
 * - 16 (`LESS_THAN_OR_EQUAL`): <=
 * - 19 (`NO`): No
 * - 9 (`NOT_CONTAIN`): Doesn`t contain
 * - 12 (`NOT_EMPTY`): Is not empty
 * - 14 (`NOT_EQUAL`): =/=
 * - 10 (`START_WITH`): Starts with
 * - 26 (`THIS_MONTH`): This month
 * - 25 (`THIS_WEEK`): This week
 * - 21 (`TODAY`): Today
 * - 20 (`YES`): Yes
 * - 22 (`YESTERDAY`): Yesterday
 */
class SearchOperationSid
{
    /** Contains */
    public const CONTAIN = 1;

    /** Custom */
    public const CUSTOM = 27;

    /** On */
    public const DATE = 2;

    /** After */
    public const DATE_AFTER = 3;

    /** Before */
    public const DATE_BEFORE = 4;

    /** In specific range */
    public const DATE_RANGE = 5;

    /** Ends with */
    public const END_WITH = 6;

    /** = */
    public const EQUAL = 13;

    /** > */
    public const GREATER_THAN = 17;

    /** >= */
    public const GREATER_THAN_OR_EQUAL = 18;

    /** In the last */
    public const IN_LAST = 23;

    /** In a specific range */
    public const IN_SPECIFIC_RANGE = 24;

    /** Is */
    public const IS = 7;

    /** Is checked */
    public const IS_CHECKED = 30;

    /** Is empty */
    public const IS_EMPTY = 11;

    /** Isn`t */
    public const IS_NOT = 8;

    /** Is unchecked */
    public const IS_UNCHECKED = 31;

    /** Last month */
    public const LAST_MONTH = 29;

    /** Last week */
    public const LAST_WEEK = 28;

    /** < */
    public const LESS_THAN = 15;

    /** <= */
    public const LESS_THAN_OR_EQUAL = 16;

    /** No */
    public const NO = 19;

    /** Doesn`t contain */
    public const NOT_CONTAIN = 9;

    /** Is not empty */
    public const NOT_EMPTY = 12;

    /** =/= */
    public const NOT_EQUAL = 14;

    /** Starts with */
    public const START_WITH = 10;

    /** This month */
    public const THIS_MONTH = 26;

    /** This week */
    public const THIS_WEEK = 25;

    /** Today */
    public const TODAY = 21;

    /** Yes */
    public const YES = 20;

    /** Yesterday */
    public const YESTERDAY = 22;
}
