<?php

namespace WlSdk\Wl\Alert;

/**
 * Base class for all alerts.
 *
 * Values:
 * - 1314 (`Wl\Classes\Alert\ClassesBookAlert`): Alert that is sent to a staff member when a client books a class.
 * - 1315 (`Wl\Classes\Alert\ClassesCancelAlert`): Alert that is sent to a staff member when a client cancels a class.
 * - 1330 (`Wl\Event\Alert\EventBookAlert`): Alert that is sent to a staff member when a client books an event.
 * - 1331 (`Wl\Event\Alert\EventCancelAlert`): Alert that is sent to a staff member when a client cancels an event.
 * - 1326 (`Wl\Appointment\Alert\AppointmentBookAlert`): Alert that is sent to a staff member when a client books an
 * appointment.
 * - 1327 (`Wl\Appointment\Alert\AppointmentCancelAlert`): Alert that is sent to a staff member when a client cancels a
 * class.
 * - 1328 (`Wl\Appointment\Alert\AppointmentRequestAlert`): Alert that is sent to a staff member when a client send
 * request an appointment.
 * - 1333 (`Wl\Sms\Alert\MessageNewAlert`): Alert that is sent to a staff member when a client sent a message.
 * - 1483 (`Wl\Sms\Alert\MessageLimitAlert`): Alert staff member that the business's monthly SMS quota has been
 * reached.
 * - 1428 (`Wl\Task\Alert\TaskDueAlert`): Alert that is sent to the staff member when a staff member’s task has
 * reached its due date.
 * - 1427 (`Wl\Task\Alert\TaskNewAlert`): Alert that is sent to the staff member when a task is created and assigned to
 * them.
 * - 1417 (`Wl\Alert\Manual\ManualAlert`): Manual alert for all staffs in all or specified businesses, sent by an
 * administrator.
 * - 1364 (`Wl\Business\Sms\Chat\Staff\SmsChatStaffAssignAlert`): Alert that is sent to a staff member when a client
 * sent a message.
 */
class AlertAbstract
{
    /** Alert that is sent to a staff member when a client books a class. */
    public const ClassesBookAlert = 1314;

    /** Alert that is sent to a staff member when a client cancels a class. */
    public const ClassesCancelAlert = 1315;

    /** Alert that is sent to a staff member when a client books an event. */
    public const EventBookAlert = 1330;

    /** Alert that is sent to a staff member when a client cancels an event. */
    public const EventCancelAlert = 1331;

    /** Alert that is sent to a staff member when a client books an appointment. */
    public const AppointmentBookAlert = 1326;

    /** Alert that is sent to a staff member when a client cancels a class. */
    public const AppointmentCancelAlert = 1327;

    /** Alert that is sent to a staff member when a client send request an appointment. */
    public const AppointmentRequestAlert = 1328;

    /** Alert that is sent to a staff member when a client sent a message. */
    public const MessageNewAlert = 1333;

    /** Alert staff member that the business's monthly SMS quota has been reached. */
    public const MessageLimitAlert = 1483;

    /** Alert that is sent to the staff member when a staff member’s task has reached its due date. */
    public const TaskDueAlert = 1428;

    /** Alert that is sent to the staff member when a task is created and assigned to them. */
    public const TaskNewAlert = 1427;

    /** Manual alert for all staffs in all or specified businesses, sent by an administrator. */
    public const ManualAlert = 1417;

    /** Alert that is sent to a staff member when a client sent a message. */
    public const SmsChatStaffAssignAlert = 1364;
}
