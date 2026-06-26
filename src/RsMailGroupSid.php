<?php

namespace WlSdk;

/**
 * Manages mails groups.
 *
 * Last used ID: 44.
 *
 * Values:
 * - 1 (`ADMIN`): Notification mails for administrator.
 * - 41 (`AI_AGENT`): AI Agent–triggered notifications.
 * - 2 (`APPOINTMENT_CLIENT`): Appointment notification mails for client.
 * - 3 (`APPOINTMENT_STAFF`): Appointment notification mails for staff.
 * - 4 (`ATTENDANCE`): Attendance list notification mail.
 * - 5 (`AUTOMATION`): Automation mails.
 * - 7 (`BILLING_CLIENT`): Billing mails fo client.
 * - 40 (`BILLING_MEMBERSHIP`): Billing memberships mails for staff.
 * - 8 (`BILLING_STAFF`): Billing mails for staff.
 * - 6 (`BUSINESS`): Notification mails for business.
 * - 30 (`BUSINESS_SMS_CHAT`): Business message chat notifications.
 * - 9 (`CLASS_CLIENT`): Class notification mails for client.
 * - 25 (`CLASS_PROMOTE`): Group of emails with a type [RsMailSid::CLASSES_PROMOTE](#/components/schemas/RsMailSid).
 * - 10 (`CLASS_STAFF`): Class notification mails for staff.
 * - 21 (`CUSTOM`): Custom templates.
 * - 11 (`CUSTOMER_REVIEW_CLIENT`): Review notification for client.
 * - 12 (`CUSTOMER_REVIEW_STAFF`): Review notification for staff.
 * - 37 (`DEPRECATED`): Deprecated emails.
 * - 13 (`ENROLLMENT_CLIENT`): Enrollment notification mails for client.
 * - 14 (`ENROLLMENT_STAFF`): Enrollment notification mails for staff.
 * - 31 (`EVENT_PROMOTE`): Group of emails with a type [RsMailSid::EVENT_PROMOTE](#/components/schemas/RsMailSid).
 * - 38 (`FITBUILDER`): Fitbuilder.
 * - 34 (`FORM_CLIENT`): Forms group for clients.
 * - 33 (`FORM_STAFF`): Forms group for staff.
 * - 44 (`GUEST_PASS_NOTIFICATIONS`): Guest Pass notifications group for clients.
 * - 39 (`ISAAC`): Isaac AI Assistant.
 * - 20 (`LEAD_CAPTURE`): Lead capture group.
 * - 32 (`LEAD_CAPTURE_STAFF`): Lead capture group staff.
 * - 42 (`MEMBER_GROUP_CLIENT`): Members groups for clients.
 * - 23 (`ONLINE_STORE`): Online Store Group.
 * - 15 (`PROFILE_NOTIFICATION`): Other notifications for client
 * - 19 (`PURCHASE_CAMPAIGN`): Purchase campaign group.
 * - 29 (`PURCHASES_STAFF`): Purchases for staff.
 * - 16 (`REGISTRATION`): Group of mails that been used in registration
 * - 17 (`RETENTION`): Retention mails.
 * - 43 (`REVIEW_CLIENT`): Client review group.
 * - 27 (`REWARD_POINTS_CLIENT`): Client reward points group.
 * - 28 (`REWARD_POINTS_STAFF`): Staff reward points group.
 * - 24 (`STAFF_TASK`): Staff tasks.
 * - 36 (`SUPPORT`): For emails from Wellnessliving to businesses on the issues of conducting their business with the
 * help of our software.
 * - 35 (`SYSTEM_NOTIFICATION`): System emails about businesses and subscriptions.
 * - 26 (`USER_CAMPAIGN`): Group for [RsMailSid::USER_CAMPAIGN](#/components/schemas/RsMailSid) emails.
 * - 22 (`VISIT_CAMPAIGN`): Visit campaign group.
 * - 18 (`WIN_BACK`): Win bach group of mails.
 */
