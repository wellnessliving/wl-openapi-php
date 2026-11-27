<?php

namespace WlSdk\Wl\Promotion\Editor\List;

/**
 * The sorts of the list of Purchase Options.
 *
 * Last used ID: 5.
 *
 * Values:
 * - 3 (`LENGTH`): By the length of the Purchase Option: the unit of the duration, then its number.
 * - 1 (`NAME`): By the title of the Purchase Option.
 * - 5 (`ORDER`): By the order in which clients see the Purchase Options in the store.
 * - 2 (`PRICE`): By the price of the Purchase Option.
 *
 *   The order follows the price that is saved with the Purchase Option, as the old list does. A package shows the
 *   sum of its components, so its place may differ from the price shown.
 * - 4 (`VISIT`): By the number of the visits that the Purchase Option includes.
 *
 *   The order follows the limit that is saved with the Purchase Option, as the old list does. A guest pass shows the
 *   limit of its own settings, so its place may differ from the visits shown.
 */
class ListSortEnum
{
    /** By the length of the Purchase Option: the unit of the duration, then its number. */
    public const LENGTH = 3;

    /** By the title of the Purchase Option. */
    public const NAME = 1;

    /** By the order in which clients see the Purchase Options in the store. */
    public const ORDER = 5;

    /** By the price of the Purchase Option. */
    public const PRICE = 2;

    /** By the number of the visits that the Purchase Option includes. */
    public const VISIT = 4;
}
