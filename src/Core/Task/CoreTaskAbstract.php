<?php

namespace WlSdk\Core\Task;

/**
 * Base class for one-time tasks.
 *
 * To create a one-time task, you need:
 *
 * Create class for a one-time task. This class should inherit
 * [CoreTaskLightweight](#/components/schemas/Core.Task.CoreTaskLightweight) or
 * [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal) and implement
 * [CoreTaskAbstract::run()](#/components/schemas/Core.Task.CoreTaskAbstract). This method should solve
 * the task. This class may contain additional fields that define a specific task.
 *
 * In the `run()` method you should call [CoreTaskAbstract::active()](#/components/schemas/Core.Task.CoreTaskAbstract)
 * periodically and check the
 * result. If this method returns `false`, you should stop the task.
 *
 * In successors of [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal) you may also add calls to
 * [CoreTaskNormal::log()](#/components/schemas/Core.Task.CoreTaskNormal)
 * to put information into the task log.
 *
 * Then, create an object of that class, and call `add()` method on it
 * ([CoreTaskNormal::add()](#/components/schemas/Core.Task.CoreTaskNormal)
 * or [CoreTaskLightweight::add()](#/components/schemas/Core.Task.CoreTaskLightweight)). This will serialize the object
 * and save it into the task queue.
 * On the date you specify, this object will be picked up from the task queue and
 * [CoreTaskAbstract::run()](#/components/schemas/Core.Task.CoreTaskAbstract) method will be executed in that object.
 *
 * In successors of [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal) you may use `@#64;timeout-state`
 * and
 * `&#64;timeout-system` tags in doc comments in implementation of
 * [CoreTaskAbstract::run()](#/components/schemas/Core.Task.CoreTaskAbstract)
 * to control behavior of the task. See `a_info` for description of their meaning.
 *
 * For this class, a dynamic property `$_dtu_region` can be created in
 * the [CoreTaskAbstract::addRegion()](#/components/schemas/Core.Task.CoreTaskAbstract) method.
 * Therefore, the `#[\AllowDynamicProperties]` attribute is used.
 *
 * Values:
 * - 1373 (`Thoth\PayProcessor\VoidNotFinishedTransactionTask`): Not finished transaction task.
 *
 *   WARNING (there is no need for this task for a system business,
 *   because for a system business there is no such scenario,
 *   when a transaction can be created and the business can exit the payment process)
 *
 *   This task should be scheduled for all started transactions,
 *   if the store is closed before the end of the purchase, the transaction will be incomplete and in the
 * [PayTransactionStatusSid::AUTHORIZE_ACTIVE](#/components/schemas/Thoth.WlPay.Transaction.Status.PayTransactionStatusSid)
 * status,
 *   for such transactions, we must do void.
 *   Now, we're only planning it for Stripe.
 *
 *   Recovery policy:
 *   * Safe to restart this task.
 *   * In case error repeats (only for Stripe):
 *   * * Check what kind of error and what state the transaction and payment intent are in, make a decision depending
 * on it.
 *   * * If Transaction status
 * [PayTransactionStatusSid::VOID](#/components/schemas/Thoth.WlPay.Transaction.Status.PayTransactionStatusSid) and
 * payment intent cancelled, nothing to do.
 *   * In case task finished with errors If the transaction status not
 * [PayTransactionStatusSid::VOID](#/components/schemas/Thoth.WlPay.Transaction.Status.PayTransactionStatusSid),
 *     and not
 * [PayTransactionStatusSid::AUTHORIZE_ACTIVE](#/components/schemas/Thoth.WlPay.Transaction.Status.PayTransactionStatusSid),
 * make a decision depending on status.
 *   * If Transaction status
 * [PayTransactionStatusSid::AUTHORIZE_ACTIVE](#/components/schemas/Thoth.WlPay.Transaction.Status.PayTransactionStatusSid),
 * fix the error if possible and restart the task.
 * - 1432 (`Thoth\PayProcessor\RepairFailedTransactionTask`): Task to repair failed transactions.
 *
 *   Scenario: payment processor returned error during purchase but actually money were withdrawn.
 *   Therefore, client account was credited, transaction is in failed state and purchase is completed successfully.
 *   This task will change such transaction status to success, and return money back to client account.
 * - 1282 (`Core\Webhook\WebhookEventSendTask`): Handles repeated sending of events that could not be sent from the
 * first try by [WebhookEventSendAsync](#/components/schemas/Core.Async.CoreAsyncDetachedAbstract).
 *
 *   Tries to send events to the given URL. If the sending attempt fails, the task will reschedule
 *   itself for execution after the specified time.
 *
 *   After reaching the limit on the number of attempts, the task will block the URL for further sending webhooks to
 * it.
 * - 1170 (`Core\Log\ReindexRegionTask`): Schedules specified logs for reindex.
 *
 *   This task is designed to schedule the reindex in a different Amazon region.
 *   This may be required during transfer of the logs between Amazon regions.
 * - 1836 (`Core\Task\TaskBodyAliasCleanTask`): This task cleans up alias entries in serialized task bodies in the task
 * queue.
 *   It processes queued tasks in batches and updates them if needed.
 *
 *   Without this, private properties that belong to alias class names are not unserialized correctly.
 *
 *   ## Failure Recovery Policy
 *
 *   This task is safe to restart at any time. It will continue from the last processed time, and accidental repeated
 *   processing won't change the result.
 * - 536 (`Core\Task\QueueRemoveTask`): Performs removal of all tasks with the certain prefix and empty date of queue.
 *
 *   Can be used to remove big count of old failed tasks.
 * - 1217 (`Core\Task\TaskRenameTask`): Upgrades task identifiers.
 *
 *   Task identifier is derived with
 *   [CoreTaskNormal::id()](#/components/schemas/Core.Task.CoreTaskNormal) and stored in the database after that.
 *   If the `id()` method is updated, identifiers in the database stay unchanged.
 *   This poses a possibility for that a duplicate task will be created instead of update of an existing task.
 *   This task upgrades identifiers in the database to match current logic of the `id()` method.
 *
 *   This task is intended for launching from the programmer's page.
 *
 *   After creating the task object, you must fill in the required property
 *   [TaskRenameTask::$s_like](#/components/schemas/Core.Task.CoreTaskNormal) is a template for searching the database
 * for task IDs via LIKE.
 *   And, if necessary, regular expressions:
 * [TaskRenameTask::$s_exclude](#/components/schemas/Core.Task.CoreTaskNormal) and
 * [TaskRenameTask::$s_include](#/components/schemas/Core.Task.CoreTaskNormal).
 *
 *   After that, run the [TaskRenameTask::show()](#/components/schemas/Core.Task.CoreTaskNormal) method, you can see
 * the final query to DB for
 *   finding tasks and select of 100 random task identifiers that match the request conditions.
 *
 *   Executing [TaskRenameTask::add()](#/components/schemas/Core.Task.CoreTaskNormal) will start the task.
 *
 *   Example usage: `namespace.Core/Task/doc/TaskRenameTaskExample.php`.
 * - 1659 (`Core\Task\ExampleConvertibleTask`): Example task that does nothing.
 *   It can be used to test how task threading works.
 * - 316 (`Core\Task\ExampleTask`): Example task that does nothing.
 *   It can be used to test how task threading works.
 * - 1880 (`Wl\Book\EventSessionTask`): Books event sessions if there are too many to book online.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 1884 (`Wl\Book\EventBlockTask`): Books event sessions if there are too many to book online.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 901 (`Wl\Event\MailTask`): Manages one-time sending of notification about operations with event sessions.
 * - 1533 (`Wl\Visit\VisitCountBusinessPrgTask`): Performs full reconciliation of VisitCountBusinessSql.
 *
 *   This task is intended for manual start from programmer pages.
 *   Just create a new object, and call `add()` on it.
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 *
 *   **Note:** this task is run as a part of travelling of a business to a new datacenter.
 *   [VisitCountBusinessTravelStep](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract) is responsible
 * for this.
 * - 860 (`Wl\Visit\VisitCountUpdatePrgTask`): Performs full reconciliation of RsScheduleCountSql.
 *
 *   This task is intended for manual start from programmer pages.
 *   Just create a new object, and call `add()` on it.
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 *
 *   **Note:** this task is run as a part of travelling of a business to a new datacenter.
 *   [VisitCountUpdateTravelStep](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract) is responsible for
 * this.
 * - 331 (`Wl\Visit\VisitNotifyTask`): Executes all listeners of VisitTaskEvent in background.
 *
 *   ## Failure Recovery Policy
 *
 *   If the task has failed, it must be restarted.
 * - 1130 (`Wl\Video\VideoUploadTask`): Task to upload video from download link to FitVID.
 *
 *   ## Failure recovery policy
 *
 *   This task can be restarted.
 * - 565 (`Wl\Location\LocationActiveLogInitTask`): Task for initialization
 * [LocationActiveLogShardTrxTask](#/components/schemas/Wl.Business.DbBusinessShardTrxTaskAbstract) transactions on
 * shards.
 * - 609 (`Wl\Location\LocationOptionShardTrxTask`): Manages filling of LocationOptionSql table.
 * - 607 (`Wl\Location\LocationActiveLogShardTrxTask`): Manages filling of LocationActiveLogSql table.
 * - 570 (`Wl\Location\LocationOptionInitTask`): Task for initialization
 * [LocationOptionShardTrxTask](#/components/schemas/Wl.Business.DbBusinessShardTrxTaskAbstract) transactions on
 * shards.
 * - 1661 (`Wl\Service\AddMailPatternLiveTask`): Performs adding mail pattern live keys for duplicated services
 * (classes, events and appointments).
 *
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to restart this task.
 * - 1209 (`Wl\ClassPass\BusinessNumberDestinationTravelTask`): Calls
 * [BusinessNumberStatisticValue::initialize()](#/components/schemas/Wl.StatisticValue.StatisticValueAbstract) in the
 * destination region.
 * - 1308 (`Wl\Collector\DebtInitTask`): Task designed to initialize debtors according to their current account
 * balance.
 *
 *   ### There should be ability to restart task in case of error that's why it should extend
 * [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal).
 * - 1280 (`Wl\Collector\DebtAddTask`): Adds specific client to the list of debtors according to next requirements:
 *   * Business should have active subscription at the time of task execution.
 *   * Client should have negative balance at the time of task execution.
 *     If client balance is positive it means that client had debt but paid it in time.
 *
 *   ### There should be ability to restart task in case of error that's why it should extend
 * [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal).
 * - 1654 (`Wl\Collector\DebtCloseTask`): Task triggered when debt fully closed.
 *
 *   ## Failure Recovery Policy
 *
 *   Task should always be restarted.
 * - 1653 (`Wl\Collector\DebtSentTask`): Task triggered when debt gathered by collector agency.
 *
 *   ## Failure Recovery Policy
 *
 *   Task should always be restarted.
 * - 1435 (`Wl\GymPass\AutomaticTrackingValidateTask`): Converts Attended status of a visit to Pending if business
 * policy is set to automatically mark clients as Attended
 *   and Gympass bookings is not validated successfully during policy run-time.
 *
 *   ## Failure recovery policy
 *
 *   * If this task has failed, it must be removed.
 * - 722 (`Wl\GymPass\GymPassSlotTask`): Slot synchronization task manager.
 *
 *   ## Failure recovery policy
 *
 *   * Safe to restart always.
 *   * If it fails after restart need to investigate.
 * - 723 (`Wl\GymPass\GymPassClassTask`): Class synchronization task manager.
 * - 548 (`Wl\Promotion\PackageEndNullTask`): Changes end date of all active packages and passes in the business so
 * item becomes as does not expired.
 * - 697 (`Wl\Virtual\VirtualRegistrantAddTask`): Adds registration to virtual visit.
 *
 *   ## Failure recovery policy
 *
 *   * Reason should be investigated.
 *   * It is safe to restart this task.
 * - 721 (`Wl\Zoom\ZoomUserReleaseTask`): This task designed to release zoom used to be used by business.
 *
 *   There are several cases when user should be released by this task:
 *   * User was taken during meeting creation but something went wrong and meeting was not created.
 *     In this case user will not be released after meeting end as meeting was not created.
 *   * User was taken and meeting was started but something went wrong, and we did not receive notification that
 * meeting finished.
 *
 *   ## Failure Recovery Policy
 *   * Always safe to restart task.
 * - 693 (`Wl\Isaac\IsaacDataGatherTask`): Transaction class, that gathers user data, sends it for analysis and saves
 * result data.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 * - 701 (`Wl\Isaac\IsaacVerificationTask`): Class, that checks the correctness of Isaac predictions for given business
 * and prediction date.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   If the current date is much later than prediction date + verification interval, it is still safe to restart,
 *   but the verification result may be pretty useless, so the task also may be deleted.
 * - 965 (`Wl\Isaac\IsaacHistoryGatherTask`): Class which runs history gathering for every business in the list.
 *   After gathering data for one business in the list it removes this business from the list
 *   and reschedules itself. This history data is needed to train Isaac.
 *
 *   This task does not have region check, because it gets list of business from the current region when it's
 * performed.
 * - 1979 (`Thoth\ExplorerSearch\ClassSession\ClassPeriodSessionTask`): Maintains denormalized upcoming class session
 * records for a given class period.
 *
 *   Responsibilities:
 *   - Remove past sessions beyond cleanup threshold.
 *   - Fill upcoming sessions within a configurable future window.
 *   - Schedule itself to continue maintenance based on future sessions.
 *
 *   Data notes:
 *   - Inserts rows into ClassPeriodSessionSql table.
 *   - `dtu_delete` is the UTC time when the session finished (start + duration) and is safe to delete.
 *
 *   ## Failure recovery policy
 *   Always safe to restart.
 * - 1870 (`Thoth\PayProcessor\Nuvei\NuveiUPOSyncTask`): Task to sync a user payment options on a merchant side.
 *
 *   Recovery policy:
 *   * Safe to restart this task.
 *   * If the task fails with `Too many UPO to delete` error their restarting has no sense. In this case need to
 * investigate
 *       the issue manually - it is not expected that we have large number of unsynchronized UPO on the Nuvei side.
 * - 947 (`Thoth\PayProcessor\ProcessorInterface\PayProcessorVoidTask`): Allows to postpone voiding of a transaction.
 *
 *   Intention of this task to get a pause after creation of an authorization transaction before it gets void.
 *   This is needed because some payment processors may fail to void a transaction that was created just now.
 * - 1721 (`Thoth\WlPay\Bank\PayBankAccountRemoveTask`): Task to remove a user payment option on a merchant side.
 *
 *   Recovery policy:
 *   * Safe to restart this task.
 * - 1706 (`Thoth\WlPay\Authorize\AuthorizeLocationTask`): Adds credit cards to merchants of all locations that are
 * linked with specified location.
 *
 *   Links between locations are defined by GroupSql.
 *
 *   ## Failure Recovery Policy
 *
 *   Ok to restart. If restarting leads to duplicate card added to user profile - it will be easily removed.
 * - 1518 (`Core\Amazon\CloudSearch\SearchReindexAllTask`): Queues all records of a search table for reindex.
 *
 *   Method regionId not defined because this task gathers information in the region where it's started
 *   and is not expected to move to another region.
 *
 *   ## Failure recovery policy:
 *   Safe to restart. The task will continue from the point where it stopped, and even if overlapping occurs the
 *   items(s) would just be re-queued for search reindexing again.
 * - 1722 (`Core\Amazon\CloudSearch\ReindexTotalTask`): Reindexes all data in all search tables.
 *
 *   This task is designed for running during creation of new stands.
 *   When a new stand is created we need to reindex all data in all search tables.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 526 (`Core\Passport\Login\ChangeSimpleTask`): Allows to update value of PassportLoginSql.`s_login_simple` after
 * changes in
 *   PASSPORT_LOGIN_SIMILAR.
 *
 *   This task should be scheduled by adding a one-time method to PassportLoginSql if default value of
 *   PASSPORT_LOGIN_SIMILAR is changed, or manually from programmer pages if instance-specific value is  changed.
 * - 1087 (`Core\Search\Postgres\PostgresDuplicateRemoveTask`): Deletes duplicate outdated search documents that
 * appeared due to changes in document distribution among instances
 *   and assumption that all instances would initially be set to rebalance.
 *
 *   Locates newer versions of documents on specified instance (which by new logic will only be on this instance from
 * now
 *   on), and attempts to delete outdated versions of documents on all other instances.
 * - 1605 (`Core\Db\Shard\DictionaryDeleteKeyTask`): Removes keys from local dictionaries that do not exist in the main
 * database.
 * - 545 (`Core\Db\Shard\DictionaryDeleteTask`): Deletes specified dictionary rows from a local dictionary of specified
 * database shard.
 *
 *   This task is not normally created. It is only created by
 *   DictionaryLogCron::cronDictionaryLogInteger() and
 *   DictionaryLogCron::cronDictionaryLogString()
 *   in a case deletion of a dictionary rows ended with an
 *   error. In this case this task is created in erroneous state. This allows to continue replication of newer changes
 * in
 *   dictionaries in a case a dictionary row can not be deleted due to some data in a shard.
 *
 *   It is assumed that primary keys in dictionaries are `auto_increment`. This means that if a row was removed,
 *   it can not be inserted back after that. This, in turn, means that it is safe to execute this task any time later
 *   because it should not be possible that a removed row be inserted again (while task for removal was in the removed
 *   state).
 * - 2128 (`Core\Jira\AI\FunctionalChangeAnalysisTask`): Task for analyzing changes in functionality based on closed
 * tasks.
 * - 2127 (`Core\Jira\AI\TextChangeAnalysisTask`): Task for processing changes in Jira issues and analyzing their
 * impact on functionality.
 * - 2134 (`Core\Jira\AI\JiraIssuesExporterTask`): Exports Jira issues to the database and schedules tasks for
 * processing them.
 *
 *   This class retrieves completed Jira issues from a specified project, inserts them into the `core_jira_ai_task`
 * table,
 *   and schedules tasks for further processing. It also includes a cleanup method to clear relevant database tables
 * before exporting new data.
 * - 2137 (`Core\Jira\AI\PineconeDeleteTask`): Task for deleting Pinecone vectors related to a specific function.
 * - 1824 (`Wl\Lead\Source\LeadSourceTransferTask`): Performs migration of lead source data from RsLeadSql to a new
 * LeadSourceUserSql table.
 *
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 *
 *   ## Failure recovery policy:
 *   Safe to restart.
 * - 1857 (`Wl\Member\Import\MemberReferredByTask`): Establishes a connection between users, when referred UID and
 * referrer foreign ID are known.
 *
 *   Task does not have validation of the region, because it's never scheduled for the future.
 *
 *   ## Failure Recovery Policy
 *   It is safe to restart this task.
 * - 2082 (`Wl\Report\Accumulation\AccumulationProcessTask`): Prepares one segment of the file.
 *
 *   This task does not check for the region because it cannot be scheduled for the future and is always performed
 * right away.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart - the task just generates a report.
 *   If the task is outdated, it will just exist - see checks regarding
 *   [AccumulationProcessTask::$dtu_construct](#/components/schemas/Core.Task.CoreTaskNormal).
 * - 1865 (`Wl\Business\Trial\TrialRemoveTask`): Removes non-activated trial for business account.
 *
 *   ##  `Intended usage:`
 *       Schedule this task right when business trial is signed-up. So if user will not activate trial
 *       before this task triggerred, trial will not be available anymore for activation.
 *   ## `Failure Recovery Policy:`
 *       Safe to restart always.
 * - 1858 (`Wl\Business\Trial\TrialExpireTask`): Performs actions on trial expiration.
 *
 *   ##  `Intended usage:`
 *       Schedule task on trial end date and re-schedule it if trial end date is changed.
 *   ## `Failure Recovery Policy:`
 *       Safe to restart always.
 * - 774 (`Wl\Business\Sms\SmsSendTask`): Task for send sms.
 *
 *    ## Failure Recovery Policy
 *
 *    If the task is older than 1 day - it must be removed.
 *    Otherwise, it is safe to restart.
 *
 *    Reasoning: there may be no important emails that can not be re-requested manually without restarting this task.
 * - 1876 (`Wl\Business\Promote\PromoteExplorerTask`): Turns ON explorer promotion for businesses.
 *
 *   ## Failure Recovery Policy
 *
 *   Can be restarted manually or automatically.
 * - 1069 (`Wl\Business\Partner\PartnerPayoutTask`): Adds payout to partner business account.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 531 (`Wl\Business\Edit\DeleteIntegrationSettingsTask`): Task class for removing integration options with "Reserve
 * with Google" and "Class Pass" in the franchisee location.
 * - 667 (`Wl\Business\Merchant\PayUpdateTask`): If a merchant processor has been removed (and a new one has not ben
 * set instead),
 *   the classes should be updated to receive payment only in person.
 * - 1175 (`Wl\Business\RegionTravel\TaskTravelTask`): Moves tasks between Amazon regions.
 *
 *   Normally, the tasks are moved automatically when
 *   [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract) returns ID of a region that
 * differs from
 *   [AmazonRegionSid::currentId()](#/components/schemas/Core.Amazon.Region.AmazonRegionSid).
 *
 *   There are issues come if we only rely on
 * [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract):
 *   - if a task is re-scheduled in the target region, this effectively creates a new task.
 *     This will lead to that the task will be executed twice.
 *   - if contents of a task is updated in the target region, this effectively creates a new ask.
 *     This will lead to that both tasks: old and new will be executed.
 *   - if a task is deleted in the target region, this does not influence source region.
 *     This leads to that the task is not actually deleted.
 *   - business data can not be deleted from the source region after the travelling.
 *     If the data (like visits) is deleted,
 *     [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract) will not be able to identify
 * region ID.
 *     This leads to loss of the task.
 *
 *   To overcome this, the affected tasks are searched and moved as soon as possible.
 *
 *   Restarting policy: it is entirely safe to restart this task.
 *   It will continue from the point where it has stopped.
 * - 1132 (`Wl\Business\RegionTravel\DriveTravelTask`): Moves data from S3 file storage between source and target
 * regions for the specified business.
 * - 1339 (`Wl\Business\RegionTravel\DbTableClearTravelTask`): Deletes business data from source datacenter.
 *
 *   Restarting policy: it is safe to restart this task if it has failed.
 *   It will restart from zero, but it is expected the tables that are already cleared will not take long to clear
 * again.
 * - 1120 (`Wl\Business\RegionTravel\DbTableTravelTask`): Moves data from tables in the databases between source and
 * target regions for the specified business.
 *
 *   <b>Strongly not recommended</b> removing and creating a new task to prevent loss of
 *     DbTableTravelTask::$a_complete list of completed tables.
 *
 *   It is safe to restart this task if it has failed. It will continue from the point where it has stopped.
 * - 1337 (`Wl\Business\RegionTravel\DriveCleanTravelTask`): Deletes files from Drive in the source datacenter after a
 * business was moved to a different datacenter.
 *
 *   Restarting policy: safe to restart at any time.
 *   After the restart, this task will continue deleting what was not deleted yet.
 *   Although it will double-check all rules.
 * - 1171 (`Wl\Business\RegionTravel\DynamoShardKeyTravelTask`): Moves contents of
 * [DbShardKeyDynamo](#/components/schemas/Core.Amazon.DynamoDb.DynamoDbAbstract) related to this business.
 * - 1334 (`Wl\Business\RegionTravel\SosCleanTravelTask`): Clears business SOS files from source Amazon region.
 *
 *   Restarting policy: safe to restart this task at any time.
 *     It will continue from the point where it has stopped.
 * - 1136 (`Wl\Business\RegionTravel\SosTravelTask`): Moves business SOS files between Amazon regions.
 *
 *   Restarting policy: safe to restart this task at any time.
 *     It will continue from the point where it has stopped.
 * - 1184 (`Wl\Business\RegionTravel\TravelStatusCheckTask`): This task is intended for periodical check of a
 * background task status.
 *
 *   It is created when a call to
 * [TravelStepAbstract::start()](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract) returns
 *   [TravelStepStatusSid::ACTIVE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid).
 *
 *   It calls [TravelStepAbstract::statusDerive()](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract).
 *   If the status differs from the current status, the step gets transitioned to the new status.
 *   If the status is still
 * [TravelStepStatusSid::ACTIVE](#/components/schemas/Wl.Business.RegionTravel.TravelStepStatusSid), this task is just
 * re-scheduled in the future.
 * - 1514 (`Wl\Business\RegionTravel\DriveDataAnalyzeTask`): Checks all references for compliance with the rules in the
 * constants DriveData::CORE_DRIVE_LINK_DATA and
 *   DriveDataAnalyze::CHECK_RULE.
 *
 *   Launched manually from the programmer page.
 *   After completing the task, you need to check the [DriveDataAnalyzeLog](#/components/schemas/Core.Log.CoreLog) log.
 *   Ideally, there should be no entries in the [DriveDataAnalyzeLog](#/components/schemas/Core.Log.CoreLog) log.
 *
 *   ## Failure Recovery Policy
 *
 *   This task must be restarted.
 * - 1185 (`Wl\Business\RegionTravel\ClearCacheTravelTask`): Clears all caches.
 *   Clears APC at all web servers.
 *   Restarts all task threads.
 *   Reloads all asynchronous workers.
 * - 1701 (`Wl\Business\RegionTravel\MailChimpWebhookInitTravelTask`): Task to initializes MailChimp webhook in new
 * region.
 * - 1703 (`Wl\Business\RegionTravel\MailChimpWebhookRemoveTravelTask`): Task to remove MailChimp webhook in old
 * region.
 * - 1639 (`Wl\Business\RegionTravel\DbTravelCheckTask`): Performs full check of the given businesses, whether they can
 * be transferred to the given region or not.
 *   Adds results to the [RegionTravelLog](#/components/schemas/Core.Log.CoreLog).
 * - 1208 (`Wl\Business\RegionTravel\SearchReindexTravelTask`): Schedules reindexing of all indexing tables linked to
 * the business that is travelling between Amazon regions.
 * - 1186 (`Wl\Business\RegionTravel\TravelStartTask`): A task to start execution of a travelling step.
 * - 1179 (`Wl\Business\RegionTravel\TravelTransitionTask`): A task to transition a step to a new status.
 *
 *   Normally, steps are transitioned by calling
 *   [TravelStepAbstract::transition()](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract) directly.
 *   But this approach is only available for the code that is executed at source region.
 *
 *   In a case the transition should be performed by a code that is executed at destination region,
 *   that code must schedule this task in the source region.
 * - 1027 (`Wl\Business\Sync\SyncPopAllTask`): This task pops entire contents of all synchronized tables.
 *
 *   This task is designed for a one-time manual start, when a new region is created.
 *   It allows filling in of all synchronized tables with initial data.
 *
 *   Call [SyncPopAllTask::scheduleAll()](#/components/schemas/Core.Task.CoreTaskNormal) from programmer pages in order
 * to schedule transfer of
 *   all synchronized tables.
 *
 *   **Be careful with this task!**
 *   This task replaces all the data in a table which name is specified in
 *   [SyncPopAllTask::$id_table](#/components/schemas/Core.Task.CoreTaskNormal) with data retrieved from master region.
 *   This permanently overwrites all the data from the local regional database.
 *
 *   See `namespace.Wl/Business/Sync/doc/region-sync-intro.md` for introduction to cross-regional synchronization.
 * - 1860 (`Wl\Mail\Domain\DomainRemoveTask`): Task to remove a domain from the business settings and Amazon SES.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 1835 (`Wl\Mail\Domain\DomainVerifyCheckStatusTask`): Task to check the status of domain verification in Amazon
 * SES.
 *
 *   ## Failure recovery policy:
 *   Safe to restart.
 * - 1753 (`Wl\Mail\Multiple\MigrateExpireMailTask`): Adds tasks for sending emails about membership expiration.
 *
 *   ## Failure Recovery Policy
 *
 *   In a case of failure, this task must be restarted.
 * - 1505 (`Wl\Login\Mail\MailTask`): Provides sending of emails via Automated Marketing -> Send campaign.
 * - 1918 (`Wl\Login\Member\MemberTypeGlobalTask`): Reinitialize member type for all users in the franchise when
 * setting how to calculate member type is changed.
 *
 *   ## Failure Recovery Policy
 *
 *   This task updates type of the user according to other data.
 *   Safe to restart.
 * - 1356 (`Wl\Login\Search\UidReindexTask`): Re-indexes user by user UID key.
 *
 *   Method regionId not defined because there are potentially multiple users related to multiple businesses.
 * - 999 (`Wl\Login\Search\LoginVisitReindexTask`): Re-indexes user by him identifications.
 *
 *   Method regionId not defined because users are potentially associated to multiple businesses.
 * - 1199 (`Wl\Login\Promotion\LoginPromotionTravelTask`): Performs initializations related to purchased promotions
 * needed to complete travelling of a business between
 *   Amazon regions.
 *
 *   This task is run as a part of
 *   [LoginPromotionTravelStep](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract).
 * - 787 (`Wl\Login\Promotion\ApplyInitTask`): Performs data initialization for visits paid with login promotions in
 * ApplySql shard table.
 *   Data is retrieved and inserted for all visits paid with login promotions.
 *
 *   This task processes data by blocks, defined with
 * [ApplyInitTask::VISIT_COUNT](#/components/schemas/Core.Task.CoreTaskNormal), then re-schedules itself, and so on.
 * - 703 (`Wl\Login\Agree\LoginAgreeSignatureTask`): Saving of signature.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to restart this task.
 * - 714 (`Wl\Login\Retention\LoginRetentionMailRescheduleTask`): Reschedules the sending of the
 * [RsMailSid::LOGIN_BACK](#/components/schemas/RsMailSid) or
 * [RsMailSid::LOGIN_RETENTION](#/components/schemas/RsMailSid) email.
 * - 1198 (`Wl\Login\Birthday\InitializeBusinessTask`): Schedules
 * [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask) and
 * [Task](#/components/schemas/Wl.Login.Anniversary.Task) tasks for all members of specified business.
 *
 *   This task is normally run as a part of
 *   [LoginBirthdayTravelStep](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract),
 *   but it can also be scheduled manually from programmer pages as a standalone task.
 * - 2045 (`Wl\Login\Birthday\MailTask`): Sends [RsMailSid::LOGIN_BIRTHDAY](#/components/schemas/RsMailSid) email.
 *
 *   Sends "Happy Birthday" email to user [MailTask::$uid](#/components/schemas/Core.Task.CoreTaskNormal) from business
 * [MailTask::$k_business](#/components/schemas/Core.Task.CoreTaskNormal).
 *   This task should be planned for one day before sending in
 * [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask).
 *
 *   Task types:
 *   * [MailTask](#/components/schemas/Core.Task.CoreTaskNormal).19.85536 - Mail should be send to user with uid = 19
 * from business
 *   with business ID = 85536.
 *   * [MailTask](#/components/schemas/Core.Task.CoreTaskNormal).19.wl - Mail should be send to user with uid = 19 from
 *   'Wellness Living' business.
 *
 *   This task plans in from [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask) using conversion to local
 * business time. Because when on our server
 *   date = 15.02.16 00:00:10 in business, located in Canada or USA local time - 14.02.16 20:00:10 or etc. So client in
 *   North America should not get an email earlier that his birthday.
 *
 *   This task plans in from [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask) using mt_rand() and can be
 * executed in first 10 hours in local
 *   business time. This random time is added to optimize.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 *
 *   [MailTask::run()](#/components/schemas/Core.Task.CoreTaskNormal) starts with a call to
 * [MailTask::_check()](#/components/schemas/Core.Task.CoreTaskNormal) which leads to silent exit if user does not
 *   have birthday today.
 * - 902 (`Wl\Login\Cancel\EarlyMailTask`): Provides sending of mail "Class Cancelled By Client - Early".
 * - 903 (`Wl\Login\Cancel\LateMailTask`): Provides sending of mail "Class Cancelled By Client - Early".
 * - 1664 (`Wl\Login\Logo\MigrateToBusinessTask`): After ability to add image to the certain business was added, old
 * images were left in the system-wide business.
 *   This was necessary to support backward compatibility. Otherwise - all old images would disappear. However, this
 * led
 *   to situation when old images added to new user's businesses. And the main concern initially was to stop migration
 *   of business data between businesses. To solve the problem we need this task. It will get all system-wide images
 * and
 *   copy them to business-wide images. If client is a member of 3 different businesses, we will have three copies of
 * the
 *   same image uploaded to each business.
 *
 *   We will start from user with key 1 and will process
 * [MigrateToBusinessTask::PACK_SIZE](#/components/schemas/Core.Task.CoreTaskNormal) every run of the task.
 *   Once all users are processed, the task will be completed.
 *   Otherwise - it will reschedule itself to process next pack of users.
 * - 1488 (`Wl\Notification\Schedule\MailScheduleTask`): Sends scheduled email.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 * - 1502 (`Wl\Notification\Schedule\SmsScheduleTask`): Sends scheduled sms.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 * - 1492 (`Wl\Notification\Schedule\PushScheduleTask`): Sends scheduled push notification.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 * - 1544 (`Wl\Notification\Send\NotificationSendTask`): Performs sending of the notification, which was requested in
 * [NotificationSendApi](/Wl/Notification/Send/NotificationSend.json) with a delayed start.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 1415 (`Wl\Book\Promote\BlockEventBookPromoteTask`): Promotes clients from block event wait list to the active list
 * after some other clients cancelled the reservation.
 *
 *   ## Failure Recovery Policy
 *
 *   If this task has failed, it must be removed.
 * - 325 (`Wl\Book\Promote\PromoteExpireTask`): Checks the confirmation of the promotes from the wait list to the
 * active list
 * - 324 (`Wl\Book\Promote\BookPromoteTask`): Promotes clients from wait list to the active list after some other
 * clients cancelled the reservation.
 *
 *   ## Failure Recovery Policy
 *
 *   If this task has failed, it must be removed.
 * - 1159 (`Wl\Book\Multiple\AppointmentStaffRecurringTask`): Performs multiple booking, when staff member books
 * recurring appointment for client.
 *
 *   ## Failure Recovery Policy
 *
 *   This task should be deleted. It kind of async task. Actor expects result right away.
 *   If they see that booking is not completed in 10-15 minutes, they often perform some manual changes\solutions.
 *   In this case task can book not expected visits. Better to leave it for staff and manual work.
 * - 1249 (`Wl\Book\Multiple\AppointmentClientRecurringModelTask`): Performs multiple booking, when client books a
 * recurring appointment.
 *
 *   ## Failure Recovery Policy
 *
 *   It is always safe to restart this task.
 * - 1160 (`Wl\Book\Multiple\AppointmentClientRecurringTask`): Performs multiple booking, when client books a recurring
 * appointment.
 * - 1154 (`Wl\Book\Multiple\ClassMultipleClientsTask`): Performs multiple booking, when staff member books a class for
 * multiple clients.
 * - 1157 (`Wl\Book\Multiple\ClassRecurringTask`): Performs recurring booking, when staff books a class for a client.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 1156 (`Wl\Book\Multiple\MultipleBookingTestTask`): Special testing task to test multiple booking functionality
 * without actual booking.
 * - 632 (`Wl\Book\Repeat\ReservationRenewalTask`): Manages reservation renewal on one month.
 * - 720 (`Wl\Book\Visit\MailRescheduleTask`): Email can be sent after every class visit to ask the client for a review
 * of the class.
 *   Reschedules the sending of "Class Review Request" emails.
 * - 1663 (`Wl\Classes\Period\ClassesPeriodUnpublishOnTask`): A Task that gets called when class period is unpublished.
 *
 *   ## Failure recovery policy
 *   It is always safe to restart this task.
 * - 1655 (`Wl\Classes\Period\ClassesPeriodPublishOnTask`): A Task that gets called when class period is published.
 *
 *   ## Failure recovery policy
 *   It is always safe to restart this task.
 * - 1847 (`Wl\Import\Custom\CustomImportFileTask`): Task to delete custom import file.
 * - 310 (`Wl\Import\Attendance\VisitCreateTask`): Creates visits during class attendance import.
 * - 314 (`Wl\Import\Attendance\CurvesVisitCreateTask`): Creates visits during Curves workout and appointment import.
 *
 *   Method [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract) is not required. This is
 * one-time import task.
 *     We are not going to move businesses, while import is in progress.
 * - 620 (`Wl\Staff\Attendance\AttendanceListSubscribeTask`): This task changed the way staff receives class attendance
 * emails. It should be triggered manually only once,
 *   afterwards it will perform operations in a batch and reschedule itself until all the operations are complete.
 *   It creates multiple tasks [AttendanceListMailTask](#/components/schemas/Core.Task.CoreTaskNormal).
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 * - 619 (`Wl\Staff\Attendance\AttendanceListMailTask`): A recurrent task for sending class attendance lists.
 *   The task is created separately for each staff member who is supposed to receive these mails.
 *   The task reschedules itself each time after running except if the user does not have the required privileges
 * anymore.
 * - 550 (`Wl\Visit\First\FirstVisitProcessVisitTask`): Handles new and changed visits to figure out if they're
 * considered "first visit" in any filter combination.
 *
 *   ## Failure Recovery Policy
 *   It is safe to restart this task.
 * - 942 (`Wl\Visit\First\FirstVisitUserRefreshTask`): Refreshes first visits index for a list of users within a
 * business.
 * - 943 (`Wl\Visit\First\FirstVisitClassRefreshTask`): Refreshes first visits for all users that had a first visit in
 * a class.
 * - 557 (`Wl\Visit\First\FirstVisitProcessUserTask`): Fully updates first visits list of a user, deleting outdated or
 * incorrect records and adding any missing ones.
 *
 *   ## Failure Recovery Policy
 *   It is safe to restart this task.
 * - 563 (`Wl\Visit\First\FirstVisitAllSchedulerTask`): Schedules workers
 * ([FirstVisitAllWorkerTask](#/components/schemas/Core.Task.CoreTaskNormal)) for initial first visit table fill.
 *   Each worker represents a processing thread and only handles a block of users. Once the block is fully processed,
 *   new thread with the same ID is scheduled with a new block of users.
 * - 562 (`Wl\Visit\First\FirstVisitAllWorkerTask`): Worker thread for initial filling of first visits table. Managed
 * by [FirstVisitAllSchedulerTask](#/components/schemas/Core.Task.CoreTaskNormal).
 *   Each worker represents a processing thread and only handles a block of users. Once the block is fully processed,
 *   new thread with the same ID is scheduled with a new block of users.
 * - 715 (`Wl\Visit\Campaign\VisitCampaignRescheduleTask`): Reschedules the sending of the
 * [RsMailSid::VISIT_CAMPAIGN](#/components/schemas/RsMailSid) email.
 * - 307 (`Wl\Purchase\Promotion\IntroductoryMailTask`): Provides sending of mail "Thanks for purchasing an
 * introductory offer".
 * - 706 (`Wl\Purchase\Promotion\IntroductoryMailRescheduleTask`): Allows rescheduling of "Thanks for purchasing an
 * introductory offer" emails.
 * - 1911 (`Wl\Location\TimeZone\TimeZoneLocationActualizeTask`): Actualizes timezones for locations based on their
 * coordinates using Google Maps API.
 * - 606 (`Wl\Location\Customer\LocationCustomerIndexInitTask`): Task for initialization
 * LocationCustomerShardTransaction transactions on shards.
 * - 578 (`Wl\Location\Customer\LocationCustomerLogInitTask`): Task for initialization
 * [LocationCustomerLogShardTrxTask](#/components/schemas/Wl.Business.DbBusinessShardTrxTaskAbstract) transactions on
 * shards.
 * - 611 (`Wl\Location\Customer\LocationCustomerIndexShardTrxTask`): Manages filling of LocationCustomerIndexSql table.
 * - 610 (`Wl\Location\Customer\LocationCustomerLogShardTrxTask`): Manages filling of LocationCustomerLogSql table.
 * - 617 (`Wl\Location\Customer\LocationCustomerIndexChangeTask`): Task for change location customer index.
 * - 1747 (`Wl\Franchise\Split\SplitProcessTask`): Manages migration process of a single location to a separate
 * business due to split of a multi-location franchisor.
 * - 1811 (`Wl\Franchise\Split\SplitCompleteTask`): Manages actions after franchise split completed..
 * - 1621 (`Wl\Service\Event\EventCancelTask`): Cancels a service.
 *
 *   Called from Event::cancel() to perform the cancellation asynchronously.
 *
 *   ## Failure Recovery Policy
 *
 *   This task should be deleted. It is meant to perform a user action asynchronously. The user expects a result within
 *   a few minutes. If they see that cancellation has not happened after 10-15 minutes, they assume it will not happen
 * and
 *   may have come up with another solution in the meantime. Once any errors have been fixed, it's best to let the user
 *   start the cancellation again manually from the interface.
 * - 568 (`Wl\Google\Booking\BookingPatchTask`): Updates a booking.
 * - 1346 (`Wl\Google\Booking\FeedUploaderTask`): This task gathers and uploads complete feed of specified type.
 *
 *   Purpose of this task is to gather data from all datacenters in a single sharded feeds.
 *   One shard = one datacenter.
 *   Data within one datacenter is not sharded.
 *
 *   **Restarting policy**
 *
 *   It is safe to restart this task.
 *   The task just collects all current data and uploads it to Google.
 *
 *   Also, it is safe to remove this task.
 *   Tasks of this class are re-created by FeedCron::cronFeedUpload() two times per day.
 * - 1166 (`Wl\Google\Calendar\GoogleCalendarEventTwoWayTask`): Performs actions to synchronize events from Google
 * calendar to WL.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 929 (`Wl\Google\Calendar\GoogleCalendarEventPushTask`): Pushes an event to the Google Calendar.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 915 (`Wl\Google\Calendar\GoogleCalendarInsertTask`): Creates new calendar on Google.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 1165 (`Wl\Google\Calendar\GoogleCalendarWatchTask`): Executes a request to watch event changes in the user's
 * calendar.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 1412 (`Wl\Sms\Phone\UpdatePhoneResponseUrlTravelTask`): Updates the `inboundRequestUrl` for the business to point
 * to the correct regional URL.
 *
 *   **Note:** this task is run as a part of travelling of a business to a new datacenter.
 *   [UpdatePhoneResponseUrlTravelStep](#/components/schemas/Wl.Business.RegionTravel.TravelStepAbstract) is
 * responsible for this.
 * - 1293 (`Wl\Sms\Stat\SmsStatReconcileTask`): Recalculation of statistics on sent and received SMS for business.
 *
 *   See `namespace.Wl/Sms/Stat/doc/SmsStatReconcileTaskExample.php` for details.
 * - 678 (`Wl\Promotion\Pay\PromotionPayPauseTask`): The task is used to perform action with promotion payment pause
 * periods for login promotion list.
 * - 1056 (`Wl\Promotion\Pay\PromotionPayRenewTask`): Executes a single
 * [RsPromotionPayScheduleSid::FUTURE](#/components/schemas/RsPromotionPayScheduleSid) payment.
 *
 *   Tasks of this class are scheduled with
 * [PromotionPayRenewTask::schedule()](#/components/schemas/Core.Task.CoreTaskNormal) which is always
 *   called from within RsPromotionPaySchedule::updateTrx().
 *
 *   This class is not responsible for membership renewals.
 *   The renewals are performed with [RsPromotionPayRenewTask](#/components/schemas/RsPromotionPayRenewTask).
 *
 *   Restarting policy: it is safe to restart this task at any point in time under any conditions.
 *
 *   This task searches for due payments, and tries to withdraw user's card.
 *   In a case of success it marks the payment as successful, and sends a thankful e-mail to the user.
 *   In a case of an error, it marks the payment as erroneous, and sends an erroneous e-mail to the user.
 *
 *   `namespace.Core/All/doc/bugs/2021/05/111300-deadlocks-with-rs_promotion_pay_schedule.md`
 * - 1057 (`Wl\Promotion\Pay\PromotionPayRenewAllTask`): Schedules
 * [PromotionPayRenewTask](#/components/schemas/Core.Task.CoreTaskNormal) for all memberships that have future payments
 * in
 *   RsPromotionPayScheduleSql.
 *
 *   Additionally, this task fills in
 *   PayScheduleCleanupSql.
 *
 *   This task is intended for manual start from programmer pages.
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 * - 712 (`Wl\Promotion\Purchase\MailRescheduleTask`): Reschedules the sending of "Promotion purchase"
 * [RsMailSid::PROMOTION_PURCHASE](#/components/schemas/RsMailSid) emails.
 * - 1724 (`Wl\Promotion\Membership\MembershipExpireMailTask`): Sends [RsMailSid::PROMOTION_MEMBERSHIP_EXPIRE "Pass or
 * Membership is Expiring"](#/components/schemas/RsMailSid) emails.
 *   Restarting policy: It is safe to restart within 24 hours; otherwise, the email will no longer be relevant.
 * - 711 (`Wl\Promotion\Membership\MembershipMailRescheduleTask`): Reschedules the sending of
 * [RsMailSid::PROMOTION_MEMBERSHIP_EXPIRE "Pass or Membership is Expiring"](#/components/schemas/RsMailSid) and
 *   [RsMailSid::PROMOTION_MEMBERSHIP_RENEW "Upcoming Pass or Membership Renewal"](#/components/schemas/RsMailSid)
 * emails.
 * - 1431 (`Wl\Quiz\Login\QuizRemindTask`): Manages one-time sending of notification to remind about incomplete forms.
 * - 335 (`Wl\Reward\Score\RewardScoreAddTask`): Manages addition of rewards.
 *
 *   ## Failure Recovery Policy
 *
 *   If the task has failed due to an exception, it is safe to restart it.
 *   If the task has failed due to PHP errors without exception, the task should be removed.
 *
 *   Because in a case of exception, transaction is rolled back and an individual task for the failed reword is
 * created.
 *   And, the initial task does not fail so that if the reward was added successfully, it will not be present in that
 * new
 *   task.
 * - 1406 (`Wl\DoorAccess\Brivo\ClientDataSyncTask`): Synchronized User's profile data with Brivo.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to always restart this task.
 *   BUT, possible case when business stopped\finished his collaboration with Brivo. Some tasks could be scheduled,
 *   but after all attempts of reschedule will be thrown an exception `Not valid the API key`. When it happened need
 *   to ask developer\product what to do.
 * - 1404 (`Wl\DoorAccess\Brivo\ClientIdSyncTask`): Synchronized User's member ID with Brivo.
 *
 *    If during sync there is a user without a member ID, for example it was reset in the profile,
 *      then this user will not be sync with the Brivo according to the Member ID field.
 *      In this case the task will be aborted with [DebugLog](#/components/schemas/Core.Log.CoreLog) entry.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to always restart this task.
 * - 1402 (`Wl\DoorAccess\Brivo\GroupClientUpdateTask`): Send a client of member group to corresponding group on Brivo
 * or remove from it if a client is not a member of a group anymore.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to always restart this task.
 * - 1401 (`Wl\DoorAccess\Brivo\GroupClientsSyncTask`): Send all clients from a member group to corresponding group on
 * Brivo.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to always restart this task.
 * - 1403 (`Wl\DoorAccess\Brivo\GroupUpdateTask`): Updates Group on Brivo into required state (active/inactive).
 *   Schedules [GroupClientsSyncTask](#/components/schemas/Core.Task.CoreTaskNormal) to sync group members.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to always restart this task.
 * - 556 (`Wl\Integration\Curves\LoginPromotionTask`): Task to send client's membership information into community.
 * - 729 (`Wl\Postcard\Campaign\AddressVerifyTask`): A task to send addresses to external API for verification.
 * - 1423 (`Wl\Alert\Manual\ManualAlertSendTask`): Send manual alerts to all staffs in all or specified businesses.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 1409 (`Wl\Microsoft\Calendar\MicrosoftCalendarEventTwoWayTask`): Performs actions to synchronize events from
 * Microsoft calendar to WL.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 1382 (`Wl\Microsoft\Calendar\MicrosoftCalendarEventPushTask`): Pushes an event to the Microsoft Calendar.
 * - 1383 (`Wl\Microsoft\Calendar\MicrosoftCalendarInsertTask`): Creates new calendar on Microsoft.
 * - 1408 (`Wl\Microsoft\Calendar\MicrosoftCalendarWatchTask`): Executes a request to watch event changes in the user's
 * calendar.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 1928 (`Wl\Planhat\Company\PlanhatCompanySyncTask`): Synchronizes business with `Planhat`.
 * - 1927 (`Wl\Planhat\Enduser\PlanhatEnduserSyncTask`): Synchronizes enduser with `Planhat`.
 * - 2169 (`Wl\Planhat\Analytics\PlanhatAnalyticsTask`): Synchronizes analytics with `Planhat`.
 *
 *   ## Failure Recovery Policy
 *
 *   Ok to restart.
 * - 917 (`Wl\Calendar\Event\CalendarEventWriteListPrepareTask`): Prepares events for further synchronization.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   The task has all necessary checks not to duplicate actions.
 * - 713 (`Wl\Product\Purchase\MailRescheduleTask`): Reschedules the sending of "Product purchase"
 * [RsMailSid::PRODUCT_PURCHASE](#/components/schemas/RsMailSid) emails.
 * - 1443 (`Wl\Search\Template\DeleteInvalidTemplateTask`): Validates search template and delete if invalid.
 *
 *   Restarting policy: safe to restart this task at any time.
 * - 312 (`Wl\Eml\Mailchimp\EmlMailchimpFieldRemoveTask`): Removes a field from a MailChimp account.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to restart this task because deletion operation is idempotent.
 * - 318 (`Wl\Eml\ConstantContact\CcSynchronizeTask`): Adds user subscription.
 *
 *   ## Failure Recovery Policy
 *   Safe to restart.
 * - 1883 (`Thoth\PayProcessor\Nuvei\Terminal\NuveiTerminalSyncTask`): Task to sync a Nuvei terminals.
 *
 *    Recovery policy:
 *    * Safe to restart this task.
 * - 1677 (`Thoth\PayProcessor\Nuvei\DMN\NuveiEventTask`): Task to processes the Nuvei's Web Hook events.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to restart this task.
 * - 1353 (`Thoth\PayProcessor\StripeCom\Terminal\StripeTerminalSynchronizeTask`): Terminal synchronization task.
 *
 *   We need to keep Stripe readers up-to-date with WL merchant readers.
 *   Updates are needed if add or update the readers on the stripe dashboard.
 *
 *   Restarting policy:
 *   * The task is executed once a day and reschedules itself for the next day.
 *
 *   * In the case when the reader belongs to another business, merchant or location, you need to decide what to do
 *     with this reader.
 *
 *   * In case of a `stripe.com` RsPayException error and the reason for its occurrence is not obvious, you
 *     should contact with Stripe support.
 * - 1221 (`Thoth\PayProcessor\StripeCom\Event\StripeEventTask`): Processes the event.
 * - 1241 (`Thoth\PayProcessor\StripeCom\Onboarding\AccountUpdatedTask`): This task checks status of the connected
 * account in Stripe, and transitions its status in
 *   StripeMerchantInfoSql accordingly.
 *
 *   The reason to perform such updates in the task (and not in the event handlers) is prevention of race condition
 *   which may occur under the following example cases:
 *   * multiple events arrived such that in one event the account is active and in another it is inactive.
 *     Stripe does not guarantee sequence of the events. Also, events are processed in tasks.
 *     Our task processing does not guarantee order of tasks.
 *     This may lead to that the final status may become random based on which task was executed last.
 *   * a task that handles inactive account has failed.
 *     After that the account was made active.
 *     After that the failed task was restarted manually on programmer pages.
 *     This leads to transition to inactive state.
 *
 *   To prevent the race condition, if there is a possibility of changes in account status,
 *   this task is scheduled which performs the transition based on the latest data retrieved from Stripe.
 *
 *   ## Failure Recovery Policy
 *
 *   It is always safe to restart this task.
 * - 1345 (`Thoth\PayProcessor\StripeCom\Charge\UpdatePaymentMetadataTask`): Updates metadata on payment to connected
 * accounts by metadata of source payment.
 *
 *   Restarting policy: safe to restart this task at any time.
 *     It will continue from the point where it has stopped.
 * - 1344 (`Thoth\PayProcessor\StripeCom\Location\StripeLocationSynchronizeTask`): Stripe locations synchronization
 * task.
 *
 *   We need to keep Stripe locations up-to-date with WL merchant locations.
 *   Updates are needed whenever location is added or removed or its address is changed.
 *   Also, whenever location is assigned to other merchant, e.g. merchant configured for specific location is removed
 * and
 *   location is assigned to business-wide merchant.
 *
 *   Restarting policy: safe to restart this task at any time.
 *   * In case of an `location-metadata-incomplete` assertion error you need to decide what to do with a location whose
 *     metadata is not complete, followed by restarting the task:
 *   * * If there are no terminals attached to this Stripe location, then it can be deleted.
 *       New location will be created after task run.
 *       To get a list of terminals associated with a location, you can use the request
 *       StripeReaderListRequest.
 *   * * If the `k_business` or `k_business_merchant` metadata key is missing, it can be restored with a location
 * metadata
 *       update request StripeLocationUpdateRequest.
 *   * In case of a `stripe.com` RsPayException error and the reason for its occurrence is not obvious, you
 *     should contact with Stripe support.
 * - 1609 (`Thoth\WlPay\Transaction\Batch\BatchDateTask`): Same as parent task, but scheduled manually from PRG.
 * - 1273 (`Thoth\WlPay\Transaction\Batch\BatchTask`): Gathers payments without batch number for the past period and
 * generates batch number.
 *
 *   Deletion policy: the task can be deleted and then rescheduled
 * [BatchTask::schedule()](#/components/schemas/Core.Task.CoreTaskNormal).
 *   Restarting policy: safe to restart.
 *   Known errors:
 *   * ApiModelException "Resolving timed out after 10001 milliseconds".
 *     Happens when models DirectConnectModelAbstract requests exceed time limit.
 *   * ApiModelException "Failed to retrieve card transaction details".
 *     Happens during execution DirectConnectCardModel request.
 *     Commonly this error require to contact with merchant support.
 *     Known reasons:
 *       * Invalid `s_gateway`.
 *       * Invalid date time in `dtu_begin` or
 *         `dtu_end`.
 * - 1675 (`Core\Passport\User\Email\LoginMailUnifyTask`): Performs unifying `s_login`, `s_login_simple` with `s_mail`
 * in PassportLoginSql table.
 *     There was a bug when `s_login`, `s_login_simple` contains email different to `s_mail`. For details see
 *     https://wellnessliving.atlassian.net/browse/WL-85264.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to restart this task.
 * - 1576 (`Core\Db\Update\Task\DictionaryConversionCleanupTask`): This task is started when a key was converted from
 * decimal to string, and there is a local dictionary in shards
 *   that have this column.
 *
 *   Normally, this local dictionary is filled during
 * [ForeignAddDeferredTask](#/components/schemas/Core.Task.CoreTaskNormal) with updated string values.
 *   But legacy decimal values keep persisting.
 *
 *   This task is designed to remove those legacy decimal values from the local dictionary.
 * - 746 (`Core\Db\Update\Task\ForeignAddDeferredTask`): Performs post-processing after adding a foreign key.
 *
 *   If the delete action
 * [DbUpdateForeignActionSid::CASCADE](#/components/schemas/Core.Db.Update.DbUpdateForeignActionSid) was specified for
 * the foreign key,
 *   then the task will delete all conflicting rows from the table.
 *
 *   If the delete action
 * [DbUpdateForeignActionSid::SET_NULL](#/components/schemas/Core.Db.Update.DbUpdateForeignActionSid) was specified for
 * the foreign key,
 *   the task will set the referenced fields of linked rows to `null`.
 *
 *   If the delete action
 * [DbUpdateForeignActionSid::RESTRICT](#/components/schemas/Core.Db.Update.DbUpdateForeignActionSid) was specified for
 * the foreign key,
 *   the task will fail.
 *
 *   A task can be scheduled to run in the background
 *   or be executed immediately ([ForeignAddDeferredTask::exec()](#/components/schemas/Core.Task.CoreTaskNormal)
 * method).
 * - 1650 (`Core\Db\Update\Task\TableDropDeferredTask`): Performs the procedure of deferred table deletion.
 *
 *   Allows to reduce the database update time during the build.
 * - 1881 (`Core\Db\Update\Task\ColumnDropDeferredTask`): Performs deferred actions after a column is removed from a
 * table.
 * - 1837 (`Core\Db\Update\Task\OnceUpdateColumnValueTask`): Task for make mass simple replace in passed table for
 * specific column.
 * - 1818 (`Core\Geo\City\Remove\CityReplaceTask`): Tasks to replace city in locations and businesses.
 *   We need this task to perform this action in all datacenters. To do this - we add this task to all active
 * datacenters.
 * - 866 (`Wl\Member\Group\User\UserUpdateTask`): A task that updates a group of users according to the search template
 * associated with a group.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 *   This task is a simple reindex.
 * - 876 (`Wl\Business\Account\Subscription\SubscriptionPayTask`): Performs subscription plan payment for specific
 * payment type.
 *
 *   ### There should be ability to restart task in case of error that's why it should extend
 * [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal).
 *
 *   ## Failure recovery policy
 *
 *   * Always should be investigated.
 *   * Should never be deleted.
 * - 880 (`Wl\Business\Account\Expense\ExpensePayTask`): Performs specific expense payment.
 *
 *   ### There should be ability to restart task in case of error that's why in should extend
 * [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal).
 * - 311 (`Wl\Business\Franchise\Push\FranchisePushTask`): Performs push in background.
 *
 *   ## Failure recovery policy
 *
 *   If the task has failed today, then it is ok to restart it.
 *   If the task was failed long time ago (not today), then create task to investigate error and after investigation
 * remove task.
 * - 847 (`Wl\Business\Revenue\Stat\StatNotifyTask`): Task designed to notify that customer has accumulated
 * Stat::THRESHOLD or more in credit card
 *   processing revenue from their clients.
 *
 *   We need to keep ability to relaunch this task in a case if it fails that's why
 * [CoreTaskNormal](#/components/schemas/Core.Task.CoreTaskNormal) used.
 * - 1183 (`Wl\Business\RegionTravel\Example\ExampleIntermediateTask`): This task verifies how tasks that belong to a
 * business that is being travelled now get re-scheduled in the future.
 *
 *   How to use:
 *   * create a task object. Call `add()` method.
 *   * Wait for 16 minutes.
 *   * Search for `ExampleIntermediateTask` word in the [TaskLog](#/components/schemas/Core.Log.CoreLog).
 *     You must see 6 log entries in the log: 4 log entries for returning `intermediate` region, one
 *     for returning `current` region and one for `done`.
 * - 501 (`Wl\Business\Application\Track\TrackFillTask`): Performs first time filling of TrackSql table.
 * - 1930 (`Wl\Marketing\Automation\Execution\AutomationUpdateTask`): Task to start or stop automation after its
 * update.
 *
 *   ## Failure Recovery Policy
 *
 *    It is safe to restart this task.
 * - 2235 (`Wl\Marketing\Automation\Execution\AutomationExecutionTask`): Task that executes an automation for a single
 * recipient.
 *
 *   Checks that the automation is still active and the business has an active Marketing Suite subscription
 *    before proceeding with execution.
 *
 *   ## Failure Recovery Policy
 *
 *   If the task has failed today, then it is ok to restart it.
 *   If the task was failed long time ago (not today), then create task to investigate error and after investigation
 * remove task.
 * - 2287 (`Wl\Marketing\Automation\Execution\AutomationScheduleRetroactiveTask`): Task that schedules one retroactive
 * batch for an automation.
 *
 *   Checks that the automation is still active and the business has an active Marketing Suite subscription
 *    before processing the batch.
 *
 *   ## Failure Recovery Policy
 *
 *   If the task has failed today, then it is ok to restart it.
 *   If the task was failed long time ago (not today), then create task to investigate error and after investigation
 * remove task.
 * - 1968 (`Wl\Marketing\Automation\Migration\AutomationMigrateTask`): Task for migrating marketing automations to new
 * system.
 *
 *   ## Failure Recovery Policy
 *
 *   In the case of failure, this task must be restarted after fixing the underlying issue.
 * - 2219 (`Wl\Marketing\Automation\Migration\PatternSettingMigrateTask`): Migrates `id_mail_copy_business` and
 * `s_business_mail` settings from old mail pattern templates
 *   to new automation mail pattern templates that were not modified after migration.
 *
 *   ## Failure Recovery Policy
 *
 *   In the case of failure, this task must be restarted after fixing the underlying issue.
 * - 843 (`Wl\Login\Promotion\Attendance\VisitReconcileTask`): Task that finds and reconciles unpaid visits, which can
 * be paid with promotion.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart always.
 * - 710 (`Wl\Login\Promotion\Remain\RemainMailRescheduleTask`): Reschedules the sending of [RsMailSid::PROMOTION_LOW
 * "Few Pass Visits Remaining"](#/components/schemas/RsMailSid) emails.
 * - 2220 (`Wl\Login\Promotion\GuestPass\GuestPassRevokeTask`): Performs async actions due to guest pass revoke.
 * - 2247 (`Wl\Login\Promotion\GuestPass\GuestPassWaitlistExpireTask`): Releases held guest passes for guests who
 * remained on the waitlist when a class session starts.
 *
 *   Scheduled at the class session start time whenever a guest joins a waitlist and a pass is
 *   deducted via GuestPass::deductTrx().
 *   On execution, finds all visits for the session that are still in
 * [VisitSid::WAIT](#/components/schemas/Wl.Visit.VisitSid) status
 *   and linked to a guest pass, then calls GuestPass::refundTrx() to return the pass
 *   to the host's available balance.
 *
 *   The task is idempotent per class session: re-scheduling for the same session overwrites the
 *   existing entry rather than creating a duplicate.
 * - 308 (`Wl\Classes\Period\Modify\CancelMailTask`): Manages one-time sending of notification about operations with
 * class cancelling.
 * - 529 (`Wl\Classes\Period\Add\VisitRegisterPostponeTask`): Adds clients, who are enrolled to the enrollment, to a
 * list of new events.
 * - 313 (`Wl\Import\Custom\Upload\CustomTask`): A task that parses the resulting records from the imported file.
 *
 *   Method [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract) is not required. This is an
 * import task.
 *     We are not going to move businesses, while import is in progress.
 * - 956 (`Wl\Profile\Page\Notifications\NotificationBusinessInitTask`): Performs migration data from an old clients'
 * notifications settings table to a new NotificationBusinessSql table.
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 * - 955 (`Wl\Profile\Page\Notifications\NotificationInitializeTask`): Performs migration data from an old clients'
 * notifications settings table to a new NotificationSql table.
 *   It is always executed in the region in which it was launched, the regionId method is not needed.
 * - 1646 (`Wl\Appointment\Cancel\Task\VisitCancelTask`): Cancels appointment book.
 *   Unlike [VisitCancelAsync](#/components/schemas/Core.Async.CoreAsyncForegroundAbstract) may be scheduled for a
 * certain time.
 *
 *   ## Failure Recovery Policy
 *   It is safe to restart this task.
 * - 1624 (`Wl\Purchase\Item\Search\LocationPurchaseReindexTask`): Reindexes all purchase items
 * [PurchaseItemSearchTable](#/components/schemas/Core.Amazon.CloudSearch.CloudSearchTable) and transactions
 * [PurchaseTransactionSearchTable](#/components/schemas/Core.Amazon.CloudSearch.CloudSearchTable)
 *   in specified location.
 *
 *   Method regionId not defined because this task gathers information in the region where it's started
 *    and is not expected to move to another region.
 *
 *   ## Failure recovery policy:
 *    Safe to restart. The task will continue from the point where it stopped.
 *    There may be overlapping if it failed inside the main loop, but that just means the purchases would be re-queued
 *    for search reindexing again.
 * - 978 (`Wl\Purchase\Item\Search\PurchaseItemFranchiseReindexTask`): Reindexes purchase items within franchise
 * businesses.
 *
 *   Method regionId not defined because this task gathers information in the region where it's started
 *   and is not expected to move to another region.
 * - 871 (`Wl\Purchase\Item\Search\PurchaseItemNxReindexTask`): Searches for items and transactions of purchases that
 * contain items that don't exist in the database and queues them
 *   for reindexing in the purchase item and transaction search tables.
 *
 *   Method regionId not defined because there are potentially multiple purchases from multiple businesses.
 * - 1510 (`Wl\Purchase\Item\Search\PurchaseItemReindexAllTask`): Reindexes all purchase items.
 *
 *   Method regionId not defined because this task gathers information in the region where it's started
 *   and is not expected to move to another region.
 *
 *   ## Failure recovery policy:
 *   Safe to restart. The task will continue from the point where it stopped, and even if overlapping occurs the
 * purchase
 *   item(s) would just be re-queued for search reindexing again.
 * - 1038 (`Wl\Purchase\Transaction\Search\PurchaseTransactionFranchiseReindexTask`): Reindexes transactions within
 * franchise businesses.
 *
 *   Method regionId not defined because there are potentially multiple purchases from multiple businesses.
 * - 1445 (`Wl\Purchase\Transaction\Search\TransactionNoPurchaseReindexTask`): Reindexes transactions that are not
 * associated with a purchase.
 *
 *   Method regionId not defined because there are potentially multiple purchases from multiple businesses.
 * - 1613 (`Wl\Purchase\Transaction\Search\TransactionRefundReindexTask`): Reindexes all refunds (transactions and
 * purchase items).
 *
 *   Method regionId not defined because this task gathers information in the region where it's started
 *   and is not expected to move to another region.
 *
 *   ## Failure recovery policy:
 *   Safe to restart. The task will continue from the point where it stopped, and even if overlapping occurs the
 *   transactions and purchase items would just be re-queued for search reindexing again.
 * - 1509 (`Wl\Purchase\Transaction\Search\TransactionReindexAllTask`): Reindexes all transactions.
 *
 *   Method regionId not defined because this task gathers information in the region where it's started
 *   and is not expected to move to another region.
 *
 *   ## Failure recovery policy:
 *   Safe to restart. The task will continue from the point where it stopped, and even if overlapping occurs the
 *   transaction(s) would just be re-queued for search reindexing again.
 * - 1267 (`Wl\Purchase\Transaction\Account\PurchaseTransactionAccountReindexTask`): Reindexes transactions where
 * amount is added to the account.
 *
 *   Method regionId not defined because there are potentially multiple purchases from multiple businesses.
 * - 1278 (`Wl\Purchase\Refund\Transaction\PurchaseTransactionVoidTask`): Voids transactions whose purchase status
 * remains [RsPurchaseStatusSid::PAY](#/components/schemas/RsPurchaseStatusSid) after the delay.
 *
 *   ## Failure Recovery Policy
 *
 *   Run `namespace.Wl/Purchase/Refund/Transaction/doc/purchase-transaction-check.php` script for your keys,
 *     follow instructions. Ask Alexey Fedorov to manage failed tasks if script restarts the task, and it continues
 *     failing, or money wasn't returned correctly.
 * - 1718 (`Wl\Franchise\Fee\Collect\FeeCollectTask`): Processes scheduled fees.
 *
 *   Depending on `id_fee_schedule` fees can be paid out on a scheduled date or directly after transaction.
 *   This task designed to charge [FeeTypeSid::FIXED](#/components/schemas/Wl.Franchise.Fee.FeeTypeSid) fees with
 * further pay out and pay out previously charged
 * [FeeTypeSid::PERCENTAGE](#/components/schemas/Wl.Franchise.Fee.FeeTypeSid) fees.
 *
 *   * [FeeTypeSid::FIXED](#/components/schemas/Wl.Franchise.Fee.FeeTypeSid) fees do not depend on anything and value
 * of these fees stored in fee setup.
 *   * [FeeTypeSid::PERCENTAGE](#/components/schemas/Wl.Franchise.Fee.FeeTypeSid) fees depend on collected
 * transactions. See FeeCollectAbstract::collectedPerTransactionList().
 * - 1707 (`Wl\Franchise\Fee\Charge\FeeChargeTask`): Processes charges of fees from franchisee.
 * - 1719 (`Wl\Franchise\Fee\Refund\FeeRefundTask`): Processes refunds for collected fees.
 * - 1717 (`Wl\Franchise\Fee\Payout\FeePayoutTask`): Processes collected fees and pays them out to franchisor.
 *
 *   ## Failure recovery policy
 *   *
 *   * * Safe to restart always.
 *   * * If it fails after restart need to investigate.
 * - 1863 (`Wl\Franchise\Split\Transfer\TransferChunkTask`): Performs transfer of one chunk of records.
 * - 1776 (`Wl\Franchise\Split\Transfer\TransferTask`): Performs async transfers.
 * - 1915 (`Wl\Franchise\Split\Task\SplitTaskChunkTask`): Task to split tasks in chunks for reschedule after split
 * process.
 * - 1612 (`Wl\Google\Booking\Conversion\ConversionTask`): Conversion tracking task.
 * - 670 (`Wl\Reward\Score\Statistic\RewardScoreStatisticInitializeTask`): Processes the reward scores and saved score
 * statistic into the RewardScoreStatisticSql.
 *   Saves score statistic for users in the specified business.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 * - 669 (`Wl\Reward\Score\Statistic\RewardScoreStatisticPlanTask`): Task for planing the
 * [RewardScoreStatisticInitializeTask](#/components/schemas/Core.Task.CoreTaskNormal) tasks.
 * - 656 (`Wl\Insurance\Reimbursement\Import\RebateImportTask`): Task to save rebate information from importing file.
 *
 *   Task does not have region check because this is Curves specific task for now and Curves will not be moved.
 * - 832 (`Wl\Insurance\Reimbursement\Visit\VisitInitializeAllTask`): Plans
 * [VisitInitializeUserTask](#/components/schemas/Core.Task.CoreTaskNormal) for each client, who ever had at least one
 * insurance program.
 * - 831 (`Wl\Insurance\Reimbursement\Visit\VisitInitializeUserTask`): Initialize all historical reimbursed visits for
 * a give user.
 * - 1597 (`Wl\DoorAccess\Brivo\Invitation\BrivoUserInviteSendTask`): Sends Mobile Pass invitation to a Brivo user.
 *
 *   ## Failure Recovery Policy
 *
 *   It is safe to always restart this task.
 * - 513 (`Wl\Integration\Curves\Franchise\FranchiseBackTask`): Schedules tasks to synchronize data, which was added
 * after import.
 * - 517 (`Wl\Integration\Curves\Member\InsuranceFixTask`): Special task, which can fix members, who were imported with
 * wellness program, but were expected to have it.
 * - 811 (`Wl\Integration\Curves\Member\MemberResendTask`): Special task, which can resend members from our database to
 * curves software.
 *   Can resend member, member's status, visits and passes.
 * - 1061 (`Wl\Virtual\Meeting\Zoom\ZoomMeetingEndTask`): Task to end Zoom virtual meeting.
 *
 *   ## Failure Recovery Policy
 *
 *   Safe to restart.
 *
 *   If the task is outdated, it will just do nothing.
 * - 964 (`Wl\Virtual\Meeting\NonIntegrated\NonIntegratedMeetingEndTask`): Task to end Non Integrated virtual meeting.
 * - 2221 (`Wl\Pay\Account\Statement\AccountStatementGenerateTask`): Generates an account statement for a business and
 * schedules the next run.
 *
 *   ## Failure recovery policy:
 *   Safe to restart. Statement generation is idempotent for a given generation date.
 * - 1598 (`Thoth\WlPay\Transaction\Status\Manual\TransactionStatusChangeTask`): Task to mark transaction as failed and
 * debit client account.
 * - 1076 (`Core\Db\Update\Task\OnceMethod\OnceMethodPosteriorTask`): Executes posterior one-time methods.
 * - 784 (`Wl\Member\Progress\Log\Statistic\ProgressLastInitializeTask`): Fills ProgressLogLastSql table for specified
 * user.
 * - 982 (`Wl\Member\Progress\Log\Statistic\ProgressLastMergedUpdateTask`): Updates possibly broken measurement
 * statistics for merged users. Cleans up statistic records for users that were
 *   merged into another and updates it for those, that were merged into.
 * - 785 (`Wl\Member\Progress\Log\Statistic\ProgressLastScheduleTask`): Scheduler for
 * [ProgressLastInitializeTask](#/components/schemas/Core.Task.CoreTaskNormal) tasks.
 * - 1844 (`Wl\Mail\Pattern\AutomatedMarketing\CampaignResend\CampaignResendTask`): Task to resend mail campaigns.
 * - 2179 (`Wl\Login\Promotion\GuestPass\Invite\InviteExpireTask`): Expires pending guest pass invitation that have not
 * been accepted and used in time.
 * - 309 (`Wl\Classes\Period\Change\Task\StaffMailTask`): Provides sending of mail to staff members about class-period
 * change.
 * - 1078 (`Wl\Import\Migration\Company\Url\UrlManagerTask`): Task to schedule tasks to process single url.
 *   Is used to not create hundreds of tasks at the same moment. Creates several tasks and
 *   is being rescheduled to create more tasks later.
 *
 *   Method [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract) is not required. This is an
 * import task.
 *     We are not going to move businesses, while import is in progress.
 * - 1079 (`Wl\Import\Migration\Company\Url\UrlTask`): Task to process single url.
 *
 *   Method [CoreTaskAbstract::regionId()](#/components/schemas/Core.Task.CoreTaskAbstract) is not required. This is an
 * import task.
 *     We are not going to move businesses, while import is in progress.
 * - 1118 (`Wl\Appointment\Book\Promote\Expire\AppointmentPromoteExpireTask`): Verifies that the client has confirmed
 * the transition from the wait list to the active list.
 *   Otherwise, it will start promotion for another client in case there is free spot.
 */
