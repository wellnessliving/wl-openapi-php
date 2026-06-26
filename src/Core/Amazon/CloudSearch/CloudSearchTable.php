<?php

namespace WlSdk\Core\Amazon\CloudSearch;

/**
 * Represents structure of a Cloud Search table.
 *
 * A list of fields that should always be created at Amazon side:
 * * `adt_` - `date-array`.
 * * `af_` - `double-array`.
 * * `ai_` - `int-array`.
 * * `as_` - `string-array`.
 * * `dt_` - `date`.
 * * `f_` - `double`.
 * * `i_` - `int`.
 * * `s_` - `string`.
 *
 * Values:
 * - 109 (`Core\Log\LogSearchTable`): Represents a row from an Amazon Cloud Search table to search logs.
 * - 1980 (`Thoth\ExplorerSearch\ClassSession\ClassPeriodSessionSearchTable`): Represents a row from the class session
 * search table.
 * - 1019 (`Core\Docs\Search\DocsSearchTable`): Represents a row from a Cloud Search table to search docs.
 * - 94 (`Wl\Login\Search\LoginSearchTable`): Represents a row from an Amazon Cloud Search table to search users.
 *
 *   <b>Note</b>. When new information field (not indexed word to search!) is added good to make next actions:
 *     - add property or properties into LoginSearchTableBusinessInfo class to save new information;
 *     - add parsing of new field in LoginSearchTableBusinessInfo::create() method;
 *     - add supporting into LoginSearchTableBusinessInfo::fieldGeneralValueText() method in a case when
 *     information about new general field is added (field from
 * [RsFieldGeneralSid](#/components/schemas/RsFieldGeneralSid)).
 * - 588 (`Wl\Staff\Search\StaffSearchTable`): Staff search table.
 *   Represents a row from an index table.
 * - 579 (`Wl\Visit\Search\VisitSearchTable`): Represents a row from an Amazon Cloud Search table to search visits.
 * - 586 (`Wl\Location\Search\LocationSearchTable`): Location search table.
 *   Represents a row from an index table.
 * - 587 (`Wl\Service\Search\ServiceSearchTable`): Service search table.
 *   Represents a row from an index table.
 * - 1301 (`Wl\Resource\Search\ResourceSearchTable`): Resource search table.
 *   Represents a row from an index table.
 * - 760 (`Wl\Purchase\Item\Search\PurchaseItemSearchTable`): Represents a row from the purchase item search table.
 *
 *   Purchase items and purchases will be eventually transferred to business shards, so for search result to make sense
 *   it should also return business key. Next time this table has to be fully reindexed - business key should be added
 *   to output fields alongside purchase and item keys.
 * - 807 (`Wl\Purchase\Transaction\Search\PurchaseTransactionSearchTable`): Represents a row from the purchase
 * transaction search table.
 */
class CloudSearchTable
{
    /** Represents a row from an Amazon Cloud Search table to search logs. */
    public const LogSearchTable = 109;

    /** Represents a row from the class session search table. */
    public const ClassPeriodSessionSearchTable = 1980;

    /** Represents a row from a Cloud Search table to search docs. */
    public const DocsSearchTable = 1019;

    /** Represents a row from an Amazon Cloud Search table to search users. */
    public const LoginSearchTable = 94;

    /** Staff search table. */
    public const StaffSearchTable = 588;

    /** Represents a row from an Amazon Cloud Search table to search visits. */
    public const VisitSearchTable = 579;

    /** Location search table. */
    public const LocationSearchTable = 586;

    /** Service search table. */
    public const ServiceSearchTable = 587;

    /** Resource search table. */
    public const ResourceSearchTable = 1301;

    /** Represents a row from the purchase item search table. */
    public const PurchaseItemSearchTable = 760;

    /** Represents a row from the purchase transaction search table. */
    public const PurchaseTransactionSearchTable = 807;
}
