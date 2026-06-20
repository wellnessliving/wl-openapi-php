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
enum ShopCategorySortSid: int
{
    case CUSTOM = 2;
    case DATE = 3;
    case PRICE = 4;
    case NAME = 1;
}