class CoreTaskAbstract
{
    /** Not finished transaction task. */
    public const VoidNotFinishedTransactionTask = 1373;

    /** Task to repair failed transactions. */
    public const RepairFailedTransactionTask = 1432;

    /** Handles repeated sending of events that could not be sent from the first try by [WebhookEventSendAsync](#/components/schemas/Core.Async.CoreAsyncDetachedAbstract). */
    public const WebhookEventSendTask = 1282;

    /** Schedules specified logs for reindex. */
    public const ReindexRegionTask = 1170;

    /** This task cleans up alias entries in serialized task bodies in the task queue. */
    public const TaskBodyAliasCleanTask = 1836;

    /** Performs removal of all tasks with the certain prefix and empty date of queue. */
    public const QueueRemoveTask = 536;

    /** Upgrades task identifiers. */
    public const TaskRenameTask = 1217;

    /** Example task that does nothing. */
    public const ExampleConvertibleTask = 1659;

    /** Example task that does nothing. */
    public const ExampleTask = 316;

    /** Books event sessions if there are too many to book online. */
    public const EventSessionTask = 1880;

    /** Books event sessions if there are too many to book online. */
    public const EventBlockTask = 1884;

    /** Manages one-time sending of notification about operations with event sessions. */
    public const Event_MailTask = 901;

