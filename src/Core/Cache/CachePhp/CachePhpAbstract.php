<?php

namespace WlSdk\Core\Cache\CachePhp;

/**
 * Base class for all types of caches based on PHP files.
 *
 * See `namespace.Core/Cache/CachePhp/doc/intro.md` for introduction into cache based on PHP files.
 *
 * Values:
 * - 1068 (`Core\Geo\GeoMainPhpCache`): Contains entire contents of AGeoSql.
 *
 *   To quickly rebuild the cache, run the command on the programmer's page:
 *
 *         `update core_cache_php_generate set dtu_generate=current_timestamp where cid_cache=1068;`
 * - 1355 (`Core\Geo\GeoTimezonePhpCache`): Contains entire contents of AGeoTimezoneSql and AGeoTimezoneCmsSql.
 * - 1920 (`Core\Microservice\MicroserviceInstancePhpCache`): Caches information about instances known to this
 * instance.
 *   This information is stored in the InstanceSql table.
 *
 *   The InstanceSql table is global table and all data centers have access to it and
 *   information about all instances is stored there. When filling the cache for each data center, data from this table
 * is
 *   selected.
 * - 1354 (`Wl\Business\BusinessExistsPhpCache`): Stores information about existing businesses.
 *
 *   Business key is a primary key in RsBusinessSql.
 * - 1097 (`Core\Passport\User\PassportUserExistsPhpCache`): Stores information about existing user UIDs.
 *
 *   User UID is a primary key in PassportLoginSql.
 *   See namespace.Core/Passport/User/doc/php_cache_complete_rebuild.ru.md for a complete cache rebuild.
 * - 1377 (`Core\Passport\User\MergePhpCache\PassportUserMergePhpCache`): Caches information about merged users.
 *
 *   Merged users are initially stored in PassportLoginMergeSql.`uid_merge`.
 *   Whether the user is merged is checked with PassportLoginMerge::isUserMerged().
 *
 *   Deletions from the PassportLoginMergeSql table are prohibited by the `PassportLoginMergeBeforeDeleteTrigger.sql`
 * trigger.
 *   Deletions from the PassportLoginMergeSql table are tracked by the `PassportLoginMergeAfterDeleteTrigger.sql`
 * trigger
 *   and written to the UserMergeRecentSql table.
 *   Inserts into the PassportLoginMergeSql table are prohibited by the `PassportLoginMergeBeforeInsertTrigger.sql`
 * trigger.
 *   Inserts into the PassportLoginMergeSql table are tracked by the `PassportLoginMergeAfterInsertTrigger.sql` trigger
 *   and written to the UserMergeRecentSql table.
 * - 1357 (`Core\Locale\Message\PhpCache\LocaleMessagePhpCache`): Manages cache for translated messages.
 *
 *   In the cached array, key is source of translated message as it appears in sources, not cleared with
 *   _cms_message_clear(). Value is an array with the following elements:<dl>
 *   <dt>int (language ID)</dt>
 *   <dd>Translation to specified language, if available.</dd>
 *   </dl>
 * - 1497 (`Wl\Location\Alias\PhpCache\LocationAliasPhpCache`): Caches information about location aliases.
 *
 *   Information about location aliases is stored in the AliasSql table.
 *
 *   The AliasSql table and the LocationAliasRecentSql change table
 *   are global tables and all data centers have access to it and information about all aliases is stored there.
 *   When filling the cache for each data center, data from these tables is selected and processed only for those
 *   businesses that belong to this data center.
 *
 *   All changes in the AliasSql table are prohibited by triggers:
 *   `LocationAliasBeforeInsertTrigger.sql`, `LocationAliasBeforeUpdateTrigger.sql` and
 * `LocationAliasBeforeDeleteTrigger.sql`.
 *   All changes in the AliasSql table are tracked by triggers:
 *   `LocationAliasAfterInsertTrigger.sql`, `LocationAliasAfterUpdateTrigger.sql` and
 * `LocationAliasAfterDeleteTrigger.sql`
 *   and are recorded in the change table: LocationAliasRecentSql.
 */
class CachePhpAbstract
{
    /** Contains entire contents of AGeoSql. */
    public const GeoMainPhpCache = 1068;

    /** Contains entire contents of AGeoTimezoneSql and AGeoTimezoneCmsSql. */
    public const GeoTimezonePhpCache = 1355;

    /** Caches information about instances known to this instance. */
    public const MicroserviceInstancePhpCache = 1920;

    /** Stores information about existing businesses. */
    public const BusinessExistsPhpCache = 1354;

    /** Stores information about existing user UIDs. */
    public const PassportUserExistsPhpCache = 1097;

    /** Caches information about merged users. */
    public const PassportUserMergePhpCache = 1377;

    /** Manages cache for translated messages. */
    public const LocaleMessagePhpCache = 1357;

    /** Caches information about location aliases. */
    public const LocationAliasPhpCache = 1497;
}
