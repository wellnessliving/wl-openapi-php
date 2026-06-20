<?php
namespace WlSdk;

/**
 * Mail types.
 * 
 * <h2>How to add a new e-mail type</h2>
 * <ol>
 *   <li>Select a new for a new e-mail. Add a constant in `RsMailSid`.</li>
 *   <li></li>
 * </ol>
 * 
 * Pay attention that all `\MailPrioritySid` must start with backslash.
 * 
 * Last used ID: 219.
 * 
 * Values:
 * - 206 (`AI_LINK_BOOK`): Sent by CASSI phone agent, when client requests a booking url.
 * - 207 (`AI_LINK_PURCHASE`): Sent by CASSI phone agent, when client requests a purchase url.
 * - 71 (`APPOINTMENT_APPROVE_STAFF`): Appointment approved by staff.
 * - 198 (`APPOINTMENT_BOOKED_AI`): Sent when the AI Agent successfully books an appointment.
 * - 33 (`APPOINTMENT_CANCEL_EARLY_USER`): Appointment Cancelled by Client - Early.
 * - 35 (`APPOINTMENT_CANCEL_LATE_USER`): Appointment Cancelled by Client - Late.
 * - 32 (`APPOINTMENT_CANCEL_STAFF`): Appointment Cancelled Notification - Staff.
 * - 80 (`APPOINTMENT_CANCEL_STAFF_USER`): Sends to the client when appointment has been cancelled by staff.
 * - 114 (`APPOINTMENT_CHANGE_GENERAL_CLIENT`): Sends to the clients when appointment information has been changed.
 * - 113 (`APPOINTMENT_CHANGE_GENERAL_STAFF`): Sends to the staff members when appointment information has been
 * changed.
 * - 36 (`APPOINTMENT_CHANGE_STAFF`): Appointment Change Notification - Staff.
 * - 37 (`APPOINTMENT_CHANGE_USER`): Appointment Change Notification - Client.
 * - 31 (`APPOINTMENT_CREATE_STAFF`): New Appointment Notification - Staff.
 * - 30 (`APPOINTMENT_CREATE_USER`): Appointment Confirmation.
 * - 211 (`APPOINTMENT_CREATE_USER_MULTIPLE`): Multiple Appointment Confirmation (Client).
 * - 189 (`APPOINTMENT_PAY_CANCEL`): Notification to a customer about an appointment that has been canceled because not
 * paid.
 * - 188 (`APPOINTMENT_PAY_PAY`): Notification to a customer about mandatory payment for an appointment.
 * - 103 (`APPOINTMENT_REPEAT_CANCEL_CLIENT`): Sends one email to a client when several sessions of one or several
 * appointments or single session of recurring
 *   appointment were canceled by staff.
 * - 105 (`APPOINTMENT_REPEAT_CANCEL_STAFF`): Sends one email to staff when several sessions of one or several
 * appointments or single session of recurring
 *   appointment were canceled.
 * - 131 (`APPOINTMENT_REPEAT_CANCEL_USER`): Sends one email to a client when several sessions of one or several
 * appointments or single session of recurring
 *   appointment were canceled by a client.
 * - 200 (`APPOINTMENT_REQUEST_AI`): Sent to staff when the AI Agent receives an appointment request.
 * - 88 (`APPOINTMENT_REQUEST_DENY`): Requested appointment has been denied.
 * 
 *   Sends to the client, after staff denied requested appointment.
 * - 89 (`APPOINTMENT_REQUEST_STAFF`): Appointment has been requested.
 * 
 *   Sends to the staff after client creates an appointment, that should be approved by staff.
 * - 90 (`APPOINTMENT_REQUEST_USER`): Appointment has been requested.
 * 
 *   Sends to the client after client creates an appointment, that should be approved by staff.
 * - 195 (`APPOINTMENT_WAIT_REMOVE`): Appointment Wait List Cancellation
 * 
 *   Sent after a client has been removed from the waiting list for an appointment.
 * - 204 (`BILLING_RELATED_QUERY`): Sent to staff when the AI Agent logs a billing or payment query.
 * - 1 (`BOOK_ADD_CLASS`): Class Booking Confirmation.
 * 
 *   Sent after a client successfully books a class.
 * 
 *   <h2>Acceptance test</h2>
 *   <ol>
 *     <li>Enter a business backend.</li>
 *     <li>Go to calendar ("Schedule" button in the main toolbar).</li>
 *     <li>Find a class in the future.&lt;br /&gt;
 *       Click a number in the "Clients" column in the calendar.&lt;br /&gt;
 *       Attendance list form will appear.</li>
 *     <li>Click "Add client into class" button in the toolbar of the form.</li>
 *     <li>Type in a login name of a client you want to send this e-mail to. Click "Search", then click "Add".</li>
 *     <li>Process tasks.</li>
 *     <li>Process cron.</li>
 *     <li>The test message should now be sent.</li>
 *   </ol>
 * - 47 (`BOOK_ADD_STAFF`): Class Booking Notification - Staff.
 * 
 *   Sent to the staff member informing them that a client has booked their class.
 * - 210 (`BOOK_CANCEL`): Sent if a client cancels a booking (used in automations).
 * - 23 (`BOOK_CANCEL_ADMIN_CLASS`): Class Booking (Reservation) Cancelled by Staff.
 * 
 *   Sent after a staff member cancels a client reservation for a class.
 * - 57 (`BOOK_CANCEL_ADMIN_ENROLLMENT`): Enrollment Booking Cancelled by Staff.
 * 
 *   Sent after a staff member cancels a client reservation for a class.
 * - 128 (`BOOK_CANCEL_ENROLLMENT_SESSION`): Enrollment Session Cancellation Notification
 * 
 *   Sent to a client when an event session(s) are canceled.
 * - 3 (`BOOK_CANCEL_FREE_CLASS`): Class Cancelled by Client - Early.
 * 
 *   Sent after a class reservation is cancelled by a client early. Cancellations are considered to be early if they
 * are
 *   made before the late cancel window that you’ve set in your Business Policy settings.
 * 
 *   <h2>Acceptance test</h2>
 *   <ol>
 *     <li>Select a user (not a staff, not an administrator). The e-mail you seek to send will be sent to that user.
 *       And you will need to log in under that user.</li>
 *     <li>Add a book to the user you selected. See `RsMailSid::BOOK_ADD` for details.</li>
 *     <li>Login as that user. Go to Profile - My Schedule. Find the class there, click "Cancel" button.</li>
 *     <li>Process tasks.</li>
 *     <li>Process cron.</li>
 *     <li>The message should now be sent to the user you selected.</li>
 *   &lt;/o
 * - 58 (`BOOK_CANCEL_FREE_ENROLLMENT`): Enrollment Cancelled by Client - Early.
 * - 4 (`BOOK_CANCEL_PENALTY_CLASS`): Class Cancelled By Client - Late.
 * 
 *   Sent after a class reservation is cancelled by a client late. Cancellations are considered to be late if they are
 *   made after the late cancel window that you’ve set in your Business Policy setting
 * - 59 (`BOOK_CANCEL_PENALTY_ENROLLMENT`): Enrollment Cancelled By Client - Late.
 * - 48 (`BOOK_CANCEL_STAFF`): Class Booking Cancellation Notification - Staff.
 * 
 *   Sent to the staff member informing them that a client has cancelled their class reservation.
 * - 69 (`BOOK_ENROLLMENT`): Enrollment Booking Confirmation.
 * - 92 (`BOOK_ENROLLMENT_CANCEL_STAFF`): Enrollment Booking Cancellation Notification - Staff
 * 
 *   Sent to a staff member informing them that a client has cancelled their enrollment.
 * - 91 (`BOOK_ENROLLMENT_STAFF`): Enrollment Booking Notification - Staff.
 * 
 *   Sent to a staff member informing them that a client has booked their enrollment.
 * - 73 (`BOOK_FIRST`): Thanks for your interest.
 * 
 *   Sent to prospective clients after they sign up online.
 * - 169 (`BOOK_PROMOTE_CONFIRM_APPOINTMENT`): Appointment Wait List Promotion (Client Confirmation Required)
 * 
 *   Sent to a client to confirm they promote from wait list to active list.
 * - 53 (`BOOK_PROMOTE_CONFIRM_CLASS`): Waitlist Promotion (Client Confirmation Required)
 * 
 *   Sent after the client is promoted from the waiting list for a class.
 * - 60 (`BOOK_PROMOTE_CONFIRM_ENROLLMENT`): Waitlist Promotion (Client Confirmation Required)
 * 
 *   Sent after the client is promoted from the waiting list for an enrollment.
 * - 168 (`BOOK_PROMOTE_DIRECT_APPOINTMENT`): Appointment Wait List Promotion (Confirmation not Required).
 * 
 *   Sent after the client is promoted from the waiting list for an appointment.
 * - 8 (`BOOK_PROMOTE_DIRECT_CLASS`): Waitlist Promotion (Client Confirmation Not Required)
 * 
 *   Sent after the client is promoted from the waiting list for a class.
 * - 61 (`BOOK_PROMOTE_DIRECT_ENROLLMENT`): Waitlist Promotion (Client Confirmation Not Required)
 * 
 *   Sent after the client is promoted from the waiting list for an enrollment.
 * - 25 (`BOOK_REMIND_CLASS`): Class Reminder.
 * 
 *   Sent to the client reminding about an upcoming class reservation.
 * - 62 (`BOOK_REMIND_ENROLLMENT`): Enrollment Reminder.
 * 
 *   Sent to the client reminding about an upcoming enrollment.
 * - 27 (`BOOK_REMIND_SERVICE_STAFF`): Appointment Reminder - Staff.
 * 
 *   Sent to the staff member reminding them about an upcoming appointment.
 * - 26 (`BOOK_REMIND_SERVICE_USER`): Appointment Reminder.
 * 
 *   Sent to the client reminding about an upcoming reservation.
 * - 101 (`BOOK_REPEAT_ADD`): Class Booking Confirmation.
 * 
 *   Sent after a client books the recurring sessions.
 * - 102 (`BOOK_REPEAT_CANCEL`): Class Booking Cancelled.
 * 
 *   Sent after a client cancels the recurring sessions.
 * - 166 (`BOOK_REPEAT_WAIT`): Recurrent Class Reservation Wait List.
 * 
 *   Sent when a client books a recurring class and is placed on more than one wait list.
 * - 39 (`BOOK_VISIT`): Class Review Request.
 * 
 *   Sent after the client visits a new class requesting that he/she write a review about their experience.
 * - 165 (`BOOK_WAIT_APPOINTMENT`): Appointment Reservation Wait List.
 *   Sent when an appointment is full and the client is placed on the waiting list.
 * - 2 (`BOOK_WAIT_CLASS`): Class Reservation Wait List.
 * 
 *   Sent when a class is full and the client is placed on the waiting list.
 * - 63 (`BOOK_WAIT_ENROLLMENT`): Enrollment Reservation Wait List.
 *   Sent when an enrollment is full and the client is placed on the waiting list.
 * - 154 (`BUSINESS_ACCOUNT_CHURN`): Sent when a business account or location is churned.
 * - 82 (`BUSINESS_ACCOUNT_PAY_FAIL`): Sent to business owner if payment for account failed.
 * - 83 (`BUSINESS_ACCOUNT_PAY_NOTIFY`): Sent to business owners as notification in one day before payment for account.
 * - 81 (`BUSINESS_ACCOUNT_PAY_OK`): Sent to business owner on successful payment for account.
 * - 155 (`BUSINESS_ACCOUNT_POSTCARD_LIMIT`): Sent when the monthly postcard limit is exceeded.
 * - 158 (`BUSINESS_ACCOUNT_SUBSCRIPTION_DISCOUNT`): Sent when subscription price has been overridden and is less than
 * the configured notification threshold.
 * - 151 (`BUSINESS_ACCOUNT_SUBSCRIPTION_OVERRIDE`): Sent when subscription price has been overridden twice or more.
 * - 156 (`BUSINESS_ACCOUNT_SUBSCRIPTION_PAYMENT`): Sent when a subscription payment is marked as paid.
 * - 134 (`BUSINESS_ACCOUNT_SUBSCRIPTION_SKIP`): Sent when subscription skip payment setting has been changed.
 * - 152 (`BUSINESS_ACCOUNT_SUBSCRIPTION_UNDERPAYING`): Sent when a new subscription has been added, and the business
 * is paying for fewer locations than they have.
 * - 157 (`BUSINESS_ACCOUNT_VIRTUAL_SIGNUP`): Sent when a user signs up for the virtual service.
 * - 175 (`BUSINESS_ACCOUNT_VIRTUAL_UPGRADE`): Sent when a business adds more licenses to their `FitLIVE` subscription.
 * - 192 (`BUSINESS_CREATE`): Sends to client after the first-level onboarding, providing them with login information
 *   and next steps for using their trial account.
 * - 164 (`BUSINESS_MESSAGE_SUBSCRIBE`): Email sales@wellnessliving.com when user changes Message Center plan
 * - 179 (`BUSINESS_PARTNER_BANNER`): Email to the marketing to remind to upload the 'Partner Program 30-Day
 * Notification Banner' to all businesses accounts.
 * - 180 (`BUSINESS_PARTNER_BANNER_CUSTOMER`): Email to the marketing to remind to upload the 'Partner Program 30-Day
 * Notification Banner' to business account.
 * - 119 (`BUSINESS_PARTNER_ENROLL`): Email to the admins that business staff member wants to take a part in the
 * partner program.
 * 
 *   Note! This email is not sent anymore because there is no need to enroll in the partner program (enrollment occurs
 *   automatically). For details see:
 * - 143 (`BUSINESS_PARTNER_REFERRAL_MAIL_NEW`): Email to the staff members of the partner business when a new lead
 * comes in through his partnership.
 * - 145 (`BUSINESS_PARTNER_REFERRAL_MAIL_REACH_ADMIN_PARTNER`): Email to the admins when a referral reaches a certain
 * period of paid subscription about sending a check to partner business.
 * - 148 (`BUSINESS_PARTNER_REFERRAL_MAIL_REACH_ADMIN_REFERRAL`): Email to the admins when a referral reaches a certain
 * period of paid subscription about sending a check to referral business.
 * - 146 (`BUSINESS_PARTNER_REFERRAL_MAIL_REACH_PARTNER`): Email to the staff members of the partner business when a
 * referral reaches a certain period of paid subscription.
 * - 147 (`BUSINESS_PARTNER_REFERRAL_MAIL_REACH_REFERRAL`): Email to the staff members of the referred business when
 * they reaches a certain period of paid subscription.
 * - 144 (`BUSINESS_PARTNER_REFERRAL_MAIL_SUBSCRIBE`): Email to the staff members of the partner business when a
 * referral has been subscribed.
 * - 139 (`BUSINESS_PHONE`): Business registered its business phone number.
 * - 141 (`BUSINESS_SMS_CHAT`): Sent when send/receive SMS in Two-Way SMS chat.
 * - 202 (`CANCELLATION_REQUEST_AI`): Sent to staff when the AI Agent captures a cancellation request.
 * - 201 (`CLASS_BOOK_AI`): Sent to staff when CAASI receives a request for booking.
 * - 199 (`CLASS_BOOKED_AI`): Alerts staff that the AI Agent has completed a class booking for a client.
 * - 24 (`CLASS_EDIT_CLASS`): Class Type Modified Has Changed.
 * 
 *   Sent after the class title or class category have changed. Sent to all clients who have the class booked.
 * - 64 (`CLASS_EDIT_ENROLLMENT`): Enrollment Type Modified Has Changed.
 * 
 *   Sent after the enrollment title have changed. Sent to all clients who have the enrollment booked.
 * - 16 (`CLASS_PERIOD_CANCEL_CLASS`): Class cancelled by staff.
 * 
 *   Sent after a staff member cancels a class.
 * - 66 (`CLASS_PERIOD_CANCEL_ENROLLMENT`): Enrollment cancelled by staff.
 * 
 *   Sent after a staff member cancels an enrollment.
 * - 17 (`CLASS_PERIOD_CHANGE_CLASS`): Class Schedule Details Changed Modified.
 * 
 *   Sent after a staff member modifies a scheduled class.
 * - 65 (`CLASS_PERIOD_CHANGE_ENROLLMENT`): Enrollment Schedule Details Changed Modified.
 * 
 *   Sent after a staff member modifies a scheduled of enrollment.
 * - 135 (`CLASSES_CANCEL_STAFF`): Class Cancellation Notification - Staff.
 * 
 *   Sent to a staff after class cancelled by staff.
 * - 100 (`CLASSES_PERIOD_CHANGE_CLASSES_STAFF`): Class Schedule Details Changed.
 *   Sent after a staff member modifies a scheduled class.
 * - 109 (`CLASSES_PROMOTE`): Email to the business members with information about newly added class schedule.
 * 
 *   Sent after a clients, when new schedule is added.
 * 
 *   <h2>Acceptance test</h2>
 *   <ol>
 *     <li>Enter a business backend.</li>
 *     <li>Config email.</li>
 *     <li>Adds schedule to the selected in email settings class.</li>
 *     <li>Check that selected clients got an email.</li>
 *   </ol>
 * - 124 (`CLASSES_STAFF_RECURRENT`): A reminder for the staff about an upcoming recurrent class.
 *   Sent after a new recurrent class booking occurs.
 * - 125 (`CLASSES_STAFF_RECURRENT_CANCEL`): A notification to the staff about a cancellation of a recurrent class.
 * - 110 (`CLASSES_STAFF_SUBSTITUTION`): Staff member that conducts the class is changed (a new staff member is added,
 * or an existing staff member is substituted).
 *   Sent after a staff member modifies a scheduled class.
 * - 117 (`CLASSES_STAFF_SUBSTITUTION_REMIND`): Send to the staff a remind about an upcoming class session.
 *   It is sent only when this staff is a substitution.
 * - 161 (`CLASSES_VIDEO_PUBLISH`): Sent to the client after a video uploaded to an attendance list is published.
 * - 98 (`CONTRACT_COPY`): Send a copy of contract.
 * - 84 (`COUPON_PURCHASE`): Sent after purchase of coupon.
 * - 129 (`EVENT_BOOK_SESSION_CLIENT`): Enrollment Session(s) Booking Confirmation.
 * - 130 (`EVENT_BOOK_SESSION_STAFF`): Enrollment Session(s) Booking Notification - Staff.
 * - 160 (`EVENT_PROMOTE`): Email to the business members with information about newly added event schedule.
 * 
 *   Sent after a clients, when new schedule is added.
 * - 162 (`EVENT_VIDEO_PUBLISH`): Sent to the client after a video uploaded to an attendance list is published.
 * - 133 (`FEEDBACK_DIALOG`): Staff sent feedback with some comment.
 * 
 *   All functionality related to this feature has been removed from the codebase.
 * - 182 (`FITBUILDER_MAIL_COMMENT`): New Comment on Logged Result.
 * - 183 (`FITBUILDER_MAIL_LIKE`): New Likes on Comment.
 * - 184 (`FITBUILDER_MAIL_THUMB`): Thumbs up on Logged Result.
 * - 185 (`FITBUILDER_MAIL_WORKOUT`): Workout of the day.
 * - 218 (`GUEST_PASS_EXPIRED`): Guest Pass invitation expired.
 * - 217 (`GUEST_PASS_INVITATION`): Guest Pass invitation sent.
 * - 219 (`GUEST_PASS_REMINDER`): Guest Pass invitation reminder.
 * - 150 (`HELP_POPUP_EMAIL`): For staff members to send emails to support using the help popup.
 * - 176 (`INTEGRATION_AUTYMATE_ENROLLMENT`): Sent when a business enrolls in Autymate.
 * - 178 (`INTEGRATION_COLLECTION_ALDOUS`): Sent when a business subscribes to collections.
 * - 138 (`INTEGRATION_ZOOM_CONFIRMATION`): Email, which is sent when a customer has connected a paid Zoom account.
 * 
 *   Is sent to administrators or to a special address if set `MAIL_RECIPIENT`.
 * - 97 (`LANDING_CONTACT`): Request a demo from landing page.
 * - 163 (`LEAD_ADDED_STAFF`): Sent to staff member informing them that a new client has entered their information into
 * the Lead Capture Widget.
 * - 87 (`LEAD_CAPTURE`): Sent to the client after they fill out a Lead Capture Form on the website of a business.
 * - 197 (`LEAD_CAPTURE_AI`): Sent to staff when CAASI captures a new lead from a conversation,
 *   including contact details and any provided inquiry notes.
 * - 96 (`LOGIN_ANNIVERSARY`): Sent to client on annual anniversary of the Member Since date.
 * - 42 (`LOGIN_ATTENDANCE`): Attendance List.
 * 
 *   Sent to the staff member with their attendance list for the day.
 * - 79 (`LOGIN_BACK`): Sent when user long time did not visit location, and it not has active promotion.
 *   Client Win-Back send only for inactive members
 * [SystemSid::INACTIVE](#/components/schemas/Wl.Login.Type.SystemSid).
 * - 49 (`LOGIN_BIRTHDAY`): Email to send on the day, when client has birthday.
 * - 51 (`LOGIN_CARD_EXPIRE`): Clients Payment Card expires this month.
 * - 123 (`LOGIN_MAIL_CONFIRM`): Email address confirmation.
 *   Sends after client registration to confirm the email address.
 * - 22 (`LOGIN_MESSAGE`): Custom Client Email #1.
 * 
 *   Should not have high priority as this is often a big sending from the reports to all clients of the business.
 * - 72 (`LOGIN_PENALTY_APPOINTMENT`): Client no show.
 * 
 *   Sent if the client does not show up to an appointment that they have reserved.
 * - 15 (`LOGIN_PENALTY_CLASS`): Client no show.
 * 
 *   Sent if the client does not show up to a class that they have reserved.
 * - 67 (`LOGIN_PENALTY_ENROLLMENT`): Client no show.
 * 
 *   Sent if the client does not show up to an enrollment that they have reserved.
 * - 159 (`LOGIN_PURCHASE_ACCOUNT`): Billed to Account. Sent to the client when any purchase was billed to their
 * account balance.
 * - 50 (`LOGIN_RETENTION`): Sent to a client when they haven't visited in a set number of days,
 *   but still have an active pass or membership.
 *   Client Retention send only for active members [SystemSid::ACTIVE](#/components/schemas/Wl.Login.Type.SystemSid)
 * and custom client types.
 * - 213 (`LOGIN_STATEMENT_NEW`): Sent to the client when a new account statement becomes available.
 *   Email includes the statement as a PDF attachment.
 * - 9 (`LOGIN_WELCOME`): Sent to all new users after they create an account for the first time.
 * - 214 (`MEMBER_GROUP_USER_ADD`): Client added to a member group.
 * - 215 (`MEMBER_GROUP_USER_REMOVE`): Client removed from a member group.
 * - 203 (`MEMBERSHIP_QUERY`): Sent to staff when the AI Agent logs a membership or purchase query.
 * - 191 (`NOTIFICATION_OTP`): Sent OTP code by sms or email to validate phone number or email address.
 * - 187 (`PASSPORT_LOGIN_ENTER`): Sent OTP code by sms and email for the user sign in.
 * - 205 (`PASSPORT_LOGIN_MERGE`): Notification about email address is changed due to merge.
 * - 85 (`PAY_ACCOUNT_INVOICE`): E-mail with a list of user's payment account transactions for last `62` days.
 * 
 *   <h2>Acceptance test</h2>
 * 
 *   <ul><li>Initial conditions: you'll need a user with an e-mail that you can receive e-mail to.</li>
 * 
 *   <li>Go to business backend - store. Purchase anything. Pay with user's account.</li>
 * 
 *   <li>Go to Reports - Client - Account Balance. Click 'Send invoice' in the row of that user.</li>
 * 
 *   <li>Execute cron. Check e-mail box. There should be an invoice e-mail.
 * 
 *   Check that there is information about purchase you've just made.</li>
 * - 116 (`PAY_AUTOMATIC_SUCCESS`): Automatic payment success.
 * 
 *   Sent to the customer in the following cases:
 *   * An automatic renewal of a purchase option is successful.
 *   * Recurrent payment of installment plan is successful.
 *   * Suspended payment completed successfully [Task](#/components/schemas/Wl.Catalog.Payment.Task).
 *   * When status of a recurrently paid transaction is changed to
 * [RsPayTransactionStatusSid::PURCHASE_OK](#/components/schemas/RsPayTransactionStatusSid).
 * 
 *   Should be disabled by default according to the task (see link below).
 * - 181 (`PAY_TRANSACTION_FAIL`): Transaction failed.
 * 
 *   Sent to support whenever transaction fails.
 * - 137 (`PRESENCE_ACTIVATE`): Request a custom website subscription.
 * - 127 (`PRODUCT_PURCHASE`): Sent after purchase of product.
 * - 93 (`PROFILE_MAIL_CHANGE`): Email to inform user that they email is changed.
 * - 86 (`PROFILE_MAIL_CONFIRM`): Email to confirm new email address after it was changed.
 * - 111 (`PROFILE_PASSWORD_CHANGE`): Mail to inform the user that their password has been changed.
 * - 142 (`PROFILE_PASSWORD_RESET`): Mail containing reset password link to allow the user to change their password.
 * - 43 (`PROMOTION_LOW`): Few Pass Visits Remaining.
 * 
 *   Sent when the client only has a few visits remaining on their pass.
 * - 153 (`PROMOTION_MEMBERSHIP_CANCEL`): Sent when membership is canceled.
 * - 193 (`PROMOTION_MEMBERSHIP_CANCEL_STAFF`): Sent to staff when membership is canceled.
 * - 77 (`PROMOTION_MEMBERSHIP_EXPIRE`): Sent when membership expires.
 * - 106 (`PROMOTION_MEMBERSHIP_PAY_ACCOUNT`): Membership Payment - Billed to Account.
 * 
 *   Sent to the customer to inform them that their account after purchase became negative.
 *   Sent in the following cases:
 *   * Automatic renewal of a purchase option.
 *   * Account payment for installment plan.
 *   * Suspended payment [Task](#/components/schemas/Wl.Catalog.Payment.Task).
 * - 55 (`PROMOTION_MEMBERSHIP_PAY_FAIL`): Automatic Payment Failed.
 * 
 *   In case of unsuccessful Credit Card transaction.
 * 
 *   Sent to the customer in the following cases:
 *   * An automatic renewal of a purchase option is failed.
 *   * Recurrent payment of installment plan is failed.
 *   * Suspended payment failed [Task](#/components/schemas/Wl.Catalog.Payment.Task).
 * - 56 (`PROMOTION_MEMBERSHIP_PAY_OK`): Membership Payment Confirmation.
 * 
 *   In case of a successful Credit Card transaction.
 * 
 *   Sent to the customer when a payment has been made toward their membership.
 *   Sent to the customer in the following cases:
 *   * An automatic renewal of a purchase option is failed.
 *   * Recurrent payment of installment plan is failed.
 * - 75 (`PROMOTION_MEMBERSHIP_REACTIVATE`): Sent to the customer after their membership is renewed.
 * - 78 (`PROMOTION_MEMBERSHIP_RENEW`): Sent before certain count of days before membership renews.
 * - 76 (`PROMOTION_PURCHASE`): Sent after purchase of promotion.
 * - 136 (`PROMOTION_RECEIPT`): Receipt sent after purchase of promotion.
 * - 212 (`PROMOTION_USED`): Sent after a client attended a visit using a purchase option (used in automations).
 * - 194 (`PURCHASE_HOLD`): Sent to the customer when a promotion is paused.
 * - 186 (`PURCHASE_HOLD_EXPIRING`): Sends to the clients when purchase option hold expiring soon.
 * - 52 (`PURCHASE_PAYMENT`): Purchase Receipt.
 * 
 *   Sent to the customer when he makes a purchase in online store.
 * 
 *   Is not sent, when staff made a purchase for the client.
 * 
 *   <h2>Acceptance test #1</h2>
 *   <ol>
 *     <li>Go to store. Buy something.</li>
 *     <li>At confirmation order page, click "Email Receipt" button.</li>
 *   </ol>
 *   <h2>Acceptance test #2</h2>
 *   <ol>
 *     <li>Go to user profile - Purchases.</li>
 *     <li>Near a purchase, select Actions - Email receipt.</li>
 *   </ol>
 * - 107 (`PURCHASE_PAYMENT_ACCOUNT`): Purchase Receipt.
 *   Sent to the customer when staff made a purchase for the client.
 * 
 *   Is not sent, when client purchased anything in online store.
 * - 115 (`PURCHASE_PAYMENT_POS`): Purchase Receipt.
 * 
 *   Sent to the customer when he makes a purchase.
 * 
 *   <h2>Acceptance test #1</h2>
 *   <ol>
 *     <li>Go to store. Buy something.</li>
 *     <li>At confirmation order page, click "Email Receipt" button.</li>
 *   </ol>
 *   <h2>Acceptance test #2</h2>
 *   <ol>
 *     <li>Go to user profile - Purchases.</li>
 *     <li>Near a purchase, select Actions - Email receipt.</li>
 *   </ol>
 * - 95 (`PURCHASE_PRODUCT_INVENTORY`): Sent to Business Owner when the re-order level has been reached for some
 * product.
 * - 74 (`PURCHASE_PROMOTION_INTRODUCTORY`): Thanks for purchasing an introductory offer.
 * 
 *   Sent to the client after they purchase an introductory offer.
 * 
 *   Whether delay sending email after purchasing is set to 0 the introductory email will be delayed 5 - 10 minutes
 *    to allow for client group recalculation to occur .
 * - 108 (`PURCHASE_REFUND`): Send refund receipt.
 * - 172 (`QUIZ_FORM_SUBMITTION`): Quiz form submission - Client.
 * 
 *   Send to a client informing them that a form has been submitted.
 * - 174 (`QUIZ_INDEX`): Email to wellnessliving team when user changes Quiz Subscription plan.
 * - 171 (`QUIZ_NOTIFICATION`): Quiz submitted - Staff.
 * 
 *   Send to a staff member informing them that a form has been submitted.
 * - 173 (`QUIZ_NOTIFICATION_REMIND`): Quiz submitted - Staff.
 * 
 *   Send to a staff member informing them of a reminder.
 * - 177 (`REPORT_EXPORT`): Email to wellnessliving team when businesses perform actions which is exporting data
 *   that indicate that they are making steps to cancel their WL account.
 * - 38 (`REVIEW_ADD`): New Customer Review - Staff.
 * 
 *   Sent to the business to inform them that they have a new customer review.
 * - 45 (`REVIEW_REPLY`): Owner Replied to Review.
 * 
 *   Sent to the reviewer when the business owner replied to their customer review.
 * - 216 (`REVIEW_USER_LEFT`): Client left a review.
 * - 120 (`REWARD_PRIZE_CLIENT`): Event redeems a reward (points or prizes) for client.
 * - 121 (`REWARD_PRIZE_STAFF`): Event redeems a reward (points or prizes) for staff.
 * - 126 (`SALE_STAFF`): Sale Has Been Made.
 * 
 *   Sent after staff/client makes a purchase at the point of sale or in the online store.
 * - 208 (`SERVICE_BOOK`): Sent after booking a service (used in automations).
 * - 122 (`SKIN_APPLICATION_CONNECT`): Event when finished push certification for ios devices.
 * - 196 (`STAFF_CALLBACK_REQUEST`): Notifies staff when CAASI captures a client request for a staff connect,
 *   including their contact details and any relevant notes from the conversation.
 * - 104 (`TASK_ASSIGN`): Sends when task assigned to staff.
 * - 99 (`TERM_COPY`): Send a copy of waiver.
 * - 112 (`USER_CAMPAIGN`): Global email campaigns allows to send email to all clients, business owners, admins, etc.
 * - 140 (`VIDEO_SUBSCRIPTION_UPGRADE`): Request a video subscription.
 * 
 *   Triggers by staff member via `put()`.
 * 
 *   Is sent to administrators or to a special address if set `MAIL_RECIPIENT`.
 * - 94 (`VISIT_CAMPAIGN`): Sent after visit the service.
 * - 209 (`VISIT_NOSHOW`): Sent if a client does not show up to a service reserved by (used in automations).
 * - 190 (`VISIT_RECEIPT_RECEIPT`): Visit receipt.
 * - 149 (`ZOOM_LICENSE_LACK`): Email, which is sent when a Zoom license is lack.
 */
