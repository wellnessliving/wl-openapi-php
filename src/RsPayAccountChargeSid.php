<?php
namespace WlSdk;

/**
 * List of page transaction type.
 * 
 * Values:
 * - 1 (`AUTO`): Account charging using payment form.
 * - 3 (`CREDIT`): Manual account charge by admin.
 * - 2 (`DEBIT`): Manual account withdrawal by admin.
 */
enum RsPayAccountChargeSid: int
{
    case AUTO = 1;
    case CREDIT = 3;
    case DEBIT = 2;
}