    /** Performs full reconciliation of VisitCountBusinessSql. */
    public const VisitCountBusinessPrgTask = 1533;

    /** Performs full reconciliation of RsScheduleCountSql. */
    public const VisitCountUpdatePrgTask = 860;

    /** Executes all listeners of VisitTaskEvent in background. */
    public const VisitNotifyTask = 331;

    /** Task to upload video from download link to FitVID. */
    public const VideoUploadTask = 1130;

    /** Task for initialization [LocationActiveLogShardTrxTask](#/components/schemas/Wl.Business.DbBusinessShardTrxTaskAbstract) transactions on shards. */
    public const LocationActiveLogInitTask = 565;

    /** Manages filling of LocationOptionSql table. */
    public const LocationOptionShardTrxTask = 609;

    /** Manages filling of LocationActiveLogSql table. */
    public const LocationActiveLogShardTrxTask = 607;

    /** Task for initialization [LocationOptionShardTrxTask](#/components/schemas/Wl.Business.DbBusinessShardTrxTaskAbstract) transactions on shards. */
    public const LocationOptionInitTask = 570;

    /** Performs adding mail pattern live keys for duplicated services (classes, events and appointments). */
    public const AddMailPatternLiveTask = 1661;

    /** Calls [BusinessNumberStatisticValue::initialize()](#/components/schemas/Wl.StatisticValue.StatisticValueAbstract) in the destination region. */
    public const BusinessNumberDestinationTravelTask = 1209;