class RsMailGroupSid
{
    /** Notification mails for administrator. */
    public const ADMIN = 1;

    /** AI Agent–triggered notifications. */
    public const AI_AGENT = 41;

    /** Appointment notification mails for client. */
    public const APPOINTMENT_CLIENT = 2;

    /** Appointment notification mails for staff. */
    public const APPOINTMENT_STAFF = 3;

    /** Attendance list notification mail. */
    public const ATTENDANCE = 4;

    /** Automation mails. */
    public const AUTOMATION = 5;

    /** Billing mails fo client. */
    public const BILLING_CLIENT = 7;

    /** Billing memberships mails for staff. */
    public const BILLING_MEMBERSHIP = 40;

    /** Billing mails for staff. */
    public const BILLING_STAFF = 8;

    /** Notification mails for business. */
    public const BUSINESS = 6;

    /** Business message chat notifications. */
    public const BUSINESS_SMS_CHAT = 30;

    /** Class notification mails for client. */
    public const CLASS_CLIENT = 9;

    /** Group of emails with a type [RsMailSid::CLASSES_PROMOTE](#/components/schemas/RsMailSid). */
    public const CLASS_PROMOTE = 25;

    /** Class notification mails for staff. */
    public const CLASS_STAFF = 10;

    /** Custom templates. */
    public const CUSTOM = 21;

    /** Review notification for client. */
    public const CUSTOMER_REVIEW_CLIENT = 11;

    /** Review notification for staff. */
    public const CUSTOMER_REVIEW_STAFF = 12;

    /** Deprecated emails. */
    public const DEPRECATED = 37;

    /** Enrollment notification mails for client. */
    public const ENROLLMENT_CLIENT = 13;

    /** Enrollment notification mails for staff. */
    public const ENROLLMENT_STAFF = 14;

    /** Group of emails with a type [RsMailSid::EVENT_PROMOTE](#/components/schemas/RsMailSid). */
    public const EVENT_PROMOTE = 31;

    /** Fitbuilder. */
    public const FITBUILDER = 38;

    /** Forms group for clients. */
    public const FORM_CLIENT = 34;

    /** Forms group for staff. */
    public const FORM_STAFF = 33;

    /** Guest Pass notifications group for clients. */
    public const GUEST_PASS_NOTIFICATIONS = 44;

    /** Isaac AI Assistant. */
    public const ISAAC = 39;

    /** Lead capture group. */
    public const LEAD_CAPTURE = 20;

    /** Lead capture group staff. */
    public const LEAD_CAPTURE_STAFF = 32;

    /** Members groups for clients. */
    public const MEMBER_GROUP_CLIENT = 42;

    /** Online Store Group. */
    public const ONLINE_STORE = 23;

    /** Other notifications for client */
    public const PROFILE_NOTIFICATION = 15;

    /** Purchase campaign group. */
    public const PURCHASE_CAMPAIGN = 19;

    /** Purchases for staff. */
    public const PURCHASES_STAFF = 29;

    /** Group of mails that been used in registration */
    public const REGISTRATION = 16;

    /** Retention mails. */
    public const RETENTION = 17;

    /** Client review group. */
    public const REVIEW_CLIENT = 43;

    /** Client reward points group. */
    public const REWARD_POINTS_CLIENT = 27;

    /** Staff reward points group. */
    public const REWARD_POINTS_STAFF = 28;

    /** Staff tasks. */
    public const STAFF_TASK = 24;

    /** For emails from Wellnessliving to businesses on the issues of conducting their business with the help of our software. */
    public const SUPPORT = 36;

    /** System emails about businesses and subscriptions. */
    public const SYSTEM_NOTIFICATION = 35;

    /** Group for [RsMailSid::USER_CAMPAIGN](#/components/schemas/RsMailSid) emails. */
    public const USER_CAMPAIGN = 26;

    /** Visit campaign group. */
    public const VISIT_CAMPAIGN = 22;

    /** Win bach group of mails. */
    public const WIN_BACK = 18;
}
