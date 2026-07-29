<?php

namespace WlSdk\Wl\Privilege;

/**
 * Wellnessliving-wide privileges.
 *
 * Last Used ID: 247.
 *
 * Values:
 * - 225 (`AI_AGENT_KNOWLEDGE_BASE`): Allows user to view, create or edit knowledge base entries, or conversational
 * flows used by the AI Agent.
 * - 226 (`AI_AGENT_REPORTS`): Allows user to view reporting and analytics data related to AI Agent performance or
 * usage.
 * - 227 (`AI_AGENT_SETTINGS`): Allows user to modify configuration or conversational flows used by the AI Agents.
 * - 228 (`AI_AGENT_SUBSCRIPTIONS`): Allows user to create, update, or cancel AI Agent subscription plans.
 * - 142 (`ALERT_MESSAGE`): View banner alert message on dashboard.
 * - 209 (`APPOINTMENT_BOOK_NEGATIVE`): Book appointments for clients with negative account balances.
 * - 167 (`APPOINTMENT_BOOK_UNPAID`): Unpaid appointment booking.
 * - 203 (`APPOINTMENT_BOOK_UNSIGNED`): Book appointments for clients with an unsigned waiver.
 * - 50 (`APPOINTMENT_EDIT`): Edit appointment at my location.
 * - 49 (`APPOINTMENT_FOREIGN`): Change/View all appointment.
 * - 51 (`APPOINTMENT_PERIOD`): Edit appointment schedule.
 * - 52 (`APPOINTMENT_VIEW`): View appointment.
 * - 141 (`BOOK_OUTSIDE_PAID_PERIOD`): Ability to book clients outside their current paid period.
 * - 154 (`BOOK_OVER_CAPACITY`): Ability to book clients over capacity during or after the services have been
 * scheduled.
 * - 138 (`BOOK_UNAVAILABLE_ASSETS`): Ability to book assets which are booked for another service or set as
 * unavailable.
 * - 137 (`BOOK_UNAVAILABLE_STAFF`): Ability to schedule staff members who are booked for another service or set as
 * unavailable.
 * - 231 (`BOOK_UNPAID_RECURRING_APPOINTMENT`): Ability to book clients into recurring services even if they do not
 * have an applicable Purchase Option to cover all visits.
 * - 232 (`BOOK_UNPAID_RECURRING_CLASS`): Ability to book clients into recurring services even if they do not have an
 * applicable Purchase Option to cover all visits.
 * - 233 (`BOOK_UNPAID_RECURRING_RESOURCE`): Unpaid asset recurring booking.
 * - 1 (`BUSINESS_EDIT`): Manage business.
 * - 117 (`BUSINESS_EMAIL`): Change business email settings.
 * - 120 (`BUSINESS_POLICY`): Change business policies.
 * - 118 (`BUSINESS_SERVICE`): Change available services in business.
 * - 145 (`BUSINESS_SERVICE_APPLY`): Change services privileges apply.
 * - 165 (`BUSINESS_SERVICE_APPLY_CUSTOM`): Change services privileges apply (third button requires second privilege).
 * - 19 (`BUSINESS_SKIN`): Change Design Settings.
 * - 169 (`BUSINESS_SMS`): Change business SMS settings.
 * - 119 (`BUSINESS_URL`): Change business URLs.
 * - 121 (`BUSINESS_WAIVER`): Change business online waiver.
 * - 82 (`CASH_OUT`): Perform Cash Out.
 * - 83 (`CASH_OUT_DEPOSIT`): Edit deposits while perform Cash Out.
 * - 84 (`CASH_OUT_EDIT`): Perform editing of Cash Out.
 * - 35 (`CC_MANAGE`): Manage clients' Credit Cards.
 * - 208 (`CC_MANAGE_MANUAL`): Manage clients' Credit Cards manually.
 * - 48 (`CLASS_ATTENDANCE`): Edit class schedule.
 * - 210 (`CLASS_BOOK_NEGATIVE`): Book classes for clients with negative account balances.
 * - 79 (`CLASS_BOOK_UNPAID`): Add clients to the attendance list of a service, even if they do not have an applicable
 * purchase option.
 * - 201 (`CLASS_BOOK_UNSIGNED`): Book classes for clients with an unsigned waiver.
 * - 3 (`CLASS_EDIT`): Edit classes at my location.
 * - 238 (`CLASS_EDIT_SESSIONS`): Allows overriding certain class fields (capacity, price, etc.) when schedule is
 * added.
 * - 17 (`CLASS_FOREIGN`): Change/View all classes.
 * - 152 (`CLASS_LOCK_SEARCH`): Lock search bar on class attendance list.
 * - 5 (`CLASS_PERIOD`): Edit class schedule.
 * - 246 (`CLASS_SCHEDULE_VIEW`): Allows a staff member to see other staff members' class sessions on the schedule in
 * read-only mode
 *    while the Classes scope is set to only their own schedules.
 * - 135 (`CONTACT_LOG_MANAGE`): Add and view client's contact logs.
 * - 31 (`COUPON`): Add, remove, and edit gift cards.
 * - 131 (`DASHBOARD_DELETE`): Delete shared dashboard.
 * - 130 (`DASHBOARD_EDIT`): Edit shared dashboard.
 * - 129 (`DASHBOARD_SHARE`): Share dashboard.
 * - 76 (`DISCOUNT_CODE`): Add, remove and edit discount codes.
 * - 123 (`EML_CONSTANT_CONTACT`): Configure Constant Contact settings.
 * - 122 (`EML_MAILCHIMP`): Configure MailChimp settings.
 * - 55 (`ENROLLMENT_ATTENDANCE`): Edit class schedule.
 * - 211 (`ENROLLMENT_BOOK_NEGATIVE`): Book events for clients with negative account balances.
 * - 80 (`ENROLLMENT_BOOK_UNPAID`): Add clients to the attendance list of a service, even if they do not have an
 * applicable purchase option.
 * - 202 (`ENROLLMENT_BOOK_UNSIGNED`): Book events for clients with an unsigned waiver.
 * - 54 (`ENROLLMENT_EDIT`): Edit classes at my location.
 * - 239 (`ENROLLMENT_EDIT_SESSIONS`): Allows overriding certain event fields (capacity, price, etc.) when schedule is
 * added.
 * - 53 (`ENROLLMENT_FOREIGN`): Change/View all classes.
 * - 153 (`ENROLLMENT_LOCK_SEARCH`): Lock search bar on enrollment attendance list.
 * - 247 (`ENROLLMENT_SCHEDULE_VIEW`): Allows a staff member to see other staff members' event sessions on the schedule
 * in read-only mode
 *    while the Events scope is set to only their own schedules.
 * - 207 (`ENTERPRISE_CLOUD_FEES`): Manage Enterprise Cloud Fees.
 * - 190 (`FITBUILDER_LEADERBOARD`): Allows to manage leaderboard in the `FitBuilder` addon.
 * - 189 (`FITBUILDER_SUBSCRIPTION`): Allows to subscribe to `FitBuilder` subscription addon.
 * - 188 (`FITBUILDER_WORKOUT_ASSIGN`): Allows to assign workouts from the `FitBuilder` addon to different services.
 * - 187 (`FITBUILDER_WORKOUT_MANAGE`): Allows to add, edit and remove workouts in the `FitBuilder` addon.
 * - 177 (`FORM_ALL`): Allow Staff members to view/complete forms for clients from any location.
 * - 198 (`FORM_AMEND_ACCESS`): Amend apply to privilege.
 * - 194 (`FORM_AMEND_COMPLETED`): Allow staff members to make modifications to completed forms on the client profile.
 * - 195 (`FORM_AMEND_COMPLETED_ALL`): Allow staff members to make modifications to completed forms on the client
 * profile for all clients.
 * - 196 (`FORM_AMEND_COMPLETED_LOCATION`): Allow staff members to make modifications to completed forms on the client
 * profile for clients at staff location.
 * - 197 (`FORM_AMEND_COMPLETED_MY_CLIENTS`): Allow staff members to make modifications to completed forms on the
 * client profile for self clients.
 * - 178 (`FORM_COMPLETE`): Allow staff members to fill in forms for clients.
 * - 160 (`FORM_MANAGE`): Allow staff members to add, edit and delete forms.
 * - 175 (`FORM_MY_CLIENTS`): Allow Staff members to view/complete forms for clients that belong to them through
 * service offerings.
 * - 176 (`FORM_MY_LOCATION`): Allow Staff members to view/complete forms for clients that belong to the location that
 * they are selected to work at.
 * - 199 (`FORM_RESPONSE_DELETE`): Allow staff members to delete forms from the client’s profile.
 * - 161 (`FORM_VIEW_RESPONSE`): Allow staff members to view form responses.
 * - 7 (`HOLIDAY`): Add holidays.
 * - 215 (`IMPORT_CLIENT`): Allows to import clients from a CSV file.
 * - 163 (`INTEGRATION_AUTYMATE`): Set up and modify Autymate integration.
 * - 179 (`INTEGRATION_BRIVO`): Set up and modify Brivo integration.
 * - 87 (`INTERFACE_ACHIEVE_APP`): Enroll into and manage the WellnessLiving Achieve App. These settings are located
 * under Setup > Achieve Client App.
 * - 39 (`INTERFACE_WIDGET_EDIT`): Modify the look and functionality business’s widgets. These settings are located
 * within Setup > Widgets.
 * - 110 (`INTERFACE_WIDGET_VIEW`): View the look and functionality business’s widgets. These settings are located
 * within Setup > Widgets.
 * - 157 (`INVENTORY_UPDATE`): Permission to Receive or Adjust quantity from the Inventory On Hand Report.
 * - 9 (`LOCATION_EDIT`): Manage my locations except General information.
 * - 126 (`LOCATION_EDIT_GENERAL`): Manage tab Location -> General.
 * - 8 (`LOCATION_FOREIGN`): Manage all locations.
 * - 109 (`LOCATION_FRANCHISE`): Manage franchise locations.
 * - 101 (`LOG_VIEW`): Logs view.
 * - 11 (`LOGIN_NOTE`): Add client notes and warnings.
 * - 12 (`LOGIN_NOTE_RESTRICT`): Flag clients.
 * - 206 (`LOGIN_PRODUCT_VIEW`): View service add-ons.
 * - 75 (`MAIL_SEND`): Access to send mails and sms to clients.
 * - 200 (`MANAGE_ANNOUNCEMENT`): Manage announcements.
 * - 134 (`MANAGE_BILLING_INFORMATION`): Only the staff roles with this permission provided are able to edit/add/delete
 * the business billing information.
 * - 229 (`MANAGE_CAASI_CONVERSATION`): View, manage, and analyze CAASI-led conversations.
 * - 181 (`MANAGE_READERS`): Manage hardware readers.
 * - 43 (`MARKETING_DD`): Enable, disable, and edit daily deals.
 * - 42 (`MARKETING_EMAIL`): Settings pertaining to all automated marketing to clients.
 * - 237 (`MARKETING_SUBSCRIPTION`): Allows to subscribe to email marketing subscription plans and manage existing
 * subscriptions.
 * - 173 (`MESSAGES_CALLS`): Enabling this permission for a role will enable making and receiving calls in Message
 * Center.
 * - 174 (`MESSAGES_CONVERSATIONS`): Enabling this permission for a role will enable the role to use the ‘Assign
 * to’ field and assign a conversation to a staff member.
 * - 170 (`MESSAGES_MANAGE`): Enabling this permission for a role will grant access to the inbox tab including viewing
 * and sending messages in the Message Center.
 * - 171 (`MESSAGES_SETTINGS`): Enabling this permission for a role will grant access to the Settings tab including
 * modifying phone number(s) for the business.
 * - 172 (`MESSAGES_SUBSCRIPTION`): Enabling this permission for a role will grant access and changes to the
 * Subscription Plans tab.
 * - 60 (`NOTIFICATION_APPOINTMENT_BOOK`): Receive new appointment booking / request notification.
 * - 218 (`NOTIFICATION_APPOINTMENT_BOOKED_AI`): Receive Appointment Booked (AI Agent) notification.
 * - 61 (`NOTIFICATION_APPOINTMENT_CANCEL`): Receive appointment cancellation notification.
 * - 59 (`NOTIFICATION_APPOINTMENT_CHANGE`): Receive appointment change notification.
 * - 220 (`NOTIFICATION_APPOINTMENT_REQUEST_AI`): Receive Appointment Requested (AI Agent) notification.
 * - 224 (`NOTIFICATION_BILLING_RELATED_QUERY`): Receive Billing Related Query notification.
 * - 222 (`NOTIFICATION_CANCELLATION_REQUEST_AI`): Receive Cancellation Requested (AI Agent) notification.
 * - 56 (`NOTIFICATION_CLASS_ATTENDANCE`): Receive class attendance list.
 * - 57 (`NOTIFICATION_CLASS_BOOK`): Receive client class booking notification.
 * - 221 (`NOTIFICATION_CLASS_BOOK_AI`): Receive Class Booking Requested (AI Agent) notification.
 * - 219 (`NOTIFICATION_CLASS_BOOKED_AI`): Receive Class Booked (AI Agent) notification.
 * - 58 (`NOTIFICATION_CLASS_CANCEL`): Receive client class cancellation notification.
 * - 62 (`NOTIFICATION_EVENT_ATTENDANCE`): Receive event attendance list.
 * - 63 (`NOTIFICATION_EVENT_BOOK`): Receive client event booking notification.
 * - 64 (`NOTIFICATION_EVENT_CANCEL`): Receive client event cancellation notification.
 * - 65 (`NOTIFICATION_FOREIGN`): Permissions apply to all appointment schedules.
 * - 159 (`NOTIFICATION_LEAD_CAPTURE`): Receive new lead capture widget notification.
 * - 217 (`NOTIFICATION_LEAD_CAPTURE_AI`): Receive Lead Capture (AI Agent) notification.
 * - 214 (`NOTIFICATION_MEMBERSHIP_CANCEL`): Staff with this role will receive the membership cancel mails.
 * - 223 (`NOTIFICATION_MEMBERSHIP_QUERY`): Receive Membership or Purchase Options Query notification.
 * - 90 (`NOTIFICATION_PRIZE_REDEMPTION`): Staff with this role will receive emails about reward prizes.
 * - 77 (`NOTIFICATION_PRODUCT_INVENTORY`): Staff with this role will receive the inventory mails.
 * - 162 (`NOTIFICATION_QUIZ`): Receive new quiz notification form staff.
 * - 66 (`NOTIFICATION_REVIEW`): Staff with this role will receive customer review notifications.
 * - 136 (`NOTIFICATION_SALE_STAFF`): Staff with this role will receive the sale receipts mails.
 * - 216 (`NOTIFICATION_STAFF_CALLBACK_REQUEST`): Receive Staff Callback Request notification.
 * - 164 (`OVERRIDE_FEE`): Override late cancel and no show fees.
 * - 94 (`PARTNER_PROGRAM_MANAGE`): Manage partner program.
 * - 166 (`PAYMENT_PROCESSING`): Access to Payment Processing.
 * - 245 (`PERFORM_BULK_BILLING`): Allows the staff member to initiate bulk billing of multiple clients in one batch.
 * - 156 (`PHYSICAL_INVENTORY_COUNT`): Permission to perform Physical Inventory Count.
 * - 88 (`POSTCARD_SEND`): Staff member with this role will be able to send postcards.
 * - 106 (`POWER_SEARCH_DELETE`): Delete shared power searches.
 * - 105 (`POWER_SEARCH_EDIT`): Edit shared power searches.
 * - 107 (`POWER_SEARCH_SHARE`): Share power searches with other staff members.
 * - 149 (`PRESENCE`): Ability to request subscription plan for custom website.
 * - 113 (`PRODUCT_DESCRIPTION_EDIT`): Edit products but not product name and description.
 * - 34 (`PRODUCT_MANAGE`): Add, remove, and edit products in the online store.
 * - 24 (`PROFILE_ALL`): Manage all clients.
 * - 230 (`PROFILE_DELETE`): This permission allows users to delete client profiles.
 * - 67 (`PROFILE_DETAIL`): This permission allows users to view client details throughout the interface.
 * - 69 (`PROFILE_GROUP_MANAGE`): Manage profile client groups (only create, delete and rename a group).
 * - 191 (`PROFILE_GROUP_MEMBER_MANAGE`): Manage client group members (only members, not a group itself).
 * - 213 (`PROFILE_MERGE`): Merge client profiles.
 * - 86 (`PROFILE_MY_LOCATION`): Manage clients from my location.
 * - 205 (`PROFILE_SCHEDULE`): View client’s upcoming and past schedule.
 * - 68 (`PROFILE_TYPE_EDIT`): Manage profile client type.
 * - 13 (`PROFILE_VIEW`): Manage all clients.
 * - 102 (`PROGRESS_LOG_MANAGE`): Manage progress log.
 * - 104 (`PROGRESS_LOG_PROFILE`): Edit progress log in profile.
 * - 25 (`PROMOTION_MANAGE`): Add, remove, and edit purchase options and packages for services.
 * - 127 (`PROMOTION_MANAGE_BASE`): Allows to edit only base information about purchase option.
 * - 93 (`PURCHASE_EDIT`): Access to edit client purchases (passes and memberships).
 * - 92 (`PURCHASE_VIEW`): Access to view client purchases (passes and memberships).
 * - 193 (`RECEIVE_ALERT`): Allow to see alerts.
 * - 71 (`REPORT_ALL`): Access to view reports for all staff.
 *
 *   If staff has no this privilege then he can view only reports for them self.
 * - 27 (`REPORT_ATTENDANCE`): Reports attendance.
 * - 26 (`REPORT_CLIENT`): Reports client.
 * - 85 (`REPORT_CLOSEOUT`): Reports with cash closeout information.
 * - 186 (`REPORT_EXPORT_PRINT`): Export and print button in reports.
 * - 108 (`REPORT_FRANCHISE`): Reports with franchise information.
 * - 115 (`REPORT_INSURANCE`): Wellness Programs reports.
 * - 155 (`REPORT_INSURANCE_FILE`): Ability to generate, export and import insurance reimbursement files.
 * - 30 (`REPORT_MAIL`): Reports emails.
 * - 29 (`REPORT_SALE`): Reports sales.
 * - 125 (`REPORT_SALE_USER`): Ability to view purchase report for specific user.
 * - 28 (`REPORT_STAFF`): Reports staff.
 * - 37 (`RESOURCE`): Manage assets.
 * - 212 (`RESOURCE_BOOK_NEGATIVE`): Book assets for clients with negative account balances.
 * - 168 (`RESOURCE_BOOK_UNPAID`): Unpaid asset booking.
 * - 204 (`RESOURCE_BOOK_UNSIGNED`): Book assets for clients with an unsigned waiver.
 * - 18 (`REVIEW_FLAG`): Mark client reviews as inappropriate and respond to customer comments.
 * - 44 (`REWARD_LEADERBOARD`): Create contests on the leaderboard.
 * - 46 (`REWARD_POINT_MANAGE`): Rules related to point accumulation.
 * - 45 (`REWARD_POINT_RESET`): Clear the total accumulated points for all clients.
 * - 47 (`REWARD_PRIZE`): Define prizes and the number of points that are required to redeem.
 * - 116 (`SABA`): Enable SABA single sign on and create SABA accounts.
 * - 139 (`SCHEDULE_CANCELED_CLASS`): View canceled classes from the schedule.
 * - 140 (`SCHEDULE_CANCELED_ENROLLMENT`): View canceled classes from the schedule.
 * - 95 (`SCHEDULE_FUTURE_APPOINTMENT`): Scheduling and editing future sessions of the appointments.
 * - 128 (`SCHEDULE_FUTURE_ASSETS`): Scheduling sessions of the assets.
 * - 96 (`SCHEDULE_FUTURE_CLASS`): Scheduling and editing future sessions of the classes.
 * - 99 (`SCHEDULE_FUTURE_EVENT`): Scheduling and editing future sessions of the events.
 * - 97 (`SCHEDULE_PAST_APPOINTMENT`): Scheduling and editing past sessions of the appointments.
 * - 98 (`SCHEDULE_PAST_CLASS`): Scheduling and editing past sessions of the classes.
 * - 100 (`SCHEDULE_PAST_EVENT`): Scheduling and editing past sessions of the events.
 * - 234 (`SCHEDULE_SUMMARY_REVENUE_SERVICE`): View a summary of projected and earned service revenue generated from
 * scheduled and completed sessions.
 * - 235 (`SCHEDULE_SUMMARY_REVENUE_STAFF`): View a summary of projected pay from upcoming sessions and earned pay from
 * completed sessions, based on the staff’s schedule.
 * - 133 (`SERVICE_AGREEMENT_SIGN`): Allows sign service agreement.
 * - 78 (`SHOP_CATEGORY`): View, modify and delete shop categories.
 * - 32 (`STAFF_CLOCK`): Modify the clock-in and clock-out times for staff members.
 * - 14 (`STAFF_EDIT`): Add, remove, and edit staff profiles.
 * - 150 (`STAFF_EDIT_OWN`): Edit own staff profile.
 * - 184 (`STAFF_MODIFY_RATES_PRODUCT`): Modify pay rates for products and Purchase Options.
 * - 183 (`STAFF_MODIFY_RATES_SERVICE`): Modify pay rates for services.
 * - 192 (`STAFF_MY_CLOCK`): Modify the clock-in and clock-out times for your own staff profile.
 * - 20 (`STAFF_PAY_ALL`): Add, remove, and edit staff pay rates.
 * - 72 (`STAFF_ROLE_CHANGE`): Change staff role on the staff edit page.
 * - 124 (`STAFF_ROLE_EDIT`): Edit staff role on the staff role page.
 * - 144 (`STAFF_WORKING_HOURS`): Create/Edit/Remove staff working hours.
 * - 185 (`STORE_COMMISSION_OVERRIDE`): Allow staff to override staff commission at the point of sale.
 * - 41 (`STORE_PRICE`): Temporarily modify the price of products and services at the point of sale.
 * - 40 (`STORE_SELL`): Access to the point of sale store to facilitate the sale of products and services.
 * - 143 (`STORE_SETTINGS_EDIT`): Access to view and edit store settings.
 * - 114 (`SUPPLIER_MANAGE`): Add, remove, and edit supplier profiles.
 * - 111 (`TASK_ADD`): Access to add tasks.
 * - 70 (`TASK_ALL`): Access to view all tasks for all members.
 * - 112 (`TASK_EDIT`): Access to edit tasks.
 * - 81 (`TRANSACTION_DETAIL`): Access to transaction details.
 * - 89 (`TRANSACTION_EDIT`): Access to edit transaction.
 * - 91 (`TRANSACTION_REFUND`): Access to refund transaction.
 * - 242 (`TUITION_ENROLL`): Access to enroll clients in tuition plans via the enrollment wizard.
 * - 243 (`TUITION_MANAGE`): Add, remove, and edit tuition plans, their settings, and assigned instances.
 * - 244 (`TUITION_PAYMENT_CANCEL`): Cancel a client's tuition plan from the Clients tab, stopping all future
 * installments and optionally revoking remaining session access.
 * - 241 (`TUITION_VIEW`): Access to view the tuition plan list and plan details.
 * - 146 (`VIDEO_CATEGORY`): Access to view and change list of video categories.
 * - 147 (`VIDEO_SETUP`): Access to view and change videos in the business video library.
 * - 240 (`VIEW_BALANCE_HISTORY_STATEMENTS`): View the Balance History & Statements tab and generate or email account
 * statements on
 *   the client profile or the Balance Due Report.
 * - 158 (`VIRTUAL_SETUP`): Set up and modify FitLIVE integration.
 * - 74 (`VISIT_NOTE_EDIT`): Access to edit, delete visit notes.
 * - 73 (`VISIT_NOTE_VIEW`): Access to view visit notes.
 * - 151 (`WELLNESSLIVING_ACADEMY`): Access to WellnessLiving Academy.
 * - 180 (`ZAPIER`): Allow access to manage integration with Zapier.
 */
