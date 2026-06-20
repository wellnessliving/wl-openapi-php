<?php
namespace WlSdk\Wl\Catalog;

/**
 * List of quick purchase item types.
 * 
 * Values:
 * - 224 (`CLASSES`): Classes.
 * - 681 (`RESOURCE`): Resource.
 * - 690 (`SERVICE`): Service.
 */
enum QuickPurchaseTypeSid: int
{
    case CLASSES = 224;
    case RESOURCE = 681;
    case SERVICE = 690;
}
