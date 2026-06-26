<?php

namespace WlSdk\Wl\Business\RegionTravel;

/**
 * Base class for all steps that should be performed during travelling of the business between Amazon Regions.
 *
 * Values:
 * - 1534 (`Wl\Visit\VisitCountBusinessTravelStep`): Performs reconciliation of VisitCountBusinessSql of the travelled
 * business.
 *
 *   ## Why this reconciliation is needed
 *
 *   Although data in VisitCountBusinessSql is moved by
 * [DbTableTravelTask](#/components/schemas/Core.Task.CoreTaskNormal),
 *   VisitChangeLogSql is not moved. This may lead to data loss.
 * - 1284 (`Wl\Visit\VisitCountUpdateTravelStep`): Performs reconciliation of RsScheduleCountSql of the travelled
 * business.
 *
 *   ## Why this reconciliation is needed
 *
 *   Although data in RsScheduleCountSql is moved by
 * [DbTableTravelTask](#/components/schemas/Core.Task.CoreTaskNormal),
 *   VisitChangeLogSql is not moved. This may lead to data loss.
 * - 1210 (`Wl\ClassPass\BusinessNumberDestinationTravelStep`): Calls
 * [BusinessNumberStatisticValue::initialize()](#/components/schemas/Wl.StatisticValue.StatisticValueAbstract) in the
 * destination region.
 * - 1211 (`Wl\ClassPass\BusinessNumberSourceTravelStep`): Calls
 * [BusinessNumberStatisticValue::initialize()](#/components/schemas/Wl.StatisticValue.StatisticValueAbstract) in the
 * source region.
 * - 1532 (`Wl\Business\RegionTravel\DbSnapshotTravelStep`): Creates snapshot of the main and shard databases right
 * after blocking business from access.
 * - 1686 (`Wl\Business\RegionTravel\DbTableBusinessTravelStep`): Copies tables RsBusinessSql, RsBusinessCmsSql to
 * target data-center.
 *
 *   The reason to copy it separately is that these tables are only synchronized partially.
 *   Only columns listed in BusinessSyncCron::SYNC_TABLE are synchronized.
 *   This leads to that when the business is transferred, some data may be missing.
 *   This task fixes this.
 * - 1289 (`Wl\Business\RegionTravel\DbTableFullTravelStep`): Copies entire contents of tables before other
 * business-specific data may be transferred to a new region.
 *
 *   It is entirely safe to restart this task.
 *
 *   Because the data transferred by this task is normally small,
 *   it is not implemented to continue from the point at  which this task has stopped.
 *   Instead, all the data will be transferred again.
 *
 *   Note that this task only moves data that is not business-specific, and for which other synchronization methods
 *   are not applicable.
 *
 *   Business-specific tables are moved with [DbTableTravelTask](#/components/schemas/Core.Task.CoreTaskNormal).
 *
 *   Configuration system-wide tables are normally synchronized with TableSyncCron.
 * - 1194 (`Wl\Business\RegionTravel\RegionOpenTravelStep`): Opens destination region for accessing by the users:
 *   * sets status of the shard to [DbShardStatusSid::ACTIVE](#/components/schemas/Core.Db.Shard.DbShardStatusSid) in
 * the destination region (but not in source);
 *   * sets correct region id in RsBusinessSql.`id_region` in both regions.
 * - 1700 (`Wl\Business\RegionTravel\MailChimpWebhookInitTravelStep`): Step to initializes MailChimp webhook in new
 * region.
 * - 1702 (`Wl\Business\RegionTravel\MailChimpWebhookRemoveTravelStep`): Step to remove MailChimp webhook in old
 * region.
 * - 1187 (`Wl\Business\RegionTravel\ClearCacheDestinationAfterTravelStep`): Clears all caches and restarts all
 * background threads at destination region after region of the business is set to
 *   the target region.
 * - 1188 (`Wl\Business\RegionTravel\ClearCacheDestinationBeforeTravelStep`): Clears all caches and restarts all
 * background threads at destination region after region of the business is set to
 *   [AmazonRegionSid::INTERMEDIATE](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) but before it is set to
 * the target region.
 * - 1190 (`Wl\Business\RegionTravel\ClearCacheSourceAfterTravelStep`): Clears all caches and restarts all background
 * threads at source region after region of the business is set to
 *   the target region.
 *
 *   This is needed because value of RsBusinessSql.`id_region` is updated from
 *   [AmazonRegionSid::INTERMEDIATE](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) to actual target region.
 *   It is important that this update become visible to regular users so that users get redirected to a new region.
 * - 1189 (`Wl\Business\RegionTravel\ClearCacheSourceBeforeTravelStep`): Clears all caches and restarts all background
 * threads at source region after region of the business is set to
 *   [AmazonRegionSid::INTERMEDIATE](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) but before it is set to
 * the target region.
 * - 1338 (`Wl\Business\RegionTravel\DbTableClearTravelStep`): Manages cleaning of the database contents after a
 * business was moved to a new datacenter.
 * - 1182 (`Wl\Business\RegionTravel\DbTableTravelStep`): Manages movement of the database data to the new region.
 * - 1336 (`Wl\Business\RegionTravel\DriveCleanTravelStep`): Manages cleaning of the Drive file storage after a
 * business was moved to a new datacenter.
 * - 1191 (`Wl\Business\RegionTravel\DriveTravelStep`): Manages travelling of the S3 file storage between the regions.
 * - 1192 (`Wl\Business\RegionTravel\DynamoShardKeyTravelStep`): Manages travelling of contents of
 * [DbShardKeyDynamo](#/components/schemas/Core.Amazon.DynamoDb.DynamoDbAbstract) related to this business.
 * - 1207 (`Wl\Business\RegionTravel\SearchReindexTravelStep`): Schedules reindexing of all transactions during
 * travelling of a business between Amazon regions.
 * - 1335 (`Wl\Business\RegionTravel\SosCleanTravelStep`): Manages clearing of business SOS files from source Amazon
 * region.
 * - 1193 (`Wl\Business\RegionTravel\SosTravelStep`): Manages travelling business SOS files between Amazon regions.
 * - 1195 (`Wl\Business\RegionTravel\TaskTravelStep`): Manages travelling of tasks to the destination region.
 * - 1200 (`Wl\Login\Promotion\LoginPromotionTravelStep`): Manages
 * [LoginPromotionTravelTask](#/components/schemas/Core.Task.CoreTaskNormal).
 * - 1197 (`Wl\Login\Birthday\LoginBirthdayTravelStep`): Schedules
 * [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask) tasks for all members of the business that is
 * travelling to a new
 *   Amazon region.
 * - 1411 (`Wl\Sms\Phone\UpdatePhoneResponseUrlTravelStep`): Updates the `inboundRequestUrl` for the business to point
 * to the correct regional URL.
 *
 *   ## Why this reconciliation is needed
 *
 *   Because the `inboundRequestUrl` of a Twilio messaging service uses a URL specific to the datacenter
 *   hosting the business, this URL must be updated when the business changes datacenters.
 * - 1294 (`Wl\Sms\Stat\SmsStatReconcileTravelStep`): Performs reconciliation of SmsStatSql of the travelled business.
 *
 *   ## Why this reconciliation is needed
 *
 *   Although data in SmsStatSql is moved by [DbTableTravelTask](#/components/schemas/Core.Task.CoreTaskNormal),
 *   SmsLogSql is not moved. This may lead to data loss.
 */