class PrivilegeSid
{
    /** Allows user to view, create or edit knowledge base entries, or conversational flows used by the AI Agent. */
    public const AI_AGENT_KNOWLEDGE_BASE = 225;

    /** Allows user to view reporting and analytics data related to AI Agent performance or usage. */
    public const AI_AGENT_REPORTS = 226;

    /** Allows user to modify configuration or conversational flows used by the AI Agents. */
    public const AI_AGENT_SETTINGS = 227;

    /** Allows user to create, update, or cancel AI Agent subscription plans. */
    public const AI_AGENT_SUBSCRIPTIONS = 228;

    /** View banner alert message on dashboard. */
    public const ALERT_MESSAGE = 142;

    /** Book appointments for clients with negative account balances. */
    public const APPOINTMENT_BOOK_NEGATIVE = 209;

    /** Unpaid appointment booking. */
    public const APPOINTMENT_BOOK_UNPAID = 167;

    /** Book appointments for clients with an unsigned waiver. */
    public const APPOINTMENT_BOOK_UNSIGNED = 203;

    /** Edit appointment at my location. */
    public const APPOINTMENT_EDIT = 50;

    /** Change/View all appointment. */
    public const APPOINTMENT_FOREIGN = 49;

    /** Edit appointment schedule. */
    public const APPOINTMENT_PERIOD = 51;

