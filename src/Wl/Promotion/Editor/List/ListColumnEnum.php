<?php

namespace WlSdk\Wl\Promotion\Editor\List;

/**
 * The optional columns of the list of Purchase Options, whose data is read only when it is asked.
 *
 * The nine default columns and the status of a Purchase Option are always in a row, so they are not here.
 *
 * Last used ID: 11.
 *
 * Values:
 * - 1 (`BUY_LIMIT`): The limit of the purchases of one client.
 * - 8 (`CLIENT_GROUP`): The client groups that the Purchase Option is only for.
 * - 9 (`CLIENT_TYPE`): The client types that the Purchase Option is only for.
 * - 6 (`CREATE`): Who created the Purchase Option and when.
 * - 7 (`EDIT`): Who changed the Purchase Option last and when.
 * - 10 (`LOCATION`): The locations where the Purchase Option is sold.
 * - 2 (`PUBLISH`): The date when the Purchase Option is published.
 * - 3 (`RENEW`): Whether the Purchase Option renews itself.
 * - 11 (`SHOP_CATEGORY`): The store categories of the Purchase Option.
 * - 4 (`STATUS`): The planned date when the Purchase Option is switched off.
 * - 5 (`UNPUBLISH`): The date when the Purchase Option is unpublished.
 */
class ListColumnEnum
{
    /** The limit of the purchases of one client. */
    public const BUY_LIMIT = 1;

    /** The client groups that the Purchase Option is only for. */
    public const CLIENT_GROUP = 8;

    /** The client types that the Purchase Option is only for. */
    public const CLIENT_TYPE = 9;

    /** Who created the Purchase Option and when. */
    public const CREATE = 6;

    /** Who changed the Purchase Option last and when. */
    public const EDIT = 7;

    /** The locations where the Purchase Option is sold. */
    public const LOCATION = 10;

    /** The date when the Purchase Option is published. */
    public const PUBLISH = 2;

    /** Whether the Purchase Option renews itself. */
    public const RENEW = 3;

    /** The store categories of the Purchase Option. */
    public const SHOP_CATEGORY = 11;

    /** The planned date when the Purchase Option is switched off. */
    public const STATUS = 4;

    /** The date when the Purchase Option is unpublished. */
    public const UNPUBLISH = 5;
}
