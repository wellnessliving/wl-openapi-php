<?php

namespace WlSdk\Core\WebSocket;

/**
 * Base class for all channel controllers.
 *
 * A channel allows clients to subscribe to events, and allows server to send events to all subscribers instantly.
 *
 * A channel controller contains description of data and key fields, and a method that allows to check if key fields
 * are
 * valid and current user has access to subscribe to this channel
 * ([ChannelAbstract::checkAccess() checkAccess()](#/components/schemas/Core.WebSocket.ChannelAbstract)).
 *
 * Key fields allow to clients to receive only events that correspond to these keys.
 * For example, if we have a channel "A message is added in a chat room", chat room would be a key.
 * Sender name and content of the message are data fields.
 * [ChannelAbstract::checkAccess() checkAccess()](#/components/schemas/Core.WebSocket.ChannelAbstract) should check if
 * this room exists and current
 * user has access to view messages of this room.
 *
 * <b>How to create a new channel</b>
 *
 * To create a channel, you should do the following:
 * * Create a channel controller (successor of [ChannelAbstract](#/components/schemas/Core.WebSocket.ChannelAbstract)).
 * * Register CID of the controller.
 * * Describe data and key fields in channel controller.
 * * Implement [ChannelAbstract::checkAccess() checkAccess()](#/components/schemas/Core.WebSocket.ChannelAbstract).
 *   Check if key fields are valid and that current user has access to subscribe this channel.
 *
 * <b>How to send a new message to a channel</b>
 *
 * * Create an object of a channel controller.
 * * Fill in all data and key fields.
 * * Issue [ChannelAbstract::notify() notify()](#/components/schemas/Core.WebSocket.ChannelAbstract) on it.
 *
 * Values:
 * - 735 (`Thoth\ReportCore\Generator\UpdateChannel`): A message is sent through this channel every time a report gets
 * updated.
 * - 1921 (`Wl\Visit\VisitStatusChannel`): A message is sent through this channel when the status of a visit is
 * changed.
 * - 1583 (`Wl\Fitbuilder\MessageChannel`): Channel to inform Fitbuilder messenger about new information.
 * - 733 (`Wl\Virtual\AccountUpdateChannel`): Channel to pass over information about virtual account release.
 * - 688 (`Wl\Virtual\MeetingScheduleChannel`): Channel to pass over information about meeting creation.
 * - 1869 (`Wl\Task\TaskChangeChannel`): A message is sent through this channel every time a task created or edited.
 * - 1342 (`Wl\Alert\AlertChannel`): A message is sent through this channel every time an alert created or read.
 * - 1421 (`Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusChannel`): Channel to pass over
 * information about ticket status.
 * - 19 (`Core\WebSocket\Example\ExampleFunctionChannel`): Example channel to test how asynchronous function calls
 * work.
 * - 298 (`Wl\Schedule\ClassList\ClassListChannel`): Channel to notify user that class schedule is changed.
 * - 305 (`Wl\Schedule\ScheduleList\ScheduleListChannel`): Channel to notify user that a session has been booked or
 * book cancelled.
 * - 1163 (`Wl\Book\Multiple\MultipleTaskSessionChannel`): Channel to pass over information about booking.
 * - 510 (`Wl\Profile\Schedule\ProfileScheduleChannel`): Channel to notify certain clients about changes of they
 * schedule.
 * - 1660 (`Wl\Profile\Contract\ContractChannel`): Channel to notify user about new unsigned documents.
 * - 1850 (`Wl\Import\Progress\ProgressChannel`): Channel to pass over information about business import progress.
 * - 977 (`Wl\Business\Sms\SmsSendErrorChannel`): Channel to pass over error message when failed sent SMS.
 * - 16 (`Wl\Business\Edit\TitleChangeChannel`): When title of a business is changed, new title is sent over this
 * channel.
 * - 842 (`Wl\Report\Background\ReportBackgroundProcessChannel`): Channel to notify certain user about complete of
 * report accumulation process.
 * - 1543 (`Wl\Report\AutoUpdate\ReportAutoUpdateChannel`): When the specified report is updated, auto-update request
 * is sent over this channel.
 * - 1834 (`Wl\Mail\Domain\DomainVerifyStatusChannel`): Domain verification status verification channel.
 * - 677 (`Wl\Mail\Verify\MailVerifyStatusChangeChannel`): When mail verify status was changed new value is sent over
 * this channel.
 * - 1657 (`Wl\Reception\Design\ReceptionDesignChannel`): Channel to pass over information about changing the Self
 * Check-In settings.
 * - 1820 (`Wl\Member\Info\ClientTypeChangeChannel`): A message is sent through this channel every time a client type
 * is changed.
 * - 1736 (`Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi\PaymentStatusChannel`): Channel to pass over information
 * about payment status.
 * - 523 (`Wl\Schedule\ScheduleList\StaffApp\ScheduleListChannel`): Channel to notify certain staff members about
 * changes of schedule.
 * - 960 (`Wl\Business\Sms\Unread\SmsUnreadCountChannel`): Channel to pass over information about unread SMS in the
 * business.
 * - 34 (`Wl\Business\AuthorizeSupport\Request\RequestChannel`): Channel to listen requests to access from franchisee.
 * - 41 (`Wl\Business\AuthorizeSupport\Response\ResponseChannel`): Channel to response support employee who is
 * requesting access to business.
 * - 57 (`Wl\Business\AuthorizeSupport\ResponseStaff\ResponseStaffChannel`): Channel to inform staff members that
 * request from support employee has been processed.
 * - 828 (`Wl\Postcard\Campaign\CampaignEdit\AddressVerificationChannel`): Channel to pass over information about
 * address verification.
 * - 963 (`Wl\Business\Sms\Chat\Dialog\DialogChannel`): Channel to pass over information about changing the dialog with
 * specific client.
 * - 952 (`Wl\Business\Sms\Chat\Dialog\MessageHistoryChannel`): Channel to pass over information about new message in
 * the chat.
 * - 549 (`Wl\Business\Franchise\Report\Curves\AccumulationProcessChannel`): When accumulation progress was changed new
 * value is sent over this channel.
 */