    /** View appointment. */
    public const APPOINTMENT_VIEW = 52;

    /** Ability to book clients outside their current paid period. */
    public const BOOK_OUTSIDE_PAID_PERIOD = 141;

    /** Ability to book clients over capacity during or after the services have been scheduled. */
    public const BOOK_OVER_CAPACITY = 154;

    /** Ability to book assets which are booked for another service or set as unavailable. */
    public const BOOK_UNAVAILABLE_ASSETS = 138;

    /** Ability to schedule staff members who are booked for another service or set as unavailable. */
    public const BOOK_UNAVAILABLE_STAFF = 137;

    /** Ability to book clients into recurring services even if they do not have an applicable Purchase Option to cover all visits. */
    public const BOOK_UNPAID_RECURRING_APPOINTMENT = 231;

    /** Ability to book clients into recurring services even if they do not have an applicable Purchase Option to cover all visits. */
    public const BOOK_UNPAID_RECURRING_CLASS = 232;

    /** Unpaid asset recurring booking. */
    public const BOOK_UNPAID_RECURRING_RESOURCE = 233;

    /** Manage business. */
    public const BUSINESS_EDIT = 1;

    /** Change business email settings. */
    public const BUSINESS_EMAIL = 117;

    /** Change business policies. */
    public const BUSINESS_POLICY = 120;