class TravelStepAbstract
{
    /** Performs reconciliation of VisitCountBusinessSql of the travelled business. */
    public const VisitCountBusinessTravelStep = 1534;

    /** Performs reconciliation of RsScheduleCountSql of the travelled business. */
    public const VisitCountUpdateTravelStep = 1284;

    /** Calls [BusinessNumberStatisticValue::initialize()](#/components/schemas/Wl.StatisticValue.StatisticValueAbstract) in the destination region. */
    public const BusinessNumberDestinationTravelStep = 1210;

    /** Calls [BusinessNumberStatisticValue::initialize()](#/components/schemas/Wl.StatisticValue.StatisticValueAbstract) in the source region. */
    public const BusinessNumberSourceTravelStep = 1211;

    /** Creates snapshot of the main and shard databases right after blocking business from access. */
    public const DbSnapshotTravelStep = 1532;

    /** Copies tables RsBusinessSql, RsBusinessCmsSql to target data-center. */
    public const DbTableBusinessTravelStep = 1686;

    /** Copies entire contents of tables before other business-specific data may be transferred to a new region. */
    public const DbTableFullTravelStep = 1289;

    /** Opens destination region for accessing by the users: */
    public const RegionOpenTravelStep = 1194;

    /** Step to initializes MailChimp webhook in new region. */
    public const MailChimpWebhookInitTravelStep = 1700;

    /** Step to remove MailChimp webhook in old region. */
    public const MailChimpWebhookRemoveTravelStep = 1702;

    /** Clears all caches and restarts all background threads at destination region after region of the business is set to */
    public const ClearCacheDestinationAfterTravelStep = 1187;

    /** Clears all caches and restarts all background threads at destination region after region of the business is set to */
    public const ClearCacheDestinationBeforeTravelStep = 1188;

    /** Clears all caches and restarts all background threads at source region after region of the business is set to */
    public const ClearCacheSourceAfterTravelStep = 1190;

    /** Clears all caches and restarts all background threads at source region after region of the business is set to */
    public const ClearCacheSourceBeforeTravelStep = 1189;

    /** Manages cleaning of the database contents after a business was moved to a new datacenter. */
    public const DbTableClearTravelStep = 1338;

    /** Manages movement of the database data to the new region. */
    public const DbTableTravelStep = 1182;

    /** Manages cleaning of the Drive file storage after a business was moved to a new datacenter. */
    public const DriveCleanTravelStep = 1336;

    /** Manages travelling of the S3 file storage between the regions. */
    public const DriveTravelStep = 1191;

    /** Manages travelling of contents of [DbShardKeyDynamo](#/components/schemas/Core.Amazon.DynamoDb.DynamoDbAbstract) related to this business. */
    public const DynamoShardKeyTravelStep = 1192;

    /** Schedules reindexing of all transactions during travelling of a business between Amazon regions. */
    public const SearchReindexTravelStep = 1207;

    /** Manages clearing of business SOS files from source Amazon region. */
    public const SosCleanTravelStep = 1335;

    /** Manages travelling business SOS files between Amazon regions. */
    public const SosTravelStep = 1193;

    /** Manages travelling of tasks to the destination region. */
    public const TaskTravelStep = 1195;

    /** Manages [LoginPromotionTravelTask](#/components/schemas/Core.Task.CoreTaskNormal). */
    public const LoginPromotionTravelStep = 1200;

    /** Schedules [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask) tasks for all members of the business that is travelling to a new */
    public const LoginBirthdayTravelStep = 1197;

    /** Updates the `inboundRequestUrl` for the business to point to the correct regional URL. */
    public const UpdatePhoneResponseUrlTravelStep = 1411;

    /** Performs reconciliation of SmsStatSql of the travelled business. */
    public const SmsStatReconcileTravelStep = 1294;
}
