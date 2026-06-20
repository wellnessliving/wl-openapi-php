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
class RsPayAccountChargeSid
{
    /** Account charging using payment form. */
    const AUTO = 1;
    /** Manual account charge by admin. */
    const CREDIT = 3;
    /** Manual account withdrawal by admin. */
    const DEBIT = 2;
}