    /** Change available services in business. */
    public const BUSINESS_SERVICE = 118;

    /** Change services privileges apply. */
    public const BUSINESS_SERVICE_APPLY = 145;

    /** Change services privileges apply (third button requires second privilege). */
    public const BUSINESS_SERVICE_APPLY_CUSTOM = 165;

    /** Change Design Settings. */
    public const BUSINESS_SKIN = 19;

    /** Change business SMS settings. */
    public const BUSINESS_SMS = 169;

    /** Change business URLs. */
    public const BUSINESS_URL = 119;

    /** Change business online waiver. */
    public const BUSINESS_WAIVER = 121;

    /** Perform Cash Out. */
    public const CASH_OUT = 82;

    /** Edit deposits while perform Cash Out. */
    public const CASH_OUT_DEPOSIT = 83;

    /** Perform editing of Cash Out. */
    public const CASH_OUT_EDIT = 84;

    /** Manage clients' Credit Cards. */
    public const CC_MANAGE = 35;

    /** Manage clients' Credit Cards manually. */
    public const CC_MANAGE_MANUAL = 208;

    /** Edit class schedule. */
    public const CLASS_ATTENDANCE = 48;

    /** Book classes for clients with negative account balances. */
    public const CLASS_BOOK_NEGATIVE = 210;

