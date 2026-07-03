<?php

namespace WlSdk;

/**
 * Program type categories.
 *
 * Last used ID: 9.
 *
 * Values:
 * - 7 (`ACCOUNT`): Purchase options to fill user's account:
 *   <ul>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *   </ul>
 * - 1 (`CLASSES`): Purchase options to pay for classes, events and enrollments:
 *   <ul>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *   </ul>
 * - 8 (`INSURANCE`): Special "Wellness Program" purchase option.
 * - 5 (`OTHER`): Packages and daily deals.
 * - 6 (`RESOURCE`): Resource category.
 *
 *   This is a category grouped next program sids:
 *   <ul>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *   </ul>
 * - 3 (`SERVICE`): Purchase options to pay for appointments:
 *   <ul>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *   </ul>
 * - 9 (`VIDEO`): Purchase options to pay for videos:<ui>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *   </ui>
 * - 2 (`VISIT`): Purchase options to pay for gym visits:
 *   <ul>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *     <li>{@link \WlSdk\RsProgramSid}</li>
 *   </ul>
 */
class RsProgramCategorySid
{
    /** Purchase options to fill user's account: */
    public const ACCOUNT = 7;

    /** Purchase options to pay for classes, events and enrollments: */
    public const CLASSES = 1;

    /** Special "Wellness Program" purchase option. */
    public const INSURANCE = 8;

    /** Packages and daily deals. */
    public const OTHER = 5;

    /** Resource category. */
    public const RESOURCE = 6;

    /** Purchase options to pay for appointments: */
    public const SERVICE = 3;

    /** Purchase options to pay for videos:<ui> */
    public const VIDEO = 9;

    /** Purchase options to pay for gym visits: */
    public const VISIT = 2;
}
