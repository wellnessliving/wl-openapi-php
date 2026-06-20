<?php
namespace WlSdk\Core\Sid;

/**
 * List of possible sort order.
 * 
 * Values:
 * - 2 (`ASC`): Ascending order.
 * - 1 (`DESC`): Descending order.
 */
enum SortOrderSid: int
{
    case ASC = 2;
    case DESC = 1;
}