    /** Add clients to the attendance list of a service, even if they do not have an applicable purchase option. */
    public const CLASS_BOOK_UNPAID = 79;

    /** Book classes for clients with an unsigned waiver. */
    public const CLASS_BOOK_UNSIGNED = 201;

    /** Edit classes at my location. */
    public const CLASS_EDIT = 3;

    /** Allows overriding certain class fields (capacity, price, etc.) when schedule is added. */
    public const CLASS_EDIT_SESSIONS = 238;

    /** Change/View all classes. */
    public const CLASS_FOREIGN = 17;

    /** Lock search bar on class attendance list. */
    public const CLASS_LOCK_SEARCH = 152;

    /** Edit class schedule. */
    public const CLASS_PERIOD = 5;

    /** Allows a staff member to see other staff members' class sessions on the schedule in read-only mode */
    public const CLASS_SCHEDULE_VIEW = 246;

    /** Add and view client's contact logs. */
    public const CONTACT_LOG_MANAGE = 135;

    /** Add, remove, and edit gift cards. */
    public const COUPON = 31;

    /** Delete shared dashboard. */
    public const DASHBOARD_DELETE = 131;

    /** Edit shared dashboard. */
    public const DASHBOARD_EDIT = 130;

    /** Share dashboard. */
    public const DASHBOARD_SHARE = 129;

    /** Add, remove and edit discount codes. */
    public const DISCOUNT_CODE = 76;

    /** Configure Constant Contact settings. */
    public const EML_CONSTANT_CONTACT = 123;

    /** Configure MailChimp settings. */
    public const EML_MAILCHIMP = 122;

    /** Edit class schedule. */
    public const ENROLLMENT_ATTENDANCE = 55;

    /** Book events for clients with negative account balances. */
    public const ENROLLMENT_BOOK_NEGATIVE = 211;

    /** Add clients to the attendance list of a service, even if they do not have an applicable purchase option. */
    public const ENROLLMENT_BOOK_UNPAID = 80;

    /** Book events for clients with an unsigned waiver. */
    public const ENROLLMENT_BOOK_UNSIGNED = 202;

    /** Edit classes at my location. */
    public const ENROLLMENT_EDIT = 54;

    /** Allows overriding certain event fields (capacity, price, etc.) when schedule is added. */
    public const ENROLLMENT_EDIT_SESSIONS = 239;

    /** Change/View all classes. */
    public const ENROLLMENT_FOREIGN = 53;

    /** Lock search bar on enrollment attendance list. */
    public const ENROLLMENT_LOCK_SEARCH = 153;