    /** Task designed to initialize debtors according to their current account balance. */
    public const DebtInitTask = 1308;

    /** Adds specific client to the list of debtors according to next requirements: */
    public const DebtAddTask = 1280;

    /** Task triggered when debt fully closed. */
    public const DebtCloseTask = 1654;

    /** Task triggered when debt gathered by collector agency. */
    public const DebtSentTask = 1653;

    /** Converts Attended status of a visit to Pending if business policy is set to automatically mark clients as Attended */
    public const AutomaticTrackingValidateTask = 1435;

    /** Slot synchronization task manager. */
    public const GymPassSlotTask = 722;

    /** Class synchronization task manager. */
    public const GymPassClassTask = 723;

    /** Changes end date of all active packages and passes in the business so item becomes as does not expired. */
    public const PackageEndNullTask = 548;

    /** Adds registration to virtual visit. */
    public const VirtualRegistrantAddTask = 697;

    /** This task designed to release zoom used to be used by business. */
    public const ZoomUserReleaseTask = 721;

    /** Transaction class, that gathers user data, sends it for analysis and saves result data. */
    public const IsaacDataGatherTask = 693;

    /** Class, that checks the correctness of Isaac predictions for given business and prediction date. */
    public const IsaacVerificationTask = 701;

    /** Class which runs history gathering for every business in the list. */
    public const IsaacHistoryGatherTask = 965;

