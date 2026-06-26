<?php

namespace WlSdk\Wl\Import\Wizard;

/**
 * Full list of different imports.
 *
 * Last used ID: 25
 *
 * Values:
 * - 8 (`APPOINTMENT`): Import of the created past and future appointment reservations.
 *
 *   Requires staff, services, purchase options and members.
 * - 7 (`ATTENDANCE`): Import of past and future classes and events booking.
 *   Creates class schedule also.
 *
 *   Requires staff, classes, events, purchase options and members.
 * - 9 (`BANK`): Credit card and ACH accounts import.
 *
 *   Requires members.
 * - 16 (`COUPON`): Import of the Gift Cards.
 * - 10 (`CREDENTIAL`): Operator can add credentials for the importing business in the foreign system.
 *
 *   This allows to perform some steps with robots instead of human operator.
 * - 18 (`DISCOUNT_CODE`): Import of discount codes.
 * - 14 (`LOGIN_TYPE`): Import of the Login Types.
 * - 25 (`MEASUREMENT_CURVES`): Import client member measurements.
 * - 1 (`MEMBER`): Import of the whole list of members of the business. With all purchases and payments.
 *
 *   Requires purchase options.
 * - 11 (`MEMBERSHIP`): Import of the memberships.
 *
 *   Requires services and promotions.
 * - 19 (`MEMBER_CURVES`): Import of the whole list of members of the business from Curves Software.
 * - 23 (`MEMBER_LEAD_CURVES`): Import of the list of leads of the business from Curves Software.
 * - 24 (`MEMBER_PURCHASE`): Import of the client's pricing options.
 * - 17 (`MEMBER_START`): Starts import of the step
 * [ImportWizardSid::MEMBER](#/components/schemas/Wl.Import.Wizard.ImportWizardSid).
 *   This step should starts after all other steps to make sure that pre import processes are finished.
 * - 4 (`PACKAGE`): Import of the packages.
 *
 *   Requires promotions.
 * - 5 (`PRODUCT`): Import of the products.
 * - 3 (`PROMOTION`): Import of the promotions.
 *
 *   Requires services.
 * - 21 (`REIMBURSEMENT_CURVES`): Import history of reimbursement history.
 *
 *   Requires members.
 * - 15 (`REPORT`): Import of the `MindBody` reports.
 * - 6 (`SERVICE`): Import of the classes, events and services.
 * - 2 (`STAFF`): Import of the staff members.
 * - 12 (`VISIT`): Import gym visits history.
 * - 20 (`VISIT_APPOINTMENT_CURVES`): Import appointment visit history.
 * - 22 (`VISIT_GYM_CURVES`): Import gym visit history.
 * - 13 (`WAIVER`): Import of Liability Waiver.
 */
class ImportWizardSid
{
    /** Import of the created past and future appointment reservations. */
    public const APPOINTMENT = 8;

    /** Import of past and future classes and events booking. */
    public const ATTENDANCE = 7;

    /** Credit card and ACH accounts import. */
    public const BANK = 9;

    /** Import of the Gift Cards. */
    public const COUPON = 16;

    /** Operator can add credentials for the importing business in the foreign system. */
    public const CREDENTIAL = 10;

    /** Import of discount codes. */
    public const DISCOUNT_CODE = 18;

    /** Import of the Login Types. */
    public const LOGIN_TYPE = 14;

    /** Import client member measurements. */
    public const MEASUREMENT_CURVES = 25;

    /** Import of the whole list of members of the business. With all purchases and payments. */
    public const MEMBER = 1;

    /** Import of the memberships. */
    public const MEMBERSHIP = 11;

    /** Import of the whole list of members of the business from Curves Software. */
    public const MEMBER_CURVES = 19;

    /** Import of the list of leads of the business from Curves Software. */
    public const MEMBER_LEAD_CURVES = 23;

    /** Import of the client's pricing options. */
    public const MEMBER_PURCHASE = 24;

    /** Starts import of the step [ImportWizardSid::MEMBER](#/components/schemas/Wl.Import.Wizard.ImportWizardSid). */
    public const MEMBER_START = 17;

    /** Import of the packages. */
    public const PACKAGE = 4;

    /** Import of the products. */
    public const PRODUCT = 5;

    /** Import of the promotions. */
    public const PROMOTION = 3;

    /** Import history of reimbursement history. */
    public const REIMBURSEMENT_CURVES = 21;

    /** Import of the `MindBody` reports. */
    public const REPORT = 15;

    /** Import of the classes, events and services. */
    public const SERVICE = 6;

    /** Import of the staff members. */
    public const STAFF = 2;

    /** Import gym visits history. */
    public const VISIT = 12;

    /** Import appointment visit history. */
    public const VISIT_APPOINTMENT_CURVES = 20;

    /** Import gym visit history. */
    public const VISIT_GYM_CURVES = 22;

    /** Import of Liability Waiver. */
    public const WAIVER = 13;
}
