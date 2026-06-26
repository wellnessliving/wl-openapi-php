<?php

namespace WlSdk;

/**
 * List of tables where custom fields can be used.
 * Cannot use [DbSid](#/components/schemas/DbSid) because some tables can be used in several different ways.
 *
 * Last used ID: 4
 *
 * Values:
 * - 3 (`BUSINESS`): All records in the table RsBusinessSql.
 *   Field FieldValueSql.`k_id` for this type of fields means RsBusinessSql.`k_business`.
 * - 4 (`LOCATION`): Custom fields for locations.
 * - 2 (`PROFILE`): All records in the table PassportLoginSql.
 *   Field FieldValueSql.`k_id` for this type of fields means PassportLoginSql.`uid`.
 * - 1 (`STAFF`): All records in the table RsStaffSql.
 *   Field FieldValueSql.`k_id` for this type of fields means RsStaffSql.`k_staff`.
 */
class RsFieldTableSid
{
    /** All records in the table RsBusinessSql. */
    public const BUSINESS = 3;

    /** Custom fields for locations. */
    public const LOCATION = 4;

    /** All records in the table PassportLoginSql. */
    public const PROFILE = 2;

    /** All records in the table RsStaffSql. */
    public const STAFF = 1;
}