    /** Maintains denormalized upcoming class session records for a given class period. */
    public const ClassPeriodSessionTask = 1979;

    /** Task to sync a user payment options on a merchant side. */
    public const NuveiUPOSyncTask = 1870;

    /** Allows to postpone voiding of a transaction. */
    public const PayProcessorVoidTask = 947;

    /** Task to remove a user payment option on a merchant side. */
    public const PayBankAccountRemoveTask = 1721;

    /** Adds credit cards to merchants of all locations that are linked with specified location. */
    public const AuthorizeLocationTask = 1706;

    /** Queues all records of a search table for reindex. */
    public const SearchReindexAllTask = 1518;

    /** Reindexes all data in all search tables. */
    public const ReindexTotalTask = 1722;

    /** Allows to update value of PassportLoginSql.`s_login_simple` after changes in */
    public const ChangeSimpleTask = 526;

    /** Deletes duplicate outdated search documents that appeared due to changes in document distribution among instances */
    public const PostgresDuplicateRemoveTask = 1087;

    /** Removes keys from local dictionaries that do not exist in the main database. */
    public const DictionaryDeleteKeyTask = 1605;

    /** Deletes specified dictionary rows from a local dictionary of specified database shard. */
    public const DictionaryDeleteTask = 545;

    /** Task for analyzing changes in functionality based on closed tasks. */
    public const FunctionalChangeAnalysisTask = 2128;

