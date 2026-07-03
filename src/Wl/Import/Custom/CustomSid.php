<?php

namespace WlSdk\Wl\Import\Custom;

/**
 * List of all custom imports that are supported by system.
 * Each constant defines specific import.
 * Note that if you are adding new constant you should also add new class
 * which should extend {@link \WlSdk\Wl\Import\Custom\CustomPerformAbstract}
 * with appropriate name according to constant name, see {@link \WlSdk\Wl\Import\Custom\Contact\CustomContact}.
 *
 * Last used ID: 20.
 *
 * Values:
 * - 8 (`APPOINTMENT_RECURRING`): Creates recurring appointments with no end date.
 * - 10 (`CLIENT_ACCOUNT_BALANCE`): Custom import which allows to import client account balance.
 * - 5 (`CLIENT_NOTE`): Custom import which allows to import client note.
 *   See {@link \WlSdk\Wl\Import\Custom\ClientNote\CustomClientNote}.
 * - 11 (`CLIENT_PURCHASE_REFUND`): Custom import which allows to import client purchase refund.
 * - 12 (`CLIENT_RELATIONSHIP`): Custom import which allows to import client relationship.
 *   See {@link \WlSdk\Wl\Import\Custom\ClientRelationship\CustomClientRelationship}.
 * - 20 (`CLIENTS`): Custom import which allows to import contact block information.
 *   See {@link \WlSdk\Wl\Import\Custom\Clients\CustomClients}.
 * - 1 (`CONTACT`): Custom import which allows to import contact log information.
 *   See {@link \WlSdk\Wl\Import\Custom\Contact\CustomContact}.
 * - 15 (`CURVE_EXT_MANAGER`): Custom import which allows to import curves staff-manager custom fields.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveExtManager\CustomCurveExtManager}.
 * - 13 (`CURVE_EXT_ORGANIZATION`): Custom import which allows to import curves franchisee custom fields.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveExtOrganization\CustomCurveExtOrganization}.
 * - 14 (`CURVE_EXT_OWNER`): Custom import which allows to import curves staff-owner custom fields.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveExtOwner\CustomCurveExtOwner}.
 * - 7 (`CURVE_FRANCHISE`): Custom import which allows to import curves franchisee.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveMember\CustomCurveMember}.
 * - 16 (`CURVE_HISTORICAL_VISIT`): Custom import which allows to import curves client historical visits.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveHistoricalVisit\CustomCurveHistoricalVisit}.
 * - 4 (`CURVE_MEMBER`): Custom import which allows to import curves members.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveMember\CustomCurveMember}.
 * - 9 (`CURVE_START`): Custom import which allows to start import for the list of franchisees.
 *   See {@link \WlSdk\Wl\Import\Custom\CurveStart\CustomCurveStart}.
 * - 17 (`LOGIN_COUPON`): Creates sold gift cards for clients.
 * - 6 (`PURCHASE_MEMBER`): Custom import which allows to import purchase members.
 *   See {@link \WlSdk\Wl\Import\Custom\PurchaseMember\CustomPurchaseMember}.
 * - 18 (`PURCHASE_REMOVE`): Allows to remove list of purchases from specific file.
 * - 19 (`QUIZ`): Custom import which allows to import forms.
 *
 *   See {@link \WlSdk\Wl\Import\Custom\Quiz\CustomQuiz}.
 * - 2 (`REFUND`): Custom import which allows to import refund dates to update transactions.
 *   See {@link \WlSdk\Wl\Import\Custom\Refund\CustomRefund}.
 * - 3 (`REWARD`): Custom import which allows to import client reward balance.
 *   See {@link \WlSdk\Wl\Import\Custom\Reward\CustomReward}.
 */
class CustomSid
{
    /** Creates recurring appointments with no end date. */
    public const APPOINTMENT_RECURRING = 8;

    /** Custom import which allows to import client account balance. */
    public const CLIENT_ACCOUNT_BALANCE = 10;

    /** Custom import which allows to import client note. */
    public const CLIENT_NOTE = 5;

    /** Custom import which allows to import client purchase refund. */
    public const CLIENT_PURCHASE_REFUND = 11;

    /** Custom import which allows to import client relationship. */
    public const CLIENT_RELATIONSHIP = 12;

    /** Custom import which allows to import contact block information. */
    public const CLIENTS = 20;

    /** Custom import which allows to import contact log information. */
    public const CONTACT = 1;

    /** Custom import which allows to import curves staff-manager custom fields. */
    public const CURVE_EXT_MANAGER = 15;

    /** Custom import which allows to import curves franchisee custom fields. */
    public const CURVE_EXT_ORGANIZATION = 13;

    /** Custom import which allows to import curves staff-owner custom fields. */
    public const CURVE_EXT_OWNER = 14;

    /** Custom import which allows to import curves franchisee. */
    public const CURVE_FRANCHISE = 7;

    /** Custom import which allows to import curves client historical visits. */
    public const CURVE_HISTORICAL_VISIT = 16;

    /** Custom import which allows to import curves members. */
    public const CURVE_MEMBER = 4;

    /** Custom import which allows to start import for the list of franchisees. */
    public const CURVE_START = 9;

    /** Creates sold gift cards for clients. */
    public const LOGIN_COUPON = 17;

    /** Custom import which allows to import purchase members. */
    public const PURCHASE_MEMBER = 6;

    /** Allows to remove list of purchases from specific file. */
    public const PURCHASE_REMOVE = 18;

    /** Custom import which allows to import forms. */
    public const QUIZ = 19;

    /** Custom import which allows to import refund dates to update transactions. */
    public const REFUND = 2;

    /** Custom import which allows to import client reward balance. */
    public const REWARD = 3;
}
