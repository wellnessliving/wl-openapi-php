<?php
namespace WlSdk\Wl\Privilege;

/**
 * Wellnessliving-wide privileges.
 * 
 * Last Used ID: 244.
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
 * - 199 (`FORM_RESPONSE_DELETE`): Allow staff members to delete forms from the client’s profil
 * - 161 (`FORM_VIEW_RESPONSE`): Allow staff members to view form responses.
 * - 7 (`HOLIDAY`): Add holidays.
 * - 215 (`IMPORT_CLIENT`): Allows to import clients from a CSV file.
 * - 163 (`INTEGRATION_AUTYMATE`): Set up and modify Autymate integration.
 * - 179 (`INTEGRATION_BRIVO`): Set up and modify Brivo integration.
 * - 87 (`INTERFACE_ACHIEVE_APP`): Enroll into and manage the WellnessLiving Achieve App. These settings are located
 * under Setup &gt; Achieve Client App.
 * - 39 (`INTERFACE_WIDGET_EDIT`): Modify the look and functionality business’s widgets. These settings are located
 * within Setup &gt; Widget
 * - 110 (`INTERFACE_WIDGET_VIEW`): View the look and functionality business’s widgets. These settings are located
 * within Setup &gt; Widget
 * - 157 (`INVENTORY_UPDATE`): Permission to Receive or Adjust quantity from the Inventory On Hand Report.
 * - 9 (`LOCATION_EDIT`): Manage my locations except General information.
 * - 126 (`LOCATION_EDIT_GENERAL`): Manage tab Location -&gt; General.
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
 * to’ field and assign a conversation to a staff mem
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
 * - 205 (`PROFILE_SCHEDULE`): View client’s upcoming and past schedul
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
 * completed sessions, based on the staff’s schedul
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
    const AI_AGENT_KNOWLEDGE_BASE = 225;
    /** Allows user to view reporting and analytics data related to AI Agent performance or usage. */
    const AI_AGENT_REPORTS = 226;
    /** Allows user to modify configuration or conversational flows used by the AI Agents. */
    const AI_AGENT_SETTINGS = 227;
    /** Allows user to create, update, or cancel AI Agent subscription plans. */
    const AI_AGENT_SUBSCRIPTIONS = 228;
    /** View banner alert message on dashboard. */
    const ALERT_MESSAGE = 142;
    /** Book appointments for clients with negative account balances. */
    const APPOINTMENT_BOOK_NEGATIVE = 209;
    /** Unpaid appointment booking. */
    const APPOINTMENT_BOOK_UNPAID = 167;
    /** Book appointments for clients with an unsigned waiver. */
    const APPOINTMENT_BOOK_UNSIGNED = 203;
    /** Edit appointment at my location. */
    const APPOINTMENT_EDIT = 50;
    /** Change/View all appointment. */
    const APPOINTMENT_FOREIGN = 49;
    /** Edit appointment schedule. */
    const APPOINTMENT_PERIOD = 51;
    /** View appointment. */
    const APPOINTMENT_VIEW = 52;
    /** Ability to book clients outside their current paid period. */
    const BOOK_OUTSIDE_PAID_PERIOD = 141;
    /** Ability to book clients over capacity during or after the services have been scheduled. */
    const BOOK_OVER_CAPACITY = 154;
    /** Ability to book assets which are booked for another service or set as unavailable. */
    const BOOK_UNAVAILABLE_ASSETS = 138;
    /** Ability to schedule staff members who are booked for another service or set as unavailable. */
    const BOOK_UNAVAILABLE_STAFF = 137;
    /** Ability to book clients into recurring services even if they do not have an applicable Purchase Option to cover all visits. */
    const BOOK_UNPAID_RECURRING_APPOINTMENT = 231;
    /** Ability to book clients into recurring services even if they do not have an applicable Purchase Option to cover all visits. */
    const BOOK_UNPAID_RECURRING_CLASS = 232;
    /** Unpaid asset recurring booking. */
    const BOOK_UNPAID_RECURRING_RESOURCE = 233;
    /** Manage business. */
    const BUSINESS_EDIT = 1;
    /** Change business email settings. */
    const BUSINESS_EMAIL = 117;
    /** Change business policies. */
    const BUSINESS_POLICY = 120;
    /** Change available services in business. */
    const BUSINESS_SERVICE = 118;
    /** Change services privileges apply. */
    const BUSINESS_SERVICE_APPLY = 145;
    /** Change services privileges apply (third button requires second privilege). */
    const BUSINESS_SERVICE_APPLY_CUSTOM = 165;
    /** Change Design Settings. */
    const BUSINESS_SKIN = 19;
    /** Change business SMS settings. */
    const BUSINESS_SMS = 169;
    /** Change business URLs. */
    const BUSINESS_URL = 119;
    /** Change business online waiver. */
    const BUSINESS_WAIVER = 121;
    /** Perform Cash Out. */
    const CASH_OUT = 82;
    /** Edit deposits while perform Cash Out. */
    const CASH_OUT_DEPOSIT = 83;
    /** Perform editing of Cash Out. */
    const CASH_OUT_EDIT = 84;
    /** Manage clients' Credit Cards. */
    const CC_MANAGE = 35;
    /** Manage clients' Credit Cards manually. */
    const CC_MANAGE_MANUAL = 208;
    /** Edit class schedule. */
    const CLASS_ATTENDANCE = 48;
    /** Book classes for clients with negative account balances. */
    const CLASS_BOOK_NEGATIVE = 210;
    /** Add clients to the attendance list of a service, even if they do not have an applicable purchase option. */
    const CLASS_BOOK_UNPAID = 79;
    /** Book classes for clients with an unsigned waiver. */
    const CLASS_BOOK_UNSIGNED = 201;
    /** Edit classes at my location. */
    const CLASS_EDIT = 3;
    /** Allows overriding certain class fields (capacity, price, etc.) when schedule is added. */
    const CLASS_EDIT_SESSIONS = 238;
    /** Change/View all classes. */
    const CLASS_FOREIGN = 17;
    /** Lock search bar on class attendance list. */
    const CLASS_LOCK_SEARCH = 152;
    /** Edit class schedule. */
    const CLASS_PERIOD = 5;
    /** Add and view client's contact logs. */
    const CONTACT_LOG_MANAGE = 135;
    /** Add, remove, and edit gift cards. */
    const COUPON = 31;
    /** Delete shared dashboard. */
    const DASHBOARD_DELETE = 131;
    /** Edit shared dashboard. */
    const DASHBOARD_EDIT = 130;
    /** Share dashboard. */
    const DASHBOARD_SHARE = 129;
    /** Add, remove and edit discount codes. */
    const DISCOUNT_CODE = 76;
    /** Configure Constant Contact settings. */
    const EML_CONSTANT_CONTACT = 123;
    /** Configure MailChimp settings. */
    const EML_MAILCHIMP = 122;
    /** Edit class schedule. */
    const ENROLLMENT_ATTENDANCE = 55;
    /** Book events for clients with negative account balances. */
    const ENROLLMENT_BOOK_NEGATIVE = 211;
    /** Add clients to the attendance list of a service, even if they do not have an applicable purchase option. */
    const ENROLLMENT_BOOK_UNPAID = 80;
    /** Book events for clients with an unsigned waiver. */
    const ENROLLMENT_BOOK_UNSIGNED = 202;
    /** Edit classes at my location. */
    const ENROLLMENT_EDIT = 54;
    /** Allows overriding certain event fields (capacity, price, etc.) when schedule is added. */
    const ENROLLMENT_EDIT_SESSIONS = 239;
    /** Change/View all classes. */
    const ENROLLMENT_FOREIGN = 53;
    /** Lock search bar on enrollment attendance list. */
    const ENROLLMENT_LOCK_SEARCH = 153;
    /** Manage Enterprise Cloud Fees. */
    const ENTERPRISE_CLOUD_FEES = 207;
    /** Allows to manage leaderboard in the `FitBuilder` addon. */
    const FITBUILDER_LEADERBOARD = 190;
    /** Allows to subscribe to `FitBuilder` subscription addon. */
    const FITBUILDER_SUBSCRIPTION = 189;
    /** Allows to assign workouts from the `FitBuilder` addon to different services. */
    const FITBUILDER_WORKOUT_ASSIGN = 188;
    /** Allows to add, edit and remove workouts in the `FitBuilder` addon. */
    const FITBUILDER_WORKOUT_MANAGE = 187;
    /** Allow Staff members to view/complete forms for clients from any location. */
    const FORM_ALL = 177;
    /** Amend apply to privilege. */
    const FORM_AMEND_ACCESS = 198;
    /** Allow staff members to make modifications to completed forms on the client profile. */
    const FORM_AMEND_COMPLETED = 194;
    /** Allow staff members to make modifications to completed forms on the client profile for all clients. */
    const FORM_AMEND_COMPLETED_ALL = 195;
    /** Allow staff members to make modifications to completed forms on the client profile for clients at staff location. */
    const FORM_AMEND_COMPLETED_LOCATION = 196;
    /** Allow staff members to make modifications to completed forms on the client profile for self clients. */
    const FORM_AMEND_COMPLETED_MY_CLIENTS = 197;
    /** Allow staff members to fill in forms for clients. */
    const FORM_COMPLETE = 178;
    /** Allow staff members to add, edit and delete forms. */
    const FORM_MANAGE = 160;
    /** Allow Staff members to view/complete forms for clients that belong to them through service offerings. */
    const FORM_MY_CLIENTS = 175;
    /** Allow Staff members to view/complete forms for clients that belong to the location that they are selected to work at. */
    const FORM_MY_LOCATION = 176;
    /** Allow staff members to delete forms from the client’s profil */
    const FORM_RESPONSE_DELETE = 199;
    /** Allow staff members to view form responses. */
    const FORM_VIEW_RESPONSE = 161;
    /** Add holidays. */
    const HOLIDAY = 7;
    /** Allows to import clients from a CSV file. */
    const IMPORT_CLIENT = 215;
    /** Set up and modify Autymate integration. */
    const INTEGRATION_AUTYMATE = 163;
    /** Set up and modify Brivo integration. */
    const INTEGRATION_BRIVO = 179;
    /** Enroll into and manage the WellnessLiving Achieve App. These settings are located under Setup &gt; Achieve Client App. */
    const INTERFACE_ACHIEVE_APP = 87;
    /** Modify the look and functionality business’s widgets. These settings are located within Setup &gt; Widget */
    const INTERFACE_WIDGET_EDIT = 39;
    /** View the look and functionality business’s widgets. These settings are located within Setup &gt; Widget */
    const INTERFACE_WIDGET_VIEW = 110;
    /** Permission to Receive or Adjust quantity from the Inventory On Hand Report. */
    const INVENTORY_UPDATE = 157;
    /** Manage my locations except General information. */
    const LOCATION_EDIT = 9;
    /** Manage tab Location -&gt; General. */
    const LOCATION_EDIT_GENERAL = 126;
    /** Manage all locations. */
    const LOCATION_FOREIGN = 8;
    /** Manage franchise locations. */
    const LOCATION_FRANCHISE = 109;
    /** Logs view. */
    const LOG_VIEW = 101;
    /** Add client notes and warnings. */
    const LOGIN_NOTE = 11;
    /** Flag clients. */
    const LOGIN_NOTE_RESTRICT = 12;
    /** View service add-ons. */
    const LOGIN_PRODUCT_VIEW = 206;
    /** Access to send mails and sms to clients. */
    const MAIL_SEND = 75;
    /** Manage announcements. */
    const MANAGE_ANNOUNCEMENT = 200;
    /** Only the staff roles with this permission provided are able to edit/add/delete the business billing information. */
    const MANAGE_BILLING_INFORMATION = 134;
    /** View, manage, and analyze CAASI-led conversations. */
    const MANAGE_CAASI_CONVERSATION = 229;
    /** Manage hardware readers. */
    const MANAGE_READERS = 181;
    /** Enable, disable, and edit daily deals. */
    const MARKETING_DD = 43;
    /** Settings pertaining to all automated marketing to clients. */
    const MARKETING_EMAIL = 42;
    /** Allows to subscribe to email marketing subscription plans and manage existing subscriptions. */
    const MARKETING_SUBSCRIPTION = 237;
    /** Enabling this permission for a role will enable making and receiving calls in Message Center. */
    const MESSAGES_CALLS = 173;
    /** Enabling this permission for a role will enable the role to use the ‘Assign to’ field and assign a conversation to a staff mem */
    const MESSAGES_CONVERSATIONS = 174;
    /** Enabling this permission for a role will grant access to the inbox tab including viewing and sending messages in the Message Center. */
    const MESSAGES_MANAGE = 170;
    /** Enabling this permission for a role will grant access to the Settings tab including modifying phone number(s) for the business. */
    const MESSAGES_SETTINGS = 171;
    /** Enabling this permission for a role will grant access and changes to the Subscription Plans tab. */
    const MESSAGES_SUBSCRIPTION = 172;
    /** Receive new appointment booking / request notification. */
    const NOTIFICATION_APPOINTMENT_BOOK = 60;
    /** Receive Appointment Booked (AI Agent) notification. */
    const NOTIFICATION_APPOINTMENT_BOOKED_AI = 218;
    /** Receive appointment cancellation notification. */
    const NOTIFICATION_APPOINTMENT_CANCEL = 61;
    /** Receive appointment change notification. */
    const NOTIFICATION_APPOINTMENT_CHANGE = 59;
    /** Receive Appointment Requested (AI Agent) notification. */
    const NOTIFICATION_APPOINTMENT_REQUEST_AI = 220;
    /** Receive Billing Related Query notification. */
    const NOTIFICATION_BILLING_RELATED_QUERY = 224;
    /** Receive Cancellation Requested (AI Agent) notification. */
    const NOTIFICATION_CANCELLATION_REQUEST_AI = 222;
    /** Receive class attendance list. */
    const NOTIFICATION_CLASS_ATTENDANCE = 56;
    /** Receive client class booking notification. */
    const NOTIFICATION_CLASS_BOOK = 57;
    /** Receive Class Booking Requested (AI Agent) notification. */
    const NOTIFICATION_CLASS_BOOK_AI = 221;
    /** Receive Class Booked (AI Agent) notification. */
    const NOTIFICATION_CLASS_BOOKED_AI = 219;
    /** Receive client class cancellation notification. */
    const NOTIFICATION_CLASS_CANCEL = 58;
    /** Receive event attendance list. */
    const NOTIFICATION_EVENT_ATTENDANCE = 62;
    /** Receive client event booking notification. */
    const NOTIFICATION_EVENT_BOOK = 63;
    /** Receive client event cancellation notification. */
    const NOTIFICATION_EVENT_CANCEL = 64;
    /** Permissions apply to all appointment schedules. */
    const NOTIFICATION_FOREIGN = 65;
    /** Receive new lead capture widget notification. */
    const NOTIFICATION_LEAD_CAPTURE = 159;
    /** Receive Lead Capture (AI Agent) notification. */
    const NOTIFICATION_LEAD_CAPTURE_AI = 217;
    /** Staff with this role will receive the membership cancel mails. */
    const NOTIFICATION_MEMBERSHIP_CANCEL = 214;
    /** Receive Membership or Purchase Options Query notification. */
    const NOTIFICATION_MEMBERSHIP_QUERY = 223;
    /** Staff with this role will receive emails about reward prizes. */
    const NOTIFICATION_PRIZE_REDEMPTION = 90;
    /** Staff with this role will receive the inventory mails. */
    const NOTIFICATION_PRODUCT_INVENTORY = 77;
    /** Receive new quiz notification form staff. */
    const NOTIFICATION_QUIZ = 162;
    /** Staff with this role will receive customer review notifications. */
    const NOTIFICATION_REVIEW = 66;
    /** Staff with this role will receive the sale receipts mails. */
    const NOTIFICATION_SALE_STAFF = 136;
    /** Receive Staff Callback Request notification. */
    const NOTIFICATION_STAFF_CALLBACK_REQUEST = 216;
    /** Override late cancel and no show fees. */
    const OVERRIDE_FEE = 164;
    /** Manage partner program. */
    const PARTNER_PROGRAM_MANAGE = 94;
    /** Access to Payment Processing. */
    const PAYMENT_PROCESSING = 166;
    /** Permission to perform Physical Inventory Count. */
    const PHYSICAL_INVENTORY_COUNT = 156;
    /** Staff member with this role will be able to send postcards. */
    const POSTCARD_SEND = 88;
    /** Delete shared power searches. */
    const POWER_SEARCH_DELETE = 106;
    /** Edit shared power searches. */
    const POWER_SEARCH_EDIT = 105;
    /** Share power searches with other staff members. */
    const POWER_SEARCH_SHARE = 107;
    /** Ability to request subscription plan for custom website. */
    const PRESENCE = 149;
    /** Edit products but not product name and description. */
    const PRODUCT_DESCRIPTION_EDIT = 113;
    /** Add, remove, and edit products in the online store. */
    const PRODUCT_MANAGE = 34;
    /** Manage all clients. */
    const PROFILE_ALL = 24;
    /** This permission allows users to delete client profiles. */
    const PROFILE_DELETE = 230;
    /** This permission allows users to view client details throughout the interface. */
    const PROFILE_DETAIL = 67;
    /** Manage profile client groups (only create, delete and rename a group). */
    const PROFILE_GROUP_MANAGE = 69;
    /** Manage client group members (only members, not a group itself). */
    const PROFILE_GROUP_MEMBER_MANAGE = 191;
    /** Merge client profiles. */
    const PROFILE_MERGE = 213;
    /** Manage clients from my location. */
    const PROFILE_MY_LOCATION = 86;
    /** View client’s upcoming and past schedul */
    const PROFILE_SCHEDULE = 205;
    /** Manage profile client type. */
    const PROFILE_TYPE_EDIT = 68;
    /** Manage all clients. */
    const PROFILE_VIEW = 13;
    /** Manage progress log. */
    const PROGRESS_LOG_MANAGE = 102;
    /** Edit progress log in profile. */
    const PROGRESS_LOG_PROFILE = 104;
    /** Add, remove, and edit purchase options and packages for services. */
    const PROMOTION_MANAGE = 25;
    /** Allows to edit only base information about purchase option. */
    const PROMOTION_MANAGE_BASE = 127;
    /** Access to edit client purchases (passes and memberships). */
    const PURCHASE_EDIT = 93;
    /** Access to view client purchases (passes and memberships). */
    const PURCHASE_VIEW = 92;
    /** Allow to see alerts. */
    const RECEIVE_ALERT = 193;
    /** Access to view reports for all staff. */
    const REPORT_ALL = 71;
    /** Reports attendance. */
    const REPORT_ATTENDANCE = 27;
    /** Reports client. */
    const REPORT_CLIENT = 26;
    /** Reports with cash closeout information. */
    const REPORT_CLOSEOUT = 85;
    /** Export and print button in reports. */
    const REPORT_EXPORT_PRINT = 186;
    /** Reports with franchise information. */
    const REPORT_FRANCHISE = 108;
    /** Wellness Programs reports. */
    const REPORT_INSURANCE = 115;
    /** Ability to generate, export and import insurance reimbursement files. */
    const REPORT_INSURANCE_FILE = 155;
    /** Reports emails. */
    const REPORT_MAIL = 30;
    /** Reports sales. */
    const REPORT_SALE = 29;
    /** Ability to view purchase report for specific user. */
    const REPORT_SALE_USER = 125;
    /** Reports staff. */
    const REPORT_STAFF = 28;
    /** Manage assets. */
    const RESOURCE = 37;
    /** Book assets for clients with negative account balances. */
    const RESOURCE_BOOK_NEGATIVE = 212;
    /** Unpaid asset booking. */
    const RESOURCE_BOOK_UNPAID = 168;
    /** Book assets for clients with an unsigned waiver. */
    const RESOURCE_BOOK_UNSIGNED = 204;
    /** Mark client reviews as inappropriate and respond to customer comments. */
    const REVIEW_FLAG = 18;
    /** Create contests on the leaderboard. */
    const REWARD_LEADERBOARD = 44;
    /** Rules related to point accumulation. */
    const REWARD_POINT_MANAGE = 46;
    /** Clear the total accumulated points for all clients. */
    const REWARD_POINT_RESET = 45;
    /** Define prizes and the number of points that are required to redeem. */
    const REWARD_PRIZE = 47;
    /** Enable SABA single sign on and create SABA accounts. */
    const SABA = 116;
    /** View canceled classes from the schedule. */
    const SCHEDULE_CANCELED_CLASS = 139;
    /** View canceled classes from the schedule. */
    const SCHEDULE_CANCELED_ENROLLMENT = 140;
    /** Scheduling and editing future sessions of the appointments. */
    const SCHEDULE_FUTURE_APPOINTMENT = 95;
    /** Scheduling sessions of the assets. */
    const SCHEDULE_FUTURE_ASSETS = 128;
    /** Scheduling and editing future sessions of the classes. */
    const SCHEDULE_FUTURE_CLASS = 96;
    /** Scheduling and editing future sessions of the events. */
    const SCHEDULE_FUTURE_EVENT = 99;
    /** Scheduling and editing past sessions of the appointments. */
    const SCHEDULE_PAST_APPOINTMENT = 97;
    /** Scheduling and editing past sessions of the classes. */
    const SCHEDULE_PAST_CLASS = 98;
    /** Scheduling and editing past sessions of the events. */
    const SCHEDULE_PAST_EVENT = 100;
    /** View a summary of projected and earned service revenue generated from scheduled and completed sessions. */
    const SCHEDULE_SUMMARY_REVENUE_SERVICE = 234;
    /** View a summary of projected pay from upcoming sessions and earned pay from completed sessions, based on the staff’s schedul */
    const SCHEDULE_SUMMARY_REVENUE_STAFF = 235;
    /** Allows sign service agreement. */
    const SERVICE_AGREEMENT_SIGN = 133;
    /** View, modify and delete shop categories. */
    const SHOP_CATEGORY = 78;
    /** Modify the clock-in and clock-out times for staff members. */
    const STAFF_CLOCK = 32;
    /** Add, remove, and edit staff profiles. */
    const STAFF_EDIT = 14;
    /** Edit own staff profile. */
    const STAFF_EDIT_OWN = 150;
    /** Modify pay rates for products and Purchase Options. */
    const STAFF_MODIFY_RATES_PRODUCT = 184;
    /** Modify pay rates for services. */
    const STAFF_MODIFY_RATES_SERVICE = 183;
    /** Modify the clock-in and clock-out times for your own staff profile. */
    const STAFF_MY_CLOCK = 192;
    /** Add, remove, and edit staff pay rates. */
    const STAFF_PAY_ALL = 20;
    /** Change staff role on the staff edit page. */
    const STAFF_ROLE_CHANGE = 72;
    /** Edit staff role on the staff role page. */
    const STAFF_ROLE_EDIT = 124;
    /** Create/Edit/Remove staff working hours. */
    const STAFF_WORKING_HOURS = 144;
    /** Allow staff to override staff commission at the point of sale. */
    const STORE_COMMISSION_OVERRIDE = 185;
    /** Temporarily modify the price of products and services at the point of sale. */
    const STORE_PRICE = 41;
    /** Access to the point of sale store to facilitate the sale of products and services. */
    const STORE_SELL = 40;
    /** Access to view and edit store settings. */
    const STORE_SETTINGS_EDIT = 143;
    /** Add, remove, and edit supplier profiles. */
    const SUPPLIER_MANAGE = 114;
    /** Access to add tasks. */
    const TASK_ADD = 111;
    /** Access to view all tasks for all members. */
    const TASK_ALL = 70;
    /** Access to edit tasks. */
    const TASK_EDIT = 112;
    /** Access to transaction details. */
    const TRANSACTION_DETAIL = 81;
    /** Access to edit transaction. */
    const TRANSACTION_EDIT = 89;
    /** Access to refund transaction. */
    const TRANSACTION_REFUND = 91;
    /** Access to enroll clients in tuition plans via the enrollment wizard. */
    const TUITION_ENROLL = 242;
    /** Add, remove, and edit tuition plans, their settings, and assigned instances. */
    const TUITION_MANAGE = 243;
    /** Cancel a client's tuition plan from the Clients tab, stopping all future installments and optionally revoking remaining session access. */
    const TUITION_PAYMENT_CANCEL = 244;
    /** Access to view the tuition plan list and plan details. */
    const TUITION_VIEW = 241;
    /** Access to view and change list of video categories. */
    const VIDEO_CATEGORY = 146;
    /** Access to view and change videos in the business video library. */
    const VIDEO_SETUP = 147;
    /** View the Balance History & Statements tab and generate or email account statements on */
    const VIEW_BALANCE_HISTORY_STATEMENTS = 240;
    /** Set up and modify FitLIVE integration. */
    const VIRTUAL_SETUP = 158;
    /** Access to edit, delete visit notes. */
    const VISIT_NOTE_EDIT = 74;
    /** Access to view visit notes. */
    const VISIT_NOTE_VIEW = 73;
    /** Access to WellnessLiving Academy. */
    const WELLNESSLIVING_ACADEMY = 151;
    /** Allow access to manage integration with Zapier. */
    const ZAPIER = 180;
}
