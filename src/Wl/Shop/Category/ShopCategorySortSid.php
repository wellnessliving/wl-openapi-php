<?php

namespace WlSdk\Wl\Shop\Category;

/**
 * List of Setup -&gt; Store configuration -&gt; Categories and Layout sort options.
 *
 * Values:
 * - 2 (`CUSTOM`): Custom sort.
 * - 3 (`DATE`): Sort by date.
 * - 4 (`PRICE`): Sort by price.
 * - 1 (`NAME`): Sort by name/title.
 *   Each entity can be sorted by name/title.
 */
class ShopCategorySortSid
{
    /** Custom sort. */
    public const CUSTOM = 2;

    /** Sort by date. */
    public const DATE = 3;

    /** Sort by price. */
    public const PRICE = 4;

    /** Sort by name/title. */
    public const NAME = 1;
}
