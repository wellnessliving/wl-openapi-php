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
enum ChannelAbstract: int
{
    case Thoth\ReportCore\Generator\UpdateChannel = 735;
    case Wl\Visit\VisitStatusChannel = 1921;
    case Wl\Fitbuilder\MessageChannel = 1583;
    case Wl\Virtual\AccountUpdateChannel = 733;
    case Wl\Virtual\MeetingScheduleChannel = 688;
    case Wl\Task\TaskChangeChannel = 1869;
    case Wl\Alert\AlertChannel = 1342;
    case Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusChannel = 1421;
    case Core\WebSocket\Example\ExampleFunctionChannel = 19;
    case Wl\Schedule\ClassList\ClassListChannel = 298;
    case Wl\Schedule\ScheduleList\ScheduleListChannel = 305;
    case Wl\Book\Multiple\MultipleTaskSessionChannel = 1163;
    case Wl\Profile\Schedule\ProfileScheduleChannel = 510;
    case Wl\Profile\Contract\ContractChannel = 1660;
    case Wl\Import\Progress\ProgressChannel = 1850;
    case Wl\Business\Sms\SmsSendErrorChannel = 977;
    case Wl\Business\Edit\TitleChangeChannel = 16;
    case Wl\Report\Background\ReportBackgroundProcessChannel = 842;
    case Wl\Report\AutoUpdate\ReportAutoUpdateChannel = 1543;
    case Wl\Mail\Domain\DomainVerifyStatusChannel = 1834;
    case Wl\Mail\Verify\MailVerifyStatusChangeChannel = 677;
    case Wl\Reception\Design\ReceptionDesignChannel = 1657;
    case Wl\Member\Info\ClientTypeChangeChannel = 1820;
    case Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi\PaymentStatusChannel = 1736;
    case Wl\Schedule\ScheduleList\StaffApp\ScheduleListChannel = 523;
    case Wl\Business\Sms\Unread\SmsUnreadCountChannel = 960;
    case Wl\Business\AuthorizeSupport\Request\RequestChannel = 34;
    case Wl\Business\AuthorizeSupport\Response\ResponseChannel = 41;
    case Wl\Business\AuthorizeSupport\ResponseStaff\ResponseStaffChannel = 57;
    case Wl\Postcard\Campaign\CampaignEdit\AddressVerificationChannel = 828;
    case Wl\Business\Sms\Chat\Dialog\DialogChannel = 963;
    case Wl\Business\Sms\Chat\Dialog\MessageHistoryChannel = 952;
    case Wl\Business\Franchise\Report\Curves\AccumulationProcessChannel = 549;
}