    /** Task for processing changes in Jira issues and analyzing their impact on functionality. */
    public const TextChangeAnalysisTask = 2127;

    /** Exports Jira issues to the database and schedules tasks for processing them. */
    public const JiraIssuesExporterTask = 2134;

    /** Task for deleting Pinecone vectors related to a specific function. */
    public const PineconeDeleteTask = 2137;

    /** Performs migration of lead source data from RsLeadSql to a new LeadSourceUserSql table. */
    public const LeadSourceTransferTask = 1824;

    /** Establishes a connection between users, when referred UID and referrer foreign ID are known. */
    public const MemberReferredByTask = 1857;

    /** Prepares one segment of the file. */
    public const AccumulationProcessTask = 2082;

    /** Removes non-activated trial for business account. */
    public const TrialRemoveTask = 1865;

    /** Performs actions on trial expiration. */
    public const TrialExpireTask = 1858;

    /** Task for send sms. */
    public const SmsSendTask = 774;

    /** Turns ON explorer promotion for businesses. */
    public const PromoteExplorerTask = 1876;

    /** Adds payout to partner business account. */
    public const PartnerPayoutTask = 1069;

    /** Task class for removing integration options with "Reserve with Google" and "Class Pass" in the franchisee location. */
    public const DeleteIntegrationSettingsTask = 531;