    /** Allows a staff member to see other staff members' event sessions on the schedule in read-only mode */
    public const ENROLLMENT_SCHEDULE_VIEW = 247;

    /** Manage Enterprise Cloud Fees. */
    public const ENTERPRISE_CLOUD_FEES = 207;

    /** Allows to manage leaderboard in the `FitBuilder` addon. */
    public const FITBUILDER_LEADERBOARD = 190;

    /** Allows to subscribe to `FitBuilder` subscription addon. */
    public const FITBUILDER_SUBSCRIPTION = 189;

    /** Allows to assign workouts from the `FitBuilder` addon to different services. */
    public const FITBUILDER_WORKOUT_ASSIGN = 188;

    /** Allows to add, edit and remove workouts in the `FitBuilder` addon. */
    public const FITBUILDER_WORKOUT_MANAGE = 187;

    /** Allow Staff members to view/complete forms for clients from any location. */
    public const FORM_ALL = 177;

    /** Amend apply to privilege. */
    public const FORM_AMEND_ACCESS = 198;

    /** Allow staff members to make modifications to completed forms on the client profile. */
    public const FORM_AMEND_COMPLETED = 194;

    /** Allow staff members to make modifications to completed forms on the client profile for all clients. */
    public const FORM_AMEND_COMPLETED_ALL = 195;

    /** Allow staff members to make modifications to completed forms on the client profile for clients at staff location. */
    public const FORM_AMEND_COMPLETED_LOCATION = 196;

    /** Allow staff members to make modifications to completed forms on the client profile for self clients. */
    public const FORM_AMEND_COMPLETED_MY_CLIENTS = 197;

    /** Allow staff members to fill in forms for clients. */
    public const FORM_COMPLETE = 178;

    /** Allow staff members to add, edit and delete forms. */
    public const FORM_MANAGE = 160;

    /** Allow Staff members to view/complete forms for clients that belong to them through service offerings. */
    public const FORM_MY_CLIENTS = 175;

    /** Allow Staff members to view/complete forms for clients that belong to the location that they are selected to work at. */
    public const FORM_MY_LOCATION = 176;

    /** Allow staff members to delete forms from the client’s profile. */
    public const FORM_RESPONSE_DELETE = 199;

    /** Allow staff members to view form responses. */
    public const FORM_VIEW_RESPONSE = 161;

    /** Add holidays. */
    public const HOLIDAY = 7;

    /** Allows to import clients from a CSV file. */
    public const IMPORT_CLIENT = 215;

    /** Set up and modify Autymate integration. */
    public const INTEGRATION_AUTYMATE = 163;

    /** Set up and modify Brivo integration. */
    public const INTEGRATION_BRIVO = 179;

    /** Enroll into and manage the WellnessLiving Achieve App. These settings are located under Setup > Achieve Client App. */
    public const INTERFACE_ACHIEVE_APP = 87;

    /** Modify the look and functionality business’s widgets. These settings are located within Setup > Widgets. */
    public const INTERFACE_WIDGET_EDIT = 39;

    /** View the look and functionality business’s widgets. These settings are located within Setup > Widgets. */
    public const INTERFACE_WIDGET_VIEW = 110;

    /** Permission to Receive or Adjust quantity from the Inventory On Hand Report. */
    public const INVENTORY_UPDATE = 157;

    /** Manage my locations except General information. */
    public const LOCATION_EDIT = 9;

    /** Manage tab Location -> General. */
    public const LOCATION_EDIT_GENERAL = 126;

    /** Manage all locations. */
    public const LOCATION_FOREIGN = 8;

    /** Manage franchise locations. */
    public const LOCATION_FRANCHISE = 109;

    /** Logs view. */
    public const LOG_VIEW = 101;

    /** Add client notes and warnings. */
    public const LOGIN_NOTE = 11;

    /** Flag clients. */
    public const LOGIN_NOTE_RESTRICT = 12;

    /** View service add-ons. */
    public const LOGIN_PRODUCT_VIEW = 206;

    /** Access to send mails and sms to clients. */
    public const MAIL_SEND = 75;

    /** Manage announcements. */
    public const MANAGE_ANNOUNCEMENT = 200;

    /** Only the staff roles with this permission provided are able to edit/add/delete the business billing information. */
    public const MANAGE_BILLING_INFORMATION = 134;

    /** View, manage, and analyze CAASI-led conversations. */
    public const MANAGE_CAASI_CONVERSATION = 229;

    /** Manage hardware readers. */
    public const MANAGE_READERS = 181;

    /** Enable, disable, and edit daily deals. */
    public const MARKETING_DD = 43;

    /** Settings pertaining to all automated marketing to clients. */
    public const MARKETING_EMAIL = 42;

    /** Allows to subscribe to email marketing subscription plans and manage existing subscriptions. */
    public const MARKETING_SUBSCRIPTION = 237;

    /** Enabling this permission for a role will enable making and receiving calls in Message Center. */
    public const MESSAGES_CALLS = 173;

    /** Enabling this permission for a role will enable the role to use the ‘Assign to’ field and assign a conversation to a staff member. */
    public const MESSAGES_CONVERSATIONS = 174;

    /** Enabling this permission for a role will grant access to the inbox tab including viewing and sending messages in the Message Center. */
    public const MESSAGES_MANAGE = 170;

    /** Enabling this permission for a role will grant access to the Settings tab including modifying phone number(s) for the business. */
    public const MESSAGES_SETTINGS = 171;

    /** Enabling this permission for a role will grant access and changes to the Subscription Plans tab. */
    public const MESSAGES_SUBSCRIPTION = 172;

    /** Receive new appointment booking / request notification. */
    public const NOTIFICATION_APPOINTMENT_BOOK = 60;

    /** Receive Appointment Booked (AI Agent) notification. */
    public const NOTIFICATION_APPOINTMENT_BOOKED_AI = 218;

    /** Receive appointment cancellation notification. */
    public const NOTIFICATION_APPOINTMENT_CANCEL = 61;

    /** Receive appointment change notification. */
    public const NOTIFICATION_APPOINTMENT_CHANGE = 59;

    /** Receive Appointment Requested (AI Agent) notification. */
    public const NOTIFICATION_APPOINTMENT_REQUEST_AI = 220;

