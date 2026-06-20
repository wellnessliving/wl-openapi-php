<?php
namespace WlSdk\Wl\Import\Custom;

/**
 * List of all custom imports that are supported by system.
 * Each constant defines specific import.
 * Note that if you are adding new constant you should also add new class
 * which should extend [CustomPerformAbstract](#/components/schemas/Wl.Import.Custom.CustomPerformAbstract)
 * with appropriate name according to constant name, see
 * [CustomContact](#/components/schemas/Wl.Import.Custom.Contact.CustomContact).
 * 
 * Last used ID: 20.
 * 
 * Values:
 * - 8 (`APPOINTMENT_RECURRING`): Creates recurring appointments with no end date.
 * - 10 (`CLIENT_ACCOUNT_BALANCE`): Custom import which allows to import client account balance.
 * - 5 (`CLIENT_NOTE`): Custom import which allows to import client note.
 *   See [CustomClientNote](#/components/schemas/Wl.Import.Custom.ClientNote.CustomClientNote).
 * - 11 (`CLIENT_PURCHASE_REFUND`): Custom import which allows to import client purchase refund.
 * - 12 (`CLIENT_RELATIONSHIP`): Custom import which allows to import client relationship.
 *   See [CustomClientRelationship](#/components/schemas/Wl.Import.Custom.ClientRelationship.CustomClientRelationship).
 * - 20 (`CLIENTS`): Custom import which allows to import contact block information.
 *   See [CustomClients](#/components/schemas/Wl.Import.Custom.Clients.CustomClients).
 * - 1 (`CONTACT`): Custom import which allows to import contact log information.
 *   See [CustomContact](#/components/schemas/Wl.Import.Custom.Contact.CustomContact).
 * - 15 (`CURVE_EXT_MANAGER`): Custom import which allows to import curves staff-manager custom fields.
 *   See [CustomCurveExtManager](#/components/schemas/Wl.Import.Custom.CurveExtManager.CustomCurveExtManager).
 * - 13 (`CURVE_EXT_ORGANIZATION`): Custom import which allows to import curves franchisee custom fields.
 *   See
 * [CustomCurveExtOrganization](#/components/schemas/Wl.Import.Custom.CurveExtOrganization.CustomCurveExtOrganization).
 * - 14 (`CURVE_EXT_OWNER`): Custom import which allows to import curves staff-owner custom fields.
 *   See [CustomCurveExtOwner](#/components/schemas/Wl.Import.Custom.CurveExtOwner.CustomCurveExtOwner).
 * - 7 (`CURVE_FRANCHISE`): Custom import which allows to import curves franchisee.
 *   See [CustomCurveMember](#/components/schemas/Wl.Import.Custom.CurveMember.CustomCurveMember).
 * - 16 (`CURVE_HISTORICAL_VISIT`): Custom import which allows to import curves client historical visits.
 *   See
 * [CustomCurveHistoricalVisit](#/components/schemas/Wl.Import.Custom.CurveHistoricalVisit.CustomCurveHistoricalVisit).
 * - 4 (`CURVE_MEMBER`): Custom import which allows to import curves members.
 *   See [CustomCurveMember](#/components/schemas/Wl.Import.Custom.CurveMember.CustomCurveMember).
 * - 9 (`CURVE_START`): Custom import which allows to start import for the list of franchisees.
 *   See [CustomCurveStart](#/components/schemas/Wl.Import.Custom.CurveStart.CustomCurveStart).
 * - 17 (`LOGIN_COUPON`): Creates sold gift cards for clients.
 * - 6 (`PURCHASE_MEMBER`): Custom import which allows to import purchase members.
 *   See [CustomPurchaseMember](#/components/schemas/Wl.Import.Custom.PurchaseMember.CustomPurchaseMember).
 * - 18 (`PURCHASE_REMOVE`): Allows to remove list of purchases from specific file.
 * - 19 (`QUIZ`): Custom import which allows to import forms.
 * 
 *   See [CustomQuiz](#/components/schemas/Wl.Import.Custom.Quiz.CustomQuiz).
 * - 2 (`REFUND`): Custom import which allows to import refund dates to update transactions.
 *   See [CustomRefund](#/components/schemas/Wl.Import.Custom.Refund.CustomRefund).
 * - 3 (`REWARD`): Custom import which allows to import client reward balance.
 *   See [CustomReward](#/components/schemas/Wl.Import.Custom.Reward.CustomReward).
 */
enum CustomSid: int
{
    case APPOINTMENT_RECURRING = 8;
    case CLIENT_ACCOUNT_BALANCE = 10;
    case CLIENT_NOTE = 5;
    case CLIENT_PURCHASE_REFUND = 11;
    case CLIENT_RELATIONSHIP = 12;
    case CLIENTS = 20;
    case CONTACT = 1;
    case CURVE_EXT_MANAGER = 15;
    case CURVE_EXT_ORGANIZATION = 13;
    case CURVE_EXT_OWNER = 14;
    case CURVE_FRANCHISE = 7;
    case CURVE_HISTORICAL_VISIT = 16;
    case CURVE_MEMBER = 4;
    case CURVE_START = 9;
    case LOGIN_COUPON = 17;
    case PURCHASE_MEMBER = 6;
    case PURCHASE_REMOVE = 18;
    case QUIZ = 19;
    case REFUND = 2;
    case REWARD = 3;
}