class RsMailSid
{
    /** Sent by CASSI phone agent, when client requests a booking url. */
    const AI_LINK_BOOK = 206;
    /** Sent by CASSI phone agent, when client requests a purchase url. */
    const AI_LINK_PURCHASE = 207;
    /** Appointment approved by staff. */
    const APPOINTMENT_APPROVE_STAFF = 71;
    /** Sent when the AI Agent successfully books an appointment. */
    const APPOINTMENT_BOOKED_AI = 198;
    /** Appointment Cancelled by Client - Early. */
    const APPOINTMENT_CANCEL_EARLY_USER = 33;
    /** Appointment Cancelled by Client - Late. */
    const APPOINTMENT_CANCEL_LATE_USER = 35;
    /** Appointment Cancelled Notification - Staff. */
    const APPOINTMENT_CANCEL_STAFF = 32;
    /** Sends to the client when appointment has been cancelled by staff. */
    const APPOINTMENT_CANCEL_STAFF_USER = 80;
    /** Sends to the clients when appointment information has been changed. */
    const APPOINTMENT_CHANGE_GENERAL_CLIENT = 114;
    /** Sends to the staff members when appointment information has been changed. */
    const APPOINTMENT_CHANGE_GENERAL_STAFF = 113;
    /** Appointment Change Notification - Staff. */
    const APPOINTMENT_CHANGE_STAFF = 36;
    /** Appointment Change Notification - Client. */
    const APPOINTMENT_CHANGE_USER = 37;
    /** New Appointment Notification - Staff. */
    const APPOINTMENT_CREATE_STAFF = 31;
    /** Appointment Confirmation. */
    const APPOINTMENT_CREATE_USER = 30;
    /** Multiple Appointment Confirmation (Client). */
    const APPOINTMENT_CREATE_USER_MULTIPLE = 211;
    /** Notification to a customer about an appointment that has been canceled because not paid. */
    const APPOINTMENT_PAY_CANCEL = 189;
    /** Notification to a customer about mandatory payment for an appointment. */
    const APPOINTMENT_PAY_PAY = 188;
    /** Sends one email to a client when several sessions of one or several appointments or single session of recurring */
    const APPOINTMENT_REPEAT_CANCEL_CLIENT = 103;
    /** Sends one email to staff when several sessions of one or several appointments or single session of recurring */
    const APPOINTMENT_REPEAT_CANCEL_STAFF = 105;
    /** Sends one email to a client when several sessions of one or several appointments or single session of recurring */
    const APPOINTMENT_REPEAT_CANCEL_USER = 131;
    /** Sent to staff when the AI Agent receives an appointment request. */
    const APPOINTMENT_REQUEST_AI = 200;
    /** Requested appointment has been denied. */
    const APPOINTMENT_REQUEST_DENY = 88;
    /** Appointment has been requested. */
    const APPOINTMENT_REQUEST_STAFF = 89;
    /** Appointment has been requested. */
    const APPOINTMENT_REQUEST_USER = 90;
    /** Appointment Wait List Cancellation */
    const APPOINTMENT_WAIT_REMOVE = 195;
    /** Sent to staff when the AI Agent logs a billing or payment query. */
    const BILLING_RELATED_QUERY = 204;
    /** Class Booking Confirmation. */
    const BOOK_ADD_CLASS = 1;
    /** Class Booking Notification - Staff. */
    const BOOK_ADD_STAFF = 47;
    /** Sent if a client cancels a booking (used in automations). */
    const BOOK_CANCEL = 210;
    /** Class Booking (Reservation) Cancelled by Staff. */
    const BOOK_CANCEL_ADMIN_CLASS = 23;
    /** Enrollment Booking Cancelled by Staff. */
    const BOOK_CANCEL_ADMIN_ENROLLMENT = 57;
    /** Enrollment Session Cancellation Notification */
    const BOOK_CANCEL_ENROLLMENT_SESSION = 128;
    /** Class Cancelled by Client - Early. */
    const BOOK_CANCEL_FREE_CLASS = 3;
    /** Enrollment Cancelled by Client - Early. */
    const BOOK_CANCEL_FREE_ENROLLMENT = 58;
    /** Class Cancelled By Client - Late. */
    const BOOK_CANCEL_PENALTY_CLASS = 4;
    /** Enrollment Cancelled By Client - Late. */
    const BOOK_CANCEL_PENALTY_ENROLLMENT = 59;
    /** Class Booking Cancellation Notification - Staff. */
    const BOOK_CANCEL_STAFF = 48;
    /** Enrollment Booking Confirmation. */
    const BOOK_ENROLLMENT = 69;
    /** Enrollment Booking Cancellation Notification - Staff */
    const BOOK_ENROLLMENT_CANCEL_STAFF = 92;
    /** Enrollment Booking Notification - Staff. */
    const BOOK_ENROLLMENT_STAFF = 91;
    /** Thanks for your interest. */
    const BOOK_FIRST = 73;
    /** Appointment Wait List Promotion (Client Confirmation Required) */
    const BOOK_PROMOTE_CONFIRM_APPOINTMENT = 169;
    /** Waitlist Promotion (Client Confirmation Required) */
    const BOOK_PROMOTE_CONFIRM_CLASS = 53;
    /** Waitlist Promotion (Client Confirmation Required) */
    const BOOK_PROMOTE_CONFIRM_ENROLLMENT = 60;
    /** Appointment Wait List Promotion (Confirmation not Required). */
    const BOOK_PROMOTE_DIRECT_APPOINTMENT = 168;
    /** Waitlist Promotion (Client Confirmation Not Required) */
    const BOOK_PROMOTE_DIRECT_CLASS = 8;
    /** Waitlist Promotion (Client Confirmation Not Required) */
    const BOOK_PROMOTE_DIRECT_ENROLLMENT = 61;
    /** Class Reminder. */
    const BOOK_REMIND_CLASS = 25;
    /** Enrollment Reminder. */
    const BOOK_REMIND_ENROLLMENT = 62;
    /** Appointment Reminder - Staff. */
    const BOOK_REMIND_SERVICE_STAFF = 27;
    /** Appointment Reminder. */
    const BOOK_REMIND_SERVICE_USER = 26;
    /** Class Booking Confirmation. */
    const BOOK_REPEAT_ADD = 101;
    /** Class Booking Cancelled. */
    const BOOK_REPEAT_CANCEL = 102;
    /** Recurrent Class Reservation Wait List. */
    const BOOK_REPEAT_WAIT = 166;
    /** Class Review Request. */
    const BOOK_VISIT = 39;
    /** Appointment Reservation Wait List. */
    const BOOK_WAIT_APPOINTMENT = 165;
    /** Class Reservation Wait List. */
    const BOOK_WAIT_CLASS = 2;
    /** Enrollment Reservation Wait List. */
    const BOOK_WAIT_ENROLLMENT = 63;
    /** Sent when a business account or location is churned. */
    const BUSINESS_ACCOUNT_CHURN = 154;
    /** Sent to business owner if payment for account failed. */
    const BUSINESS_ACCOUNT_PAY_FAIL = 82;
    /** Sent to business owners as notification in one day before payment for account. */
    const BUSINESS_ACCOUNT_PAY_NOTIFY = 83;
    /** Sent to business owner on successful payment for account. */
    const BUSINESS_ACCOUNT_PAY_OK = 81;
    /** Sent when the monthly postcard limit is exceeded. */
    const BUSINESS_ACCOUNT_POSTCARD_LIMIT = 155;
    /** Sent when subscription price has been overridden and is less than the configured notification threshold. */
    const BUSINESS_ACCOUNT_SUBSCRIPTION_DISCOUNT = 158;
    /** Sent when subscription price has been overridden twice or more. */
    const BUSINESS_ACCOUNT_SUBSCRIPTION_OVERRIDE = 151;
    /** Sent when a subscription payment is marked as paid. */
    const BUSINESS_ACCOUNT_SUBSCRIPTION_PAYMENT = 156;
    /** Sent when subscription skip payment setting has been changed. */
    const BUSINESS_ACCOUNT_SUBSCRIPTION_SKIP = 134;
    /** Sent when a new subscription has been added, and the business is paying for fewer locations than they have. */
    const BUSINESS_ACCOUNT_SUBSCRIPTION_UNDERPAYING = 152;
    /** Sent when a user signs up for the virtual service. */
    const BUSINESS_ACCOUNT_VIRTUAL_SIGNUP = 157;
    /** Sent when a business adds more licenses to their `FitLIVE` subscription. */
    const BUSINESS_ACCOUNT_VIRTUAL_UPGRADE = 175;
    /** Sends to client after the first-level onboarding, providing them with login information */
    const BUSINESS_CREATE = 192;
    /** Email sales@wellnessliving.com when user changes Message Center plan */
    const BUSINESS_MESSAGE_SUBSCRIBE = 164;
    /** Email to the marketing to remind to upload the 'Partner Program 30-Day Notification Banner' to all businesses accounts. */
    const BUSINESS_PARTNER_BANNER = 179;
    /** Email to the marketing to remind to upload the 'Partner Program 30-Day Notification Banner' to business account. */
    const BUSINESS_PARTNER_BANNER_CUSTOMER = 180;
    /** Email to the admins that business staff member wants to take a part in the partner program. */
    const BUSINESS_PARTNER_ENROLL = 119;
    /** Email to the staff members of the partner business when a new lead comes in through his partnership. */
    const BUSINESS_PARTNER_REFERRAL_MAIL_NEW = 143;
    /** Email to the admins when a referral reaches a certain period of paid subscription about sending a check to partner business. */
    const BUSINESS_PARTNER_REFERRAL_MAIL_REACH_ADMIN_PARTNER = 145;
    /** Email to the admins when a referral reaches a certain period of paid subscription about sending a check to referral business. */
    const BUSINESS_PARTNER_REFERRAL_MAIL_REACH_ADMIN_REFERRAL = 148;
    /** Email to the staff members of the partner business when a referral reaches a certain period of paid subscription. */
    const BUSINESS_PARTNER_REFERRAL_MAIL_REACH_PARTNER = 146;
    /** Email to the staff members of the referred business when they reaches a certain period of paid subscription. */
    const BUSINESS_PARTNER_REFERRAL_MAIL_REACH_REFERRAL = 147;
    /** Email to the staff members of the partner business when a referral has been subscribed. */
    const BUSINESS_PARTNER_REFERRAL_MAIL_SUBSCRIBE = 144;
    /** Business registered its business phone number. */
    const BUSINESS_PHONE = 139;
    /** Sent when send/receive SMS in Two-Way SMS chat. */
    const BUSINESS_SMS_CHAT = 141;
    /** Sent to staff when the AI Agent captures a cancellation request. */
    const CANCELLATION_REQUEST_AI = 202;
    /** Sent to staff when CAASI receives a request for booking. */
    const CLASS_BOOK_AI = 201;
    /** Alerts staff that the AI Agent has completed a class booking for a client. */
    const CLASS_BOOKED_AI = 199;
    /** Class Type Modified Has Changed. */
    const CLASS_EDIT_CLASS = 24;
    /** Enrollment Type Modified Has Changed. */
    const CLASS_EDIT_ENROLLMENT = 64;
    /** Class cancelled by staff. */
    const CLASS_PERIOD_CANCEL_CLASS = 16;
    /** Enrollment cancelled by staff. */
    const CLASS_PERIOD_CANCEL_ENROLLMENT = 66;
    /** Class Schedule Details Changed Modified. */
    const CLASS_PERIOD_CHANGE_CLASS = 17;
    /** Enrollment Schedule Details Changed Modified. */
    const CLASS_PERIOD_CHANGE_ENROLLMENT = 65;
    /** Class Cancellation Notification - Staff. */
    const CLASSES_CANCEL_STAFF = 135;
    /** Class Schedule Details Changed. */
    const CLASSES_PERIOD_CHANGE_CLASSES_STAFF = 100;
    /** Email to the business members with information about newly added class schedule. */
    const CLASSES_PROMOTE = 109;
    /** A reminder for the staff about an upcoming recurrent class. */
    const CLASSES_STAFF_RECURRENT = 124;
    /** A notification to the staff about a cancellation of a recurrent class. */
    const CLASSES_STAFF_RECURRENT_CANCEL = 125;
    /** Staff member that conducts the class is changed (a new staff member is added, or an existing staff member is substituted). */
    const CLASSES_STAFF_SUBSTITUTION = 110;
    /** Send to the staff a remind about an upcoming class session. */
    const CLASSES_STAFF_SUBSTITUTION_REMIND = 117;
    /** Sent to the client after a video uploaded to an attendance list is published. */
    const CLASSES_VIDEO_PUBLISH = 161;
    /** Send a copy of contract. */
    const CONTRACT_COPY = 98;
    /** Sent after purchase of coupon. */
    const COUPON_PURCHASE = 84;
    /** Enrollment Session(s) Booking Confirmation. */
    const EVENT_BOOK_SESSION_CLIENT = 129;
    /** Enrollment Session(s) Booking Notification - Staff. */
    const EVENT_BOOK_SESSION_STAFF = 130;
    /** Email to the business members with information about newly added event schedule. */
    const EVENT_PROMOTE = 160;
    /** Sent to the client after a video uploaded to an attendance list is published. */
    const EVENT_VIDEO_PUBLISH = 162;
    /** Staff sent feedback with some comment. */
    const FEEDBACK_DIALOG = 133;
    /** New Comment on Logged Result. */
    const FITBUILDER_MAIL_COMMENT = 182;
    /** New Likes on Comment. */
    const FITBUILDER_MAIL_LIKE = 183;
    /** Thumbs up on Logged Result. */
    const FITBUILDER_MAIL_THUMB = 184;
    /** Workout of the day. */
    const FITBUILDER_MAIL_WORKOUT = 185;
    /** Guest Pass invitation expired. */
    const GUEST_PASS_EXPIRED = 218;
    /** Guest Pass invitation sent. */
    const GUEST_PASS_INVITATION = 217;
    /** Guest Pass invitation reminder. */
    const GUEST_PASS_REMINDER = 219;
    /** For staff members to send emails to support using the help popup. */
    const HELP_POPUP_EMAIL = 150;
    /** Sent when a business enrolls in Autymate. */
    const INTEGRATION_AUTYMATE_ENROLLMENT = 176;
    /** Sent when a business subscribes to collections. */
    const INTEGRATION_COLLECTION_ALDOUS = 178;
    /** Email, which is sent when a customer has connected a paid Zoom account. */
    const INTEGRATION_ZOOM_CONFIRMATION = 138;
    /** Request a demo from landing page. */
    const LANDING_CONTACT = 97;
    /** Sent to staff member informing them that a new client has entered their information into the Lead Capture Widget. */
    const LEAD_ADDED_STAFF = 163;
    /** Sent to the client after they fill out a Lead Capture Form on the website of a business. */
    const LEAD_CAPTURE = 87;
    /** Sent to staff when CAASI captures a new lead from a conversation, */
    const LEAD_CAPTURE_AI = 197;
    /** Sent to client on annual anniversary of the Member Since date. */
    const LOGIN_ANNIVERSARY = 96;
    /** Attendance List. */
    const LOGIN_ATTENDANCE = 42;
    /** Sent when user long time did not visit location, and it not has active promotion. */
    const LOGIN_BACK = 79;
    /** Email to send on the day, when client has birthday. */
    const LOGIN_BIRTHDAY = 49;
    /** Clients Payment Card expires this month. */
    const LOGIN_CARD_EXPIRE = 51;
    /** Email address confirmation. */
    const LOGIN_MAIL_CONFIRM = 123;
    /** Custom Client Email #1. */
    const LOGIN_MESSAGE = 22;
    /** Client no show. */
    const LOGIN_PENALTY_APPOINTMENT = 72;
    /** Client no show. */
    const LOGIN_PENALTY_CLASS = 15;
    /** Client no show. */
    const LOGIN_PENALTY_ENROLLMENT = 67;
    /** Billed to Account. Sent to the client when any purchase was billed to their account balance. */
    const LOGIN_PURCHASE_ACCOUNT = 159;
    /** Sent to a client when they haven't visited in a set number of days, */
    const LOGIN_RETENTION = 50;
    /** Sent to the client when a new account statement becomes available. */
    const LOGIN_STATEMENT_NEW = 213;
    /** Sent to all new users after they create an account for the first time. */
    const LOGIN_WELCOME = 9;
    /** Client added to a member group. */
    const MEMBER_GROUP_USER_ADD = 214;
    /** Client removed from a member group. */
    const MEMBER_GROUP_USER_REMOVE = 215;
    /** Sent to staff when the AI Agent logs a membership or purchase query. */
    const MEMBERSHIP_QUERY = 203;
    /** Sent OTP code by sms or email to validate phone number or email address. */
    const NOTIFICATION_OTP = 191;
    /** Sent OTP code by sms and email for the user sign in. */
    const PASSPORT_LOGIN_ENTER = 187;
    /** Notification about email address is changed due to merge. */
    const PASSPORT_LOGIN_MERGE = 205;
    /** E-mail with a list of user's payment account transactions for last `62` days. */
    const PAY_ACCOUNT_INVOICE = 85;
    /** Automatic payment success. */
    const PAY_AUTOMATIC_SUCCESS = 116;
    /** Transaction failed. */
    const PAY_TRANSACTION_FAIL = 181;
    /** Request a custom website subscription. */
    const PRESENCE_ACTIVATE = 137;
    /** Sent after purchase of product. */
    const PRODUCT_PURCHASE = 127;
    /** Email to inform user that they email is changed. */
    const PROFILE_MAIL_CHANGE = 93;
    /** Email to confirm new email address after it was changed. */
    const PROFILE_MAIL_CONFIRM = 86;
    /** Mail to inform the user that their password has been changed. */
    const PROFILE_PASSWORD_CHANGE = 111;
    /** Mail containing reset password link to allow the user to change their password. */
    const PROFILE_PASSWORD_RESET = 142;
    /** Few Pass Visits Remaining. */
    const PROMOTION_LOW = 43;
    /** Sent when membership is canceled. */
    const PROMOTION_MEMBERSHIP_CANCEL = 153;
    /** Sent to staff when membership is canceled. */
    const PROMOTION_MEMBERSHIP_CANCEL_STAFF = 193;
    /** Sent when membership expires. */
    const PROMOTION_MEMBERSHIP_EXPIRE = 77;
    /** Membership Payment - Billed to Account. */
    const PROMOTION_MEMBERSHIP_PAY_ACCOUNT = 106;
    /** Automatic Payment Failed. */
    const PROMOTION_MEMBERSHIP_PAY_FAIL = 55;
    /** Membership Payment Confirmation. */
    const PROMOTION_MEMBERSHIP_PAY_OK = 56;
    /** Sent to the customer after their membership is renewed. */
    const PROMOTION_MEMBERSHIP_REACTIVATE = 75;
    /** Sent before certain count of days before membership renews. */
    const PROMOTION_MEMBERSHIP_RENEW = 78;
    /** Sent after purchase of promotion. */
    const PROMOTION_PURCHASE = 76;
    /** Receipt sent after purchase of promotion. */
    const PROMOTION_RECEIPT = 136;
    /** Sent after a client attended a visit using a purchase option (used in automations). */
    const PROMOTION_USED = 212;
    /** Sent to the customer when a promotion is paused. */
    const PURCHASE_HOLD = 194;
    /** Sends to the clients when purchase option hold expiring soon. */
    const PURCHASE_HOLD_EXPIRING = 186;
    /** Purchase Receipt. */
    const PURCHASE_PAYMENT = 52;
    /** Purchase Receipt. */
    const PURCHASE_PAYMENT_ACCOUNT = 107;
    /** Purchase Receipt. */
    const PURCHASE_PAYMENT_POS = 115;
    /** Sent to Business Owner when the re-order level has been reached for some product. */
    const PURCHASE_PRODUCT_INVENTORY = 95;
    /** Thanks for purchasing an introductory offer. */
    const PURCHASE_PROMOTION_INTRODUCTORY = 74;
    /** Send refund receipt. */
    const PURCHASE_REFUND = 108;
    /** Quiz form submission - Client. */
    const QUIZ_FORM_SUBMITTION = 172;
    /** Email to wellnessliving team when user changes Quiz Subscription plan. */
    const QUIZ_INDEX = 174;
    /** Quiz submitted - Staff. */
    const QUIZ_NOTIFICATION = 171;
    /** Quiz submitted - Staff. */
    const QUIZ_NOTIFICATION_REMIND = 173;
    /** Email to wellnessliving team when businesses perform actions which is exporting data */
    const REPORT_EXPORT = 177;
    /** New Customer Review - Staff. */
    const REVIEW_ADD = 38;
    /** Owner Replied to Review. */
    const REVIEW_REPLY = 45;
    /** Client left a review. */
    const REVIEW_USER_LEFT = 216;
    /** Event redeems a reward (points or prizes) for client. */
    const REWARD_PRIZE_CLIENT = 120;
    /** Event redeems a reward (points or prizes) for staff. */
    const REWARD_PRIZE_STAFF = 121;
    /** Sale Has Been Made. */
    const SALE_STAFF = 126;
    /** Sent after booking a service (used in automations). */
    const SERVICE_BOOK = 208;
    /** Event when finished push certification for ios devices. */
    const SKIN_APPLICATION_CONNECT = 122;
    /** Notifies staff when CAASI captures a client request for a staff connect, */
    const STAFF_CALLBACK_REQUEST = 196;
    /** Sends when task assigned to staff. */
    const TASK_ASSIGN = 104;
    /** Send a copy of waiver. */
    const TERM_COPY = 99;
    /** Global email campaigns allows to send email to all clients, business owners, admins, etc. */
    const USER_CAMPAIGN = 112;
    /** Request a video subscription. */
    const VIDEO_SUBSCRIPTION_UPGRADE = 140;
    /** Sent after visit the service. */
    const VISIT_CAMPAIGN = 94;
    /** Sent if a client does not show up to a service reserved by (used in automations). */
    const VISIT_NOSHOW = 209;
    /** Visit receipt. */
    const VISIT_RECEIPT_RECEIPT = 190;
    /** Email, which is sent when a Zoom license is lack. */
    const ZOOM_LICENSE_LACK = 149;
}