    /** Receive Billing Related Query notification. */
    public const NOTIFICATION_BILLING_RELATED_QUERY = 224;

    /** Receive Cancellation Requested (AI Agent) notification. */
    public const NOTIFICATION_CANCELLATION_REQUEST_AI = 222;

    /** Receive class attendance list. */
    public const NOTIFICATION_CLASS_ATTENDANCE = 56;

    /** Receive client class booking notification. */
    public const NOTIFICATION_CLASS_BOOK = 57;

    /** Receive Class Booking Requested (AI Agent) notification. */
    public const NOTIFICATION_CLASS_BOOK_AI = 221;

    /** Receive Class Booked (AI Agent) notification. */
    public const NOTIFICATION_CLASS_BOOKED_AI = 219;

    /** Receive client class cancellation notification. */
    public const NOTIFICATION_CLASS_CANCEL = 58;

    /** Receive event attendance list. */
    public const NOTIFICATION_EVENT_ATTENDANCE = 62;

    /** Receive client event booking notification. */
    public const NOTIFICATION_EVENT_BOOK = 63;

    /** Receive client event cancellation notification. */
    public const NOTIFICATION_EVENT_CANCEL = 64;

    /** Permissions apply to all appointment schedules. */
    public const NOTIFICATION_FOREIGN = 65;

    /** Receive new lead capture widget notification. */
    public const NOTIFICATION_LEAD_CAPTURE = 159;

    /** Receive Lead Capture (AI Agent) notification. */
    public const NOTIFICATION_LEAD_CAPTURE_AI = 217;

    /** Staff with this role will receive the membership cancel mails. */
    public const NOTIFICATION_MEMBERSHIP_CANCEL = 214;

    /** Receive Membership or Purchase Options Query notification. */
    public const NOTIFICATION_MEMBERSHIP_QUERY = 223;

    /** Staff with this role will receive emails about reward prizes. */
    public const NOTIFICATION_PRIZE_REDEMPTION = 90;

    /** Staff with this role will receive the inventory mails. */
    public const NOTIFICATION_PRODUCT_INVENTORY = 77;

    /** Receive new quiz notification form staff. */
    public const NOTIFICATION_QUIZ = 162;

    /** Staff with this role will receive customer review notifications. */
    public const NOTIFICATION_REVIEW = 66;

    /** Staff with this role will receive the sale receipts mails. */
    public const NOTIFICATION_SALE_STAFF = 136;

    /** Receive Staff Callback Request notification. */
    public const NOTIFICATION_STAFF_CALLBACK_REQUEST = 216;

    /** Override late cancel and no show fees. */
    public const OVERRIDE_FEE = 164;

    /** Manage partner program. */
    public const PARTNER_PROGRAM_MANAGE = 94;

    /** Access to Payment Processing. */
    public const PAYMENT_PROCESSING = 166;

    /** Allows the staff member to initiate bulk billing of multiple clients in one batch. */
    public const PERFORM_BULK_BILLING = 245;

    /** Permission to perform Physical Inventory Count. */
    public const PHYSICAL_INVENTORY_COUNT = 156;

    /** Staff member with this role will be able to send postcards. */
    public const POSTCARD_SEND = 88;

    /** Delete shared power searches. */
    public const POWER_SEARCH_DELETE = 106;

    /** Edit shared power searches. */
    public const POWER_SEARCH_EDIT = 105;

    /** Share power searches with other staff members. */
    public const POWER_SEARCH_SHARE = 107;

    /** Ability to request subscription plan for custom website. */
    public const PRESENCE = 149;

    /** Edit products but not product name and description. */
    public const PRODUCT_DESCRIPTION_EDIT = 113;

    /** Add, remove, and edit products in the online store. */
    public const PRODUCT_MANAGE = 34;

    /** Manage all clients. */
    public const PROFILE_ALL = 24;

    /** This permission allows users to delete client profiles. */
    public const PROFILE_DELETE = 230;

    /** This permission allows users to view client details throughout the interface. */
    public const PROFILE_DETAIL = 67;

    /** Manage profile client groups (only create, delete and rename a group). */
    public const PROFILE_GROUP_MANAGE = 69;

    /** Manage client group members (only members, not a group itself). */
    public const PROFILE_GROUP_MEMBER_MANAGE = 191;

    /** Merge client profiles. */
    public const PROFILE_MERGE = 213;

    /** Manage clients from my location. */
    public const PROFILE_MY_LOCATION = 86;

    /** View client’s upcoming and past schedule. */
    public const PROFILE_SCHEDULE = 205;

    /** Manage profile client type. */
    public const PROFILE_TYPE_EDIT = 68;

    /** Manage all clients. */
    public const PROFILE_VIEW = 13;

    /** Manage progress log. */
    public const PROGRESS_LOG_MANAGE = 102;

    /** Edit progress log in profile. */
    public const PROGRESS_LOG_PROFILE = 104;

    /** Add, remove, and edit purchase options and packages for services. */
    public const PROMOTION_MANAGE = 25;

    /** Allows to edit only base information about purchase option. */
    public const PROMOTION_MANAGE_BASE = 127;

    /** Access to edit client purchases (passes and memberships). */
    public const PURCHASE_EDIT = 93;

    /** Access to view client purchases (passes and memberships). */
    public const PURCHASE_VIEW = 92;

    /** Allow to see alerts. */
    public const RECEIVE_ALERT = 193;

    /** Access to view reports for all staff. */
    public const REPORT_ALL = 71;

    /** Reports attendance. */
    public const REPORT_ATTENDANCE = 27;

    /** Reports client. */
    public const REPORT_CLIENT = 26;

    /** Reports with cash closeout information. */
    public const REPORT_CLOSEOUT = 85;

    /** Export and print button in reports. */
    public const REPORT_EXPORT_PRINT = 186;

    /** Reports with franchise information. */
    public const REPORT_FRANCHISE = 108;

    /** Wellness Programs reports. */
    public const REPORT_INSURANCE = 115;

    /** Ability to generate, export and import insurance reimbursement files. */
    public const REPORT_INSURANCE_FILE = 155;

    /** Reports emails. */
    public const REPORT_MAIL = 30;