class ChannelAbstract
{
    /** A message is sent through this channel every time a report gets updated. */
    public const UpdateChannel = 735;

    /** A message is sent through this channel when the status of a visit is changed. */
    public const VisitStatusChannel = 1921;

    /** Channel to inform Fitbuilder messenger about new information. */
    public const MessageChannel = 1583;

    /** Channel to pass over information about virtual account release. */
    public const AccountUpdateChannel = 733;

    /** Channel to pass over information about meeting creation. */
    public const MeetingScheduleChannel = 688;

    /** A message is sent through this channel every time a task created or edited. */
    public const TaskChangeChannel = 1869;

    /** A message is sent through this channel every time an alert created or read. */
    public const AlertChannel = 1342;

    /** Channel to pass over information about ticket status. */
    public const DirectConnectTicketStatusChannel = 1421;

    /** Example channel to test how asynchronous function calls work. */
    public const ExampleFunctionChannel = 19;

    /** Channel to notify user that class schedule is changed. */
    public const ClassListChannel = 298;

    /** Channel to notify user that a session has been booked or book cancelled. */
    public const ScheduleList_ScheduleListChannel = 305;

    /** Channel to pass over information about booking. */
    public const MultipleTaskSessionChannel = 1163;

    /** Channel to notify certain clients about changes of they schedule. */
    public const ProfileScheduleChannel = 510;

    /** Channel to notify user about new unsigned documents. */
    public const ContractChannel = 1660;

    /** Channel to pass over information about business import progress. */
    public const ProgressChannel = 1850;

    /** Channel to pass over error message when failed sent SMS. */
    public const SmsSendErrorChannel = 977;

    /** When title of a business is changed, new title is sent over this channel. */
    public const TitleChangeChannel = 16;

    /** Channel to notify certain user about complete of report accumulation process. */
    public const ReportBackgroundProcessChannel = 842;

    /** When the specified report is updated, auto-update request is sent over this channel. */
    public const ReportAutoUpdateChannel = 1543;

    /** Domain verification status verification channel. */
    public const DomainVerifyStatusChannel = 1834;

    /** When mail verify status was changed new value is sent over this channel. */
    public const MailVerifyStatusChangeChannel = 677;

    /** Channel to pass over information about changing the Self Check-In settings. */
    public const ReceptionDesignChannel = 1657;

    /** A message is sent through this channel every time a client type is changed. */
    public const ClientTypeChangeChannel = 1820;

    /** Channel to pass over information about payment status. */
    public const PaymentStatusChannel = 1736;

    /** Channel to notify certain staff members about changes of schedule. */
    public const StaffApp_ScheduleListChannel = 523;

    /** Channel to pass over information about unread SMS in the business. */
    public const SmsUnreadCountChannel = 960;

    /** Channel to listen requests to access from franchisee. */
    public const RequestChannel = 34;

    /** Channel to response support employee who is requesting access to business. */
    public const ResponseChannel = 41;

    /** Channel to inform staff members that request from support employee has been processed. */
    public const ResponseStaffChannel = 57;

    /** Channel to pass over information about address verification. */
    public const AddressVerificationChannel = 828;

    /** Channel to pass over information about changing the dialog with specific client. */
    public const DialogChannel = 963;

    /** Channel to pass over information about new message in the chat. */
    public const MessageHistoryChannel = 952;

    /** When accumulation progress was changed new value is sent over this channel. */
    public const AccumulationProcessChannel = 549;
}