    /** If a merchant processor has been removed (and a new one has not ben set instead), */
    public const PayUpdateTask = 667;

    /** Moves tasks between Amazon regions. */
    public const TaskTravelTask = 1175;

    /** Moves data from S3 file storage between source and target regions for the specified business. */
    public const DriveTravelTask = 1132;

    /** Deletes business data from source datacenter. */
    public const DbTableClearTravelTask = 1339;

    /** Moves data from tables in the databases between source and target regions for the specified business. */
    public const DbTableTravelTask = 1120;

    /** Deletes files from Drive in the source datacenter after a business was moved to a different datacenter. */
    public const DriveCleanTravelTask = 1337;

    /** Moves contents of [DbShardKeyDynamo](#/components/schemas/Core.Amazon.DynamoDb.DynamoDbAbstract) related to this business. */
    public const DynamoShardKeyTravelTask = 1171;

    /** Clears business SOS files from source Amazon region. */
    public const SosCleanTravelTask = 1334;

    /** Moves business SOS files between Amazon regions. */
    public const SosTravelTask = 1136;

    /** This task is intended for periodical check of a background task status. */
    public const TravelStatusCheckTask = 1184;

    /** Checks all references for compliance with the rules in the constants DriveData::CORE_DRIVE_LINK_DATA and */
    public const DriveDataAnalyzeTask = 1514;

    /** Clears all caches. */
    public const ClearCacheTravelTask = 1185;

    /** Task to initializes MailChimp webhook in new region. */
    public const MailChimpWebhookInitTravelTask = 1701;

    /** Task to remove MailChimp webhook in old region. */
    public const MailChimpWebhookRemoveTravelTask = 1703;

    /** Performs full check of the given businesses, whether they can be transferred to the given region or not. */
    public const DbTravelCheckTask = 1639;

    /** Schedules reindexing of all indexing tables linked to the business that is travelling between Amazon regions. */
    public const SearchReindexTravelTask = 1208;

    /** A task to start execution of a travelling step. */
    public const TravelStartTask = 1186;

    /** A task to transition a step to a new status. */
    public const TravelTransitionTask = 1179;

    /** This task pops entire contents of all synchronized tables. */
    public const SyncPopAllTask = 1027;

    /** Task to remove a domain from the business settings and Amazon SES. */
    public const DomainRemoveTask = 1860;

    /** Task to check the status of domain verification in Amazon SES. */
    public const DomainVerifyCheckStatusTask = 1835;

    /** Adds tasks for sending emails about membership expiration. */
    public const MigrateExpireMailTask = 1753;

    /** Provides sending of emails via Automated Marketing -> Send campaign. */
    public const Mail_MailTask = 1505;

    /** Reinitialize member type for all users in the franchise when setting how to calculate member type is changed. */
    public const MemberTypeGlobalTask = 1918;

    /** Re-indexes user by user UID key. */
    public const UidReindexTask = 1356;

    /** Re-indexes user by him identifications. */
    public const LoginVisitReindexTask = 999;

    /** Performs initializations related to purchased promotions needed to complete travelling of a business between */
    public const LoginPromotionTravelTask = 1199;

    /** Performs data initialization for visits paid with login promotions in ApplySql shard table. */
    public const ApplyInitTask = 787;

    /** Saving of signature. */
    public const LoginAgreeSignatureTask = 703;

    /** Reschedules the sending of the [RsMailSid::LOGIN_BACK](#/components/schemas/RsMailSid) or [RsMailSid::LOGIN_RETENTION](#/components/schemas/RsMailSid) email. */
    public const LoginRetentionMailRescheduleTask = 714;

    /** Schedules [ClientTask](#/components/schemas/Wl.Login.Birthday.ClientTask) and [Task](#/components/schemas/Wl.Login.Anniversary.Task) tasks for all members of specified business. */
    public const InitializeBusinessTask = 1198;

    /** Sends [RsMailSid::LOGIN_BIRTHDAY](#/components/schemas/RsMailSid) email. */
    public const Birthday_MailTask = 2045;

    /** Provides sending of mail "Class Cancelled By Client - Early". */
    public const EarlyMailTask = 902;

    /** Provides sending of mail "Class Cancelled By Client - Early". */
    public const LateMailTask = 903;

    /** After ability to add image to the certain business was added, old images were left in the system-wide business. */
    public const MigrateToBusinessTask = 1664;

    /** Sends scheduled email. */
    public const MailScheduleTask = 1488;

    /** Sends scheduled sms. */
    public const SmsScheduleTask = 1502;

    /** Sends scheduled push notification. */
    public const PushScheduleTask = 1492;

    /** Performs sending of the notification, which was requested in [NotificationSendApi](/Wl/Notification/Send/NotificationSend.json) with a delayed start. */
    public const NotificationSendTask = 1544;

    /** Promotes clients from block event wait list to the active list after some other clients cancelled the reservation. */
    public const BlockEventBookPromoteTask = 1415;

    /** Checks the confirmation of the promotes from the wait list to the active list */
    public const PromoteExpireTask = 325;

    /** Promotes clients from wait list to the active list after some other clients cancelled the reservation. */
    public const BookPromoteTask = 324;

    /** Performs multiple booking, when staff member books recurring appointment for client. */
    public const AppointmentStaffRecurringTask = 1159;

    /** Performs multiple booking, when client books a recurring appointment. */
    public const AppointmentClientRecurringModelTask = 1249;

    /** Performs multiple booking, when client books a recurring appointment. */
    public const AppointmentClientRecurringTask = 1160;

    /** Performs multiple booking, when staff member books a class for multiple clients. */
    public const ClassMultipleClientsTask = 1154;

    /** Performs recurring booking, when staff books a class for a client. */
    public const ClassRecurringTask = 1157;

    /** Special testing task to test multiple booking functionality without actual booking. */
    public const MultipleBookingTestTask = 1156;

    /** Manages reservation renewal on one month. */
    public const ReservationRenewalTask = 632;

    /** Email can be sent after every class visit to ask the client for a review of the class. */
    public const Visit_MailRescheduleTask = 720;

    /** A Task that gets called when class period is unpublished. */
    public const ClassesPeriodUnpublishOnTask = 1663;

    /** A Task that gets called when class period is published. */
    public const ClassesPeriodPublishOnTask = 1655;

    /** Task to delete custom import file. */
    public const CustomImportFileTask = 1847;

    /** Creates visits during class attendance import. */
    public const VisitCreateTask = 310;

    /** Creates visits during Curves workout and appointment import. */
    public const CurvesVisitCreateTask = 314;

    /** This task changed the way staff receives class attendance emails. It should be triggered manually only once, */
    public const AttendanceListSubscribeTask = 620;

    /** A recurrent task for sending class attendance lists. */
    public const AttendanceListMailTask = 619;

    /** Handles new and changed visits to figure out if they're considered "first visit" in any filter combination. */
    public const FirstVisitProcessVisitTask = 550;

    /** Refreshes first visits index for a list of users within a business. */
    public const FirstVisitUserRefreshTask = 942;

    /** Refreshes first visits for all users that had a first visit in a class. */
    public const FirstVisitClassRefreshTask = 943;

    /** Fully updates first visits list of a user, deleting outdated or incorrect records and adding any missing ones. */
    public const FirstVisitProcessUserTask = 557;

    /** Schedules workers ([FirstVisitAllWorkerTask](#/components/schemas/Core.Task.CoreTaskNormal)) for initial first visit table fill. */
    public const FirstVisitAllSchedulerTask = 563;

    /** Worker thread for initial filling of first visits table. Managed by [FirstVisitAllSchedulerTask](#/components/schemas/Core.Task.CoreTaskNormal). */
    public const FirstVisitAllWorkerTask = 562;

    /** Reschedules the sending of the [RsMailSid::VISIT_CAMPAIGN](#/components/schemas/RsMailSid) email. */
    public const VisitCampaignRescheduleTask = 715;

    /** Provides sending of mail "Thanks for purchasing an introductory offer". */
    public const IntroductoryMailTask = 307;

    /** Allows rescheduling of "Thanks for purchasing an introductory offer" emails. */
    public const IntroductoryMailRescheduleTask = 706;

    /** Actualizes timezones for locations based on their coordinates using Google Maps API. */
    public const TimeZoneLocationActualizeTask = 1911;

    /** Task for initialization LocationCustomerShardTransaction transactions on shards. */
    public const LocationCustomerIndexInitTask = 606;

    /** Task for initialization [LocationCustomerLogShardTrxTask](#/components/schemas/Wl.Business.DbBusinessShardTrxTaskAbstract) transactions on shards. */
    public const LocationCustomerLogInitTask = 578;

    /** Manages filling of LocationCustomerIndexSql table. */
    public const LocationCustomerIndexShardTrxTask = 611;

    /** Manages filling of LocationCustomerLogSql table. */
    public const LocationCustomerLogShardTrxTask = 610;

    /** Task for change location customer index. */
    public const LocationCustomerIndexChangeTask = 617;

    /** Manages migration process of a single location to a separate business due to split of a multi-location franchisor. */
    public const SplitProcessTask = 1747;

    /** Manages actions after franchise split completed.. */
    public const SplitCompleteTask = 1811;

    /** Cancels a service. */
    public const EventCancelTask = 1621;

    /** Updates a booking. */
    public const BookingPatchTask = 568;

    /** This task gathers and uploads complete feed of specified type. */
    public const FeedUploaderTask = 1346;

    /** Performs actions to synchronize events from Google calendar to WL. */
    public const GoogleCalendarEventTwoWayTask = 1166;

    /** Pushes an event to the Google Calendar. */
    public const GoogleCalendarEventPushTask = 929;

    /** Creates new calendar on Google. */
    public const GoogleCalendarInsertTask = 915;