    /** Reports sales. */
    public const REPORT_SALE = 29;

    /** Ability to view purchase report for specific user. */
    public const REPORT_SALE_USER = 125;

    /** Reports staff. */
    public const REPORT_STAFF = 28;

    /** Manage assets. */
    public const RESOURCE = 37;

    /** Book assets for clients with negative account balances. */
    public const RESOURCE_BOOK_NEGATIVE = 212;

    /** Unpaid asset booking. */
    public const RESOURCE_BOOK_UNPAID = 168;

    /** Book assets for clients with an unsigned waiver. */
    public const RESOURCE_BOOK_UNSIGNED = 204;

    /** Mark client reviews as inappropriate and respond to customer comments. */
    public const REVIEW_FLAG = 18;

    /** Create contests on the leaderboard. */
    public const REWARD_LEADERBOARD = 44;

    /** Rules related to point accumulation. */
    public const REWARD_POINT_MANAGE = 46;

    /** Clear the total accumulated points for all clients. */
    public const REWARD_POINT_RESET = 45;

    /** Define prizes and the number of points that are required to redeem. */
    public const REWARD_PRIZE = 47;

    /** Enable SABA single sign on and create SABA accounts. */
    public const SABA = 116;

    /** View canceled classes from the schedule. */
    public const SCHEDULE_CANCELED_CLASS = 139;

    /** View canceled classes from the schedule. */
    public const SCHEDULE_CANCELED_ENROLLMENT = 140;

    /** Scheduling and editing future sessions of the appointments. */
    public const SCHEDULE_FUTURE_APPOINTMENT = 95;

    /** Scheduling sessions of the assets. */
    public const SCHEDULE_FUTURE_ASSETS = 128;

    /** Scheduling and editing future sessions of the classes. */
    public const SCHEDULE_FUTURE_CLASS = 96;

    /** Scheduling and editing future sessions of the events. */
    public const SCHEDULE_FUTURE_EVENT = 99;

    /** Scheduling and editing past sessions of the appointments. */
    public const SCHEDULE_PAST_APPOINTMENT = 97;

    /** Scheduling and editing past sessions of the classes. */
    public const SCHEDULE_PAST_CLASS = 98;

    /** Scheduling and editing past sessions of the events. */
    public const SCHEDULE_PAST_EVENT = 100;

    /** View a summary of projected and earned service revenue generated from scheduled and completed sessions. */
    public const SCHEDULE_SUMMARY_REVENUE_SERVICE = 234;

    /** View a summary of projected pay from upcoming sessions and earned pay from completed sessions, based on the staff’s schedule. */
    public const SCHEDULE_SUMMARY_REVENUE_STAFF = 235;

    /** Allows sign service agreement. */
    public const SERVICE_AGREEMENT_SIGN = 133;

    /** View, modify and delete shop categories. */
    public const SHOP_CATEGORY = 78;

    /** Modify the clock-in and clock-out times for staff members. */
    public const STAFF_CLOCK = 32;

    /** Add, remove, and edit staff profiles. */
    public const STAFF_EDIT = 14;

    /** Edit own staff profile. */
    public const STAFF_EDIT_OWN = 150;

    /** Modify pay rates for products and Purchase Options. */
    public const STAFF_MODIFY_RATES_PRODUCT = 184;

    /** Modify pay rates for services. */
    public const STAFF_MODIFY_RATES_SERVICE = 183;

    /** Modify the clock-in and clock-out times for your own staff profile. */
    public const STAFF_MY_CLOCK = 192;

    /** Add, remove, and edit staff pay rates. */
    public const STAFF_PAY_ALL = 20;

    /** Change staff role on the staff edit page. */
    public const STAFF_ROLE_CHANGE = 72;

    /** Edit staff role on the staff role page. */
    public const STAFF_ROLE_EDIT = 124;

    /** Create/Edit/Remove staff working hours. */
    public const STAFF_WORKING_HOURS = 144;

    /** Allow staff to override staff commission at the point of sale. */
    public const STORE_COMMISSION_OVERRIDE = 185;

    /** Temporarily modify the price of products and services at the point of sale. */
    public const STORE_PRICE = 41;

    /** Access to the point of sale store to facilitate the sale of products and services. */
    public const STORE_SELL = 40;

    /** Access to view and edit store settings. */
    public const STORE_SETTINGS_EDIT = 143;

    /** Add, remove, and edit supplier profiles. */
    public const SUPPLIER_MANAGE = 114;

    /** Access to add tasks. */
    public const TASK_ADD = 111;

    /** Access to view all tasks for all members. */
    public const TASK_ALL = 70;

    /** Access to edit tasks. */
    public const TASK_EDIT = 112;

    /** Access to transaction details. */
    public const TRANSACTION_DETAIL = 81;

    /** Access to edit transaction. */
    public const TRANSACTION_EDIT = 89;

    /** Access to refund transaction. */
    public const TRANSACTION_REFUND = 91;

    /** Access to enroll clients in tuition plans via the enrollment wizard. */
    public const TUITION_ENROLL = 242;

    /** Add, remove, and edit tuition plans, their settings, and assigned instances. */
    public const TUITION_MANAGE = 243;

    /** Cancel a client's tuition plan from the Clients tab, stopping all future installments and optionally revoking remaining session access. */
    public const TUITION_PAYMENT_CANCEL = 244;

    /** Access to view the tuition plan list and plan details. */
    public const TUITION_VIEW = 241;

    /** Access to view and change list of video categories. */
    public const VIDEO_CATEGORY = 146;

    /** Access to view and change videos in the business video library. */
    public const VIDEO_SETUP = 147;

    /** View the Balance History & Statements tab and generate or email account statements on */
    public const VIEW_BALANCE_HISTORY_STATEMENTS = 240;

    /** Set up and modify FitLIVE integration. */
    public const VIRTUAL_SETUP = 158;

    /** Access to edit, delete visit notes. */
    public const VISIT_NOTE_EDIT = 74;

    /** Access to view visit notes. */
    public const VISIT_NOTE_VIEW = 73;

    /** Access to WellnessLiving Academy. */
    public const WELLNESSLIVING_ACADEMY = 151;

    /** Allow access to manage integration with Zapier. */
    public const ZAPIER = 180;
}
