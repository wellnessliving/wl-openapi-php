<?php
namespace WlSdk\Wl\Login\Member\Intents;

/**
 * List of intents of the user in the business.
 * This means, why was user interested in the business, when first time came or called.
 * 
 * Values:
 * - 1 (`BILLING_INQUIRY`): Customer asks about payment methods, financing, invoices, payment issues, or billing to
 * insurance.
 * - 2 (`BOOKING`): Customer clearly expresses intent to schedule a new class, appointment, event, or asset.
 * - 3 (`BOOKING_CANCELLATION`): Customer explicitly asks to cancel an existing booking with no intent to reschedule.
 * - 4 (`BOOKING_RESCHEDULE`): Customer explicitly asks to change the date, time, or provider for an existing booking.
 * - 5 (`BUSINESS_INFORMATION`): Customer requests operational or logistical details about the business (address,
 * hours, contacts).
 * - 6 (`CHECK_AVAILABILITY`): Customer asks whether a specific instructor, staff member, or service is available.
 * - 7 (`GENERAL_INQUIRY`): Customer asks general wellness or fitness questions not tied to appointments, pricing, or
 * availability.
 * - 8 (`LEAVE_MESSAGE`): Customer wants to leave a voicemail, voice note, or message for staff.
 * - 9 (`PRICING_INQUIRY`): Customer requests cost or pricing details for services.
 * - 10 (`PURCHASE_OPTIONS_INQUIRY`): Customer asks about packages, session passes, or membership options.
 * - 11 (`REFERRAL`): Customer mentions they were referred by someone.
 * - 12 (`SERVICE_INQUIRY`): Customer expresses interest in a service without asking about pricing or availability
 * specifically.
 * - 13 (`STAFF_ASSISTANCE_REQUEST`): Customer requests to speak with a staff member, receive a callback, or staff
 * follow-up is needed.
 * - 14 (`TRANSFER_CALL_TO_STAFF`): Customer insists on immediate live transfer to a staff member.
 * - 15 (`VIEW_BOOKINGS`): Customer asks about their already scheduled or upcoming appointments.
 * - 16 (`VIEW_CLIENT_PO_DETAILS`): Customer asks about their purchased memberships, session passes, or packages.
 */
enum MemberIntentsSid: int
{
    case BILLING_INQUIRY = 1;
    case BOOKING = 2;
    case BOOKING_CANCELLATION = 3;
    case BOOKING_RESCHEDULE = 4;
    case BUSINESS_INFORMATION = 5;
    case CHECK_AVAILABILITY = 6;
    case GENERAL_INQUIRY = 7;
    case LEAVE_MESSAGE = 8;
    case PRICING_INQUIRY = 9;
    case PURCHASE_OPTIONS_INQUIRY = 10;
    case REFERRAL = 11;
    case SERVICE_INQUIRY = 12;
    case STAFF_ASSISTANCE_REQUEST = 13;
    case TRANSFER_CALL_TO_STAFF = 14;
    case VIEW_BOOKINGS = 15;
    case VIEW_CLIENT_PO_DETAILS = 16;
}
