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
enum PrivilegeSid: int
{
    case AI_AGENT_KNOWLEDGE_BASE = 225;
    case AI_AGENT_REPORTS = 226;
    case AI_AGENT_SETTINGS = 227;
    case AI_AGENT_SUBSCRIPTIONS = 228;
    case ALERT_MESSAGE = 142;
    case APPOINTMENT_BOOK_NEGATIVE = 209;
    case APPOINTMENT_BOOK_UNPAID = 167;
    case APPOINTMENT_BOOK_UNSIGNED = 203;
    case APPOINTMENT_EDIT = 50;
    case APPOINTMENT_FOREIGN = 49;
    case APPOINTMENT_PERIOD = 51;
    case APPOINTMENT_VIEW = 52;
    case BOOK_OUTSIDE_PAID_PERIOD = 141;
    case BOOK_OVER_CAPACITY = 154;
    case BOOK_UNAVAILABLE_ASSETS = 138;
    case BOOK_UNAVAILABLE_STAFF = 137;
    case BOOK_UNPAID_RECURRING_APPOINTMENT = 231;
    case BOOK_UNPAID_RECURRING_CLASS = 232;
    case BOOK_UNPAID_RECURRING_RESOURCE = 233;
    case BUSINESS_EDIT = 1;
    case BUSINESS_EMAIL = 117;
    case BUSINESS_POLICY = 120;
    case BUSINESS_SERVICE = 118;
    case BUSINESS_SERVICE_APPLY = 145;
    case BUSINESS_SERVICE_APPLY_CUSTOM = 165;
    case BUSINESS_SKIN = 19;
    case BUSINESS_SMS = 169;
    case BUSINESS_URL = 119;
    case BUSINESS_WAIVER = 121;
    case CASH_OUT = 82;
    case CASH_OUT_DEPOSIT = 83;
    case CASH_OUT_EDIT = 84;
    case CC_MANAGE = 35;
    case CC_MANAGE_MANUAL = 208;
    case CLASS_ATTENDANCE = 48;
    case CLASS_BOOK_NEGATIVE = 210;
    case CLASS_BOOK_UNPAID = 79;
    case CLASS_BOOK_UNSIGNED = 201;
    case CLASS_EDIT = 3;
    case CLASS_EDIT_SESSIONS = 238;
    case CLASS_FOREIGN = 17;
    case CLASS_LOCK_SEARCH = 152;
    case CLASS_PERIOD = 5;
    case CONTACT_LOG_MANAGE = 135;
    case COUPON = 31;
    case DASHBOARD_DELETE = 131;
    case DASHBOARD_EDIT = 130;
    case DASHBOARD_SHARE = 129;
    case DISCOUNT_CODE = 76;
    case EML_CONSTANT_CONTACT = 123;
    case EML_MAILCHIMP = 122;
    case ENROLLMENT_ATTENDANCE = 55;
    case ENROLLMENT_BOOK_NEGATIVE = 211;
    case ENROLLMENT_BOOK_UNPAID = 80;
    case ENROLLMENT_BOOK_UNSIGNED = 202;
    case ENROLLMENT_EDIT = 54;
    case ENROLLMENT_EDIT_SESSIONS = 239;
    case ENROLLMENT_FOREIGN = 53;
    case ENROLLMENT_LOCK_SEARCH = 153;
    case ENTERPRISE_CLOUD_FEES = 207;
    case FITBUILDER_LEADERBOARD = 190;
    case FITBUILDER_SUBSCRIPTION = 189;
    case FITBUILDER_WORKOUT_ASSIGN = 188;
    case FITBUILDER_WORKOUT_MANAGE = 187;
    case FORM_ALL = 177;
    case FORM_AMEND_ACCESS = 198;
    case FORM_AMEND_COMPLETED = 194;
    case FORM_AMEND_COMPLETED_ALL = 195;
    case FORM_AMEND_COMPLETED_LOCATION = 196;
    case FORM_AMEND_COMPLETED_MY_CLIENTS = 197;
    case FORM_COMPLETE = 178;
    case FORM_MANAGE = 160;
    case FORM_MY_CLIENTS = 175;
    case FORM_MY_LOCATION = 176;
    case FORM_RESPONSE_DELETE = 199;
    case FORM_VIEW_RESPONSE = 161;
    case HOLIDAY = 7;
    case IMPORT_CLIENT = 215;
    case INTEGRATION_AUTYMATE = 163;
    case INTEGRATION_BRIVO = 179;
    case INTERFACE_ACHIEVE_APP = 87;
    case INTERFACE_WIDGET_EDIT = 39;
    case INTERFACE_WIDGET_VIEW = 110;
    case INVENTORY_UPDATE = 157;
    case LOCATION_EDIT = 9;
    case LOCATION_EDIT_GENERAL = 126;
    case LOCATION_FOREIGN = 8;
    case LOCATION_FRANCHISE = 109;
    case LOG_VIEW = 101;
    case LOGIN_NOTE = 11;
    case LOGIN_NOTE_RESTRICT = 12;
    case LOGIN_PRODUCT_VIEW = 206;
    case MAIL_SEND = 75;
    case MANAGE_ANNOUNCEMENT = 200;
    case MANAGE_BILLING_INFORMATION = 134;
    case MANAGE_CAASI_CONVERSATION = 229;
    case MANAGE_READERS = 181;
    case MARKETING_DD = 43;
    case MARKETING_EMAIL = 42;
    case MARKETING_SUBSCRIPTION = 237;
    case MESSAGES_CALLS = 173;
    case MESSAGES_CONVERSATIONS = 174;
    case MESSAGES_MANAGE = 170;
    case MESSAGES_SETTINGS = 171;
    case MESSAGES_SUBSCRIPTION = 172;
    case NOTIFICATION_APPOINTMENT_BOOK = 60;
    case NOTIFICATION_APPOINTMENT_BOOKED_AI = 218;
    case NOTIFICATION_APPOINTMENT_CANCEL = 61;
    case NOTIFICATION_APPOINTMENT_CHANGE = 59;
    case NOTIFICATION_APPOINTMENT_REQUEST_AI = 220;
    case NOTIFICATION_BILLING_RELATED_QUERY = 224;
    case NOTIFICATION_CANCELLATION_REQUEST_AI = 222;
    case NOTIFICATION_CLASS_ATTENDANCE = 56;
    case NOTIFICATION_CLASS_BOOK = 57;
    case NOTIFICATION_CLASS_BOOK_AI = 221;
    case NOTIFICATION_CLASS_BOOKED_AI = 219;
    case NOTIFICATION_CLASS_CANCEL = 58;
    case NOTIFICATION_EVENT_ATTENDANCE = 62;
    case NOTIFICATION_EVENT_BOOK = 63;
    case NOTIFICATION_EVENT_CANCEL = 64;
    case NOTIFICATION_FOREIGN = 65;
    case NOTIFICATION_LEAD_CAPTURE = 159;
    case NOTIFICATION_LEAD_CAPTURE_AI = 217;
    case NOTIFICATION_MEMBERSHIP_CANCEL = 214;
    case NOTIFICATION_MEMBERSHIP_QUERY = 223;
    case NOTIFICATION_PRIZE_REDEMPTION = 90;
    case NOTIFICATION_PRODUCT_INVENTORY = 77;
    case NOTIFICATION_QUIZ = 162;
    case NOTIFICATION_REVIEW = 66;
    case NOTIFICATION_SALE_STAFF = 136;
    case NOTIFICATION_STAFF_CALLBACK_REQUEST = 216;
    case OVERRIDE_FEE = 164;
    case PARTNER_PROGRAM_MANAGE = 94;
    case PAYMENT_PROCESSING = 166;
    case PHYSICAL_INVENTORY_COUNT = 156;
    case POSTCARD_SEND = 88;
    case POWER_SEARCH_DELETE = 106;
    case POWER_SEARCH_EDIT = 105;
    case POWER_SEARCH_SHARE = 107;
    case PRESENCE = 149;
    case PRODUCT_DESCRIPTION_EDIT = 113;
    case PRODUCT_MANAGE = 34;
    case PROFILE_ALL = 24;
    case PROFILE_DELETE = 230;
    case PROFILE_DETAIL = 67;
    case PROFILE_GROUP_MANAGE = 69;
    case PROFILE_GROUP_MEMBER_MANAGE = 191;
    case PROFILE_MERGE = 213;
    case PROFILE_MY_LOCATION = 86;
    case PROFILE_SCHEDULE = 205;
    case PROFILE_TYPE_EDIT = 68;
    case PROFILE_VIEW = 13;
    case PROGRESS_LOG_MANAGE = 102;
    case PROGRESS_LOG_PROFILE = 104;
    case PROMOTION_MANAGE = 25;
    case PROMOTION_MANAGE_BASE = 127;
    case PURCHASE_EDIT = 93;
    case PURCHASE_VIEW = 92;
    case RECEIVE_ALERT = 193;
    case REPORT_ALL = 71;
    case REPORT_ATTENDANCE = 27;
    case REPORT_CLIENT = 26;
    case REPORT_CLOSEOUT = 85;
    case REPORT_EXPORT_PRINT = 186;
    case REPORT_FRANCHISE = 108;
    case REPORT_INSURANCE = 115;
    case REPORT_INSURANCE_FILE = 155;
    case REPORT_MAIL = 30;
    case REPORT_SALE = 29;
    case REPORT_SALE_USER = 125;
    case REPORT_STAFF = 28;
    case RESOURCE = 37;
    case RESOURCE_BOOK_NEGATIVE = 212;
    case RESOURCE_BOOK_UNPAID = 168;
    case RESOURCE_BOOK_UNSIGNED = 204;
    case REVIEW_FLAG = 18;
    case REWARD_LEADERBOARD = 44;
    case REWARD_POINT_MANAGE = 46;
    case REWARD_POINT_RESET = 45;
    case REWARD_PRIZE = 47;
    case SABA = 116;
    case SCHEDULE_CANCELED_CLASS = 139;
    case SCHEDULE_CANCELED_ENROLLMENT = 140;
    case SCHEDULE_FUTURE_APPOINTMENT = 95;
    case SCHEDULE_FUTURE_ASSETS = 128;
    case SCHEDULE_FUTURE_CLASS = 96;
    case SCHEDULE_FUTURE_EVENT = 99;
    case SCHEDULE_PAST_APPOINTMENT = 97;
    case SCHEDULE_PAST_CLASS = 98;
    case SCHEDULE_PAST_EVENT = 100;
    case SCHEDULE_SUMMARY_REVENUE_SERVICE = 234;
    case SCHEDULE_SUMMARY_REVENUE_STAFF = 235;
    case SERVICE_AGREEMENT_SIGN = 133;
    case SHOP_CATEGORY = 78;
    case STAFF_CLOCK = 32;
    case STAFF_EDIT = 14;
    case STAFF_EDIT_OWN = 150;
    case STAFF_MODIFY_RATES_PRODUCT = 184;
    case STAFF_MODIFY_RATES_SERVICE = 183;
    case STAFF_MY_CLOCK = 192;
    case STAFF_PAY_ALL = 20;
    case STAFF_ROLE_CHANGE = 72;
    case STAFF_ROLE_EDIT = 124;
    case STAFF_WORKING_HOURS = 144;
    case STORE_COMMISSION_OVERRIDE = 185;
    case STORE_PRICE = 41;
    case STORE_SELL = 40;
    case STORE_SETTINGS_EDIT = 143;
    case SUPPLIER_MANAGE = 114;
    case TASK_ADD = 111;
    case TASK_ALL = 70;
    case TASK_EDIT = 112;
    case TRANSACTION_DETAIL = 81;
    case TRANSACTION_EDIT = 89;
    case TRANSACTION_REFUND = 91;
    case TUITION_ENROLL = 242;
    case TUITION_MANAGE = 243;
    case TUITION_PAYMENT_CANCEL = 244;
    case TUITION_VIEW = 241;
    case VIDEO_CATEGORY = 146;
    case VIDEO_SETUP = 147;
    case VIEW_BALANCE_HISTORY_STATEMENTS = 240;
    case VIRTUAL_SETUP = 158;
    case VISIT_NOTE_EDIT = 74;
    case VISIT_NOTE_VIEW = 73;
    case WELLNESSLIVING_ACADEMY = 151;
    case ZAPIER = 180;
}