    /** Executes a request to watch event changes in the user's calendar. */
    public const GoogleCalendarWatchTask = 1165;

    /** Updates the `inboundRequestUrl` for the business to point to the correct regional URL. */
    public const UpdatePhoneResponseUrlTravelTask = 1412;

    /** Recalculation of statistics on sent and received SMS for business. */
    public const SmsStatReconcileTask = 1293;

    /** The task is used to perform action with promotion payment pause periods for login promotion list. */
    public const PromotionPayPauseTask = 678;

    /** Executes a single [RsPromotionPayScheduleSid::FUTURE](#/components/schemas/RsPromotionPayScheduleSid) payment. */
    public const PromotionPayRenewTask = 1056;

    /** Schedules [PromotionPayRenewTask](#/components/schemas/Core.Task.CoreTaskNormal) for all memberships that have future payments in */
    public const PromotionPayRenewAllTask = 1057;

    /** Reschedules the sending of "Promotion purchase" [RsMailSid::PROMOTION_PURCHASE](#/components/schemas/RsMailSid) emails. */
    public const Promotion_Purchase_MailRescheduleTask = 712;

    /** Sends [RsMailSid::PROMOTION_MEMBERSHIP_EXPIRE "Pass or Membership is Expiring"](#/components/schemas/RsMailSid) emails. */
    public const MembershipExpireMailTask = 1724;

    /** Reschedules the sending of [RsMailSid::PROMOTION_MEMBERSHIP_EXPIRE "Pass or Membership is Expiring"](#/components/schemas/RsMailSid) and */
    public const MembershipMailRescheduleTask = 711;

    /** Manages one-time sending of notification to remind about incomplete forms. */
    public const QuizRemindTask = 1431;

    /** Manages addition of rewards. */
    public const RewardScoreAddTask = 335;

    /** Synchronized User's profile data with Brivo. */
    public const ClientDataSyncTask = 1406;

    /** Synchronized User's member ID with Brivo. */
    public const ClientIdSyncTask = 1404;

    /** Send a client of member group to corresponding group on Brivo or remove from it if a client is not a member of a group anymore. */
    public const GroupClientUpdateTask = 1402;

    /** Send all clients from a member group to corresponding group on Brivo. */
    public const GroupClientsSyncTask = 1401;

    /** Updates Group on Brivo into required state (active/inactive). */
    public const GroupUpdateTask = 1403;

    /** Task to send client's membership information into community. */
    public const LoginPromotionTask = 556;

    /** A task to send addresses to external API for verification. */
    public const AddressVerifyTask = 729;

    /** Send manual alerts to all staffs in all or specified businesses. */
    public const ManualAlertSendTask = 1423;

    /** Performs actions to synchronize events from Microsoft calendar to WL. */
    public const MicrosoftCalendarEventTwoWayTask = 1409;

    /** Pushes an event to the Microsoft Calendar. */
    public const MicrosoftCalendarEventPushTask = 1382;

    /** Creates new calendar on Microsoft. */
    public const MicrosoftCalendarInsertTask = 1383;

    /** Executes a request to watch event changes in the user's calendar. */
    public const MicrosoftCalendarWatchTask = 1408;

    /** Synchronizes business with `Planhat`. */
    public const PlanhatCompanySyncTask = 1928;

    /** Synchronizes enduser with `Planhat`. */
    public const PlanhatEnduserSyncTask = 1927;

    /** Synchronizes analytics with `Planhat`. */
    public const PlanhatAnalyticsTask = 2169;

    /** Prepares events for further synchronization. */
    public const CalendarEventWriteListPrepareTask = 917;

    /** Reschedules the sending of "Product purchase" [RsMailSid::PRODUCT_PURCHASE](#/components/schemas/RsMailSid) emails. */
    public const Product_Purchase_MailRescheduleTask = 713;

    /** Validates search template and delete if invalid. */
    public const DeleteInvalidTemplateTask = 1443;

    /** Removes a field from a MailChimp account. */
    public const EmlMailchimpFieldRemoveTask = 312;

    /** Adds user subscription. */
    public const CcSynchronizeTask = 318;

    /** Task to sync a Nuvei terminals. */
    public const NuveiTerminalSyncTask = 1883;

    /** Task to processes the Nuvei's Web Hook events. */
    public const NuveiEventTask = 1677;

    /** Terminal synchronization task. */
    public const StripeTerminalSynchronizeTask = 1353;

    /** Processes the event. */
    public const StripeEventTask = 1221;

    /** This task checks status of the connected account in Stripe, and transitions its status in */
    public const AccountUpdatedTask = 1241;

    /** Updates metadata on payment to connected accounts by metadata of source payment. */
    public const UpdatePaymentMetadataTask = 1345;

    /** Stripe locations synchronization task. */
    public const StripeLocationSynchronizeTask = 1344;

    /** Same as parent task, but scheduled manually from PRG. */
    public const BatchDateTask = 1609;

    /** Gathers payments without batch number for the past period and generates batch number. */
    public const BatchTask = 1273;

    /** Performs unifying `s_login`, `s_login_simple` with `s_mail` in PassportLoginSql table. */
    public const LoginMailUnifyTask = 1675;

    /** This task is started when a key was converted from decimal to string, and there is a local dictionary in shards */
    public const DictionaryConversionCleanupTask = 1576;

    /** Performs post-processing after adding a foreign key. */
    public const ForeignAddDeferredTask = 746;

    /** Performs the procedure of deferred table deletion. */
    public const TableDropDeferredTask = 1650;

    /** Performs deferred actions after a column is removed from a table. */
    public const ColumnDropDeferredTask = 1881;

    /** Task for make mass simple replace in passed table for specific column. */
    public const OnceUpdateColumnValueTask = 1837;

    /** Tasks to replace city in locations and businesses. */
    public const CityReplaceTask = 1818;

    /** A task that updates a group of users according to the search template associated with a group. */
    public const UserUpdateTask = 866;

    /** Performs subscription plan payment for specific payment type. */
    public const SubscriptionPayTask = 876;

    /** Performs specific expense payment. */
    public const ExpensePayTask = 880;

    /** Performs push in background. */
    public const FranchisePushTask = 311;

    /** Task designed to notify that customer has accumulated Stat::THRESHOLD or more in credit card */
    public const StatNotifyTask = 847;

    /** This task verifies how tasks that belong to a business that is being travelled now get re-scheduled in the future. */
    public const ExampleIntermediateTask = 1183;

    /** Performs first time filling of TrackSql table. */
    public const TrackFillTask = 501;

    /** Task to start or stop automation after its update. */
    public const AutomationUpdateTask = 1930;

    /** Task that executes an automation for a single recipient. */
    public const AutomationExecutionTask = 2235;

    /** Task that schedules one retroactive batch for an automation. */
    public const AutomationScheduleRetroactiveTask = 2287;

    /** Task for migrating marketing automations to new system. */
    public const AutomationMigrateTask = 1968;

    /** Migrates `id_mail_copy_business` and `s_business_mail` settings from old mail pattern templates */
    public const PatternSettingMigrateTask = 2219;

    /** Task that finds and reconciles unpaid visits, which can be paid with promotion. */
    public const VisitReconcileTask = 843;

    /** Reschedules the sending of [RsMailSid::PROMOTION_LOW "Few Pass Visits Remaining"](#/components/schemas/RsMailSid) emails. */
    public const RemainMailRescheduleTask = 710;

    /** Performs async actions due to guest pass revoke. */
    public const GuestPassRevokeTask = 2220;

    /** Releases held guest passes for guests who remained on the waitlist when a class session starts. */
    public const GuestPassWaitlistExpireTask = 2247;

    /** Manages one-time sending of notification about operations with class cancelling. */
    public const CancelMailTask = 308;

    /** Adds clients, who are enrolled to the enrollment, to a list of new events. */
    public const VisitRegisterPostponeTask = 529;

    /** A task that parses the resulting records from the imported file. */
    public const CustomTask = 313;

    /** Performs migration data from an old clients' notifications settings table to a new NotificationBusinessSql table. */
    public const NotificationBusinessInitTask = 956;

    /** Performs migration data from an old clients' notifications settings table to a new NotificationSql table. */
    public const NotificationInitializeTask = 955;

    /** Cancels appointment book. */
    public const VisitCancelTask = 1646;

    /** Reindexes all purchase items [PurchaseItemSearchTable](#/components/schemas/Core.Amazon.CloudSearch.CloudSearchTable) and transactions [PurchaseTransactionSearchTable](#/components/schemas/Core.Amazon.CloudSearch.CloudSearchTable) */
    public const LocationPurchaseReindexTask = 1624;

    /** Reindexes purchase items within franchise businesses. */
    public const PurchaseItemFranchiseReindexTask = 978;

    /** Searches for items and transactions of purchases that contain items that don't exist in the database and queues them */
    public const PurchaseItemNxReindexTask = 871;

    /** Reindexes all purchase items. */
    public const PurchaseItemReindexAllTask = 1510;

    /** Reindexes transactions within franchise businesses. */
    public const PurchaseTransactionFranchiseReindexTask = 1038;

    /** Reindexes transactions that are not associated with a purchase. */
    public const TransactionNoPurchaseReindexTask = 1445;

    /** Reindexes all refunds (transactions and purchase items). */
    public const TransactionRefundReindexTask = 1613;

    /** Reindexes all transactions. */
    public const TransactionReindexAllTask = 1509;

    /** Reindexes transactions where amount is added to the account. */
    public const PurchaseTransactionAccountReindexTask = 1267;

    /** Voids transactions whose purchase status remains [RsPurchaseStatusSid::PAY](#/components/schemas/RsPurchaseStatusSid) after the delay. */
    public const PurchaseTransactionVoidTask = 1278;

    /** Processes scheduled fees. */
    public const FeeCollectTask = 1718;

    /** Processes charges of fees from franchisee. */
    public const FeeChargeTask = 1707;

    /** Processes refunds for collected fees. */
    public const FeeRefundTask = 1719;

    /** Processes collected fees and pays them out to franchisor. */
    public const FeePayoutTask = 1717;

    /** Performs transfer of one chunk of records. */
    public const TransferChunkTask = 1863;

    /** Performs async transfers. */
    public const TransferTask = 1776;

    /** Task to split tasks in chunks for reschedule after split process. */
    public const SplitTaskChunkTask = 1915;

    /** Conversion tracking task. */
    public const ConversionTask = 1612;

    /** Processes the reward scores and saved score statistic into the RewardScoreStatisticSql. */
    public const RewardScoreStatisticInitializeTask = 670;

    /** Task for planing the [RewardScoreStatisticInitializeTask](#/components/schemas/Core.Task.CoreTaskNormal) tasks. */
    public const RewardScoreStatisticPlanTask = 669;

    /** Task to save rebate information from importing file. */
    public const RebateImportTask = 656;

    /** Plans [VisitInitializeUserTask](#/components/schemas/Core.Task.CoreTaskNormal) for each client, who ever had at least one insurance program. */
    public const VisitInitializeAllTask = 832;

    /** Initialize all historical reimbursed visits for a give user. */
    public const VisitInitializeUserTask = 831;

    /** Sends Mobile Pass invitation to a Brivo user. */
    public const BrivoUserInviteSendTask = 1597;

    /** Schedules tasks to synchronize data, which was added after import. */
    public const FranchiseBackTask = 513;

    /** Special task, which can fix members, who were imported with wellness program, but were expected to have it. */
    public const InsuranceFixTask = 517;

    /** Special task, which can resend members from our database to curves software. */
    public const MemberResendTask = 811;

    /** Task to end Zoom virtual meeting. */
    public const ZoomMeetingEndTask = 1061;

    /** Task to end Non Integrated virtual meeting. */
    public const NonIntegratedMeetingEndTask = 964;

    /** Generates an account statement for a business and schedules the next run. */
    public const AccountStatementGenerateTask = 2221;

    /** Task to mark transaction as failed and debit client account. */
    public const TransactionStatusChangeTask = 1598;

    /** Executes posterior one-time methods. */
    public const OnceMethodPosteriorTask = 1076;

    /** Fills ProgressLogLastSql table for specified user. */
    public const ProgressLastInitializeTask = 784;

    /** Updates possibly broken measurement statistics for merged users. Cleans up statistic records for users that were */
    public const ProgressLastMergedUpdateTask = 982;

    /** Scheduler for [ProgressLastInitializeTask](#/components/schemas/Core.Task.CoreTaskNormal) tasks. */
    public const ProgressLastScheduleTask = 785;

    /** Task to resend mail campaigns. */
    public const CampaignResendTask = 1844;

    /** Expires pending guest pass invitation that have not been accepted and used in time. */
    public const InviteExpireTask = 2179;

    /** Provides sending of mail to staff members about class-period change. */
    public const StaffMailTask = 309;

    /** Task to schedule tasks to process single url. */
    public const UrlManagerTask = 1078;

    /** Task to process single url. */
    public const UrlTask = 1079;

    /** Verifies that the client has confirmed the transition from the wait list to the active list. */
    public const AppointmentPromoteExpireTask = 1118;
}
