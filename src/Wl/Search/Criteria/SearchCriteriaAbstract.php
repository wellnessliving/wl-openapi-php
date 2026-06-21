<?php

namespace WlSdk\Wl\Search\Criteria;

/**
 * Base class for search criteria.
 *
 * The criterion is actually a search condition, has a visual part and does not belong to any search entity.
 * To associate the criteria with any search entity, you should use an entity interface.
 *
 * Example: [LoginSearchEntity](#/components/schemas/Wl.Search.SearchEntityAbstract).
 *
 * Values:
 * - 42 (`Wl\Search\SearchTestACriteria`): Test criteria A.
 * - 43 (`Wl\Search\SearchTestBCriteria`): Test criteria B.
 * - 260 (`Wl\Search\SearchTestDisableCriteria`): Test criteria.
 *   Determined as disabled.
 * - 62 (`Wl\Search\SearchTestNoInterfaceCriteria`): Test criteria C.
 * - 1491 (`Wl\Review\Search\ReviewSearchCriteria`): "Client reviews" search criteria.
 * - 1150 (`Wl\Login\Attendance\Search\AttendanceCriteria`): Client`s "Service Visits" search criteria.
 * - 1831 (`Wl\Login\Search\SearchCriteria\LeadSourceCriteria`): "Lead source" search criteria.
 * - 1233 (`Wl\Login\Search\SearchCriteria\QuizFormStatusCriteria`): Client's form completion search criteria.
 * - 119 (`Wl\Login\Search\SearchCriteria\SignedWaiverCriteria`): Client`s "Signed Waiver" search criteria.
 * - 139 (`Wl\Login\Search\SearchCriteria\PurchasesCriteria`): Client`s "Purchases" search criteria.
 * - 889 (`Wl\Login\Search\SearchCriteria\PurchasesActiveCriteria`): Client`s "Active Purchases" search criteria.
 * - 1215 (`Wl\Login\Search\SearchCriteria\ACHSavedCriteria`): Client`s ACH Data saved / not saved search criteria.
 * - 84 (`Wl\Login\Search\SearchCriteria\AccountBalanceCriteria`): Client`s "Account Balance" search criteria.
 * - 127 (`Wl\Login\Search\SearchCriteria\AchieveUserCriteria`): Client`s "Achieve User" search criteria.
 * - 77 (`Wl\Login\Search\SearchCriteria\AddressCriteria`): Client`s "Address" search criteria.
 * - 117 (`Wl\Login\Search\SearchCriteria\AgeCriteria`): Client`s "Age" search criteria.
 * - 138 (`Wl\Login\Search\SearchCriteria\BeltRankCriteria`): Client`s "Belt rank" search criteria.
 * - 71 (`Wl\Login\Search\SearchCriteria\BirthdayCriteria`): Birthday search criteria.
 * - 74 (`Wl\Login\Search\SearchCriteria\CellPhoneCriteria`): Client`s "Cell Phone" search criteria.
 * - 78 (`Wl\Login\Search\SearchCriteria\CityCriteria`): Client`s "City" search criteria.
 * - 1292 (`Wl\Login\Search\SearchCriteria\ClientActivityDateCriteria`): Client Activity Date search criteria.
 * - 83 (`Wl\Login\Search\SearchCriteria\ClientAlertsCriteria`): Client`s "Client Alerts" search criteria.
 * - 153 (`Wl\Login\Search\SearchCriteria\ClientGroupCriteria`): Client`s "Client Group" search criteria.
 * - 82 (`Wl\Login\Search\SearchCriteria\ClientIdCriteria`): Client`s "Client ID" search criteria.
 * - 1469 (`Wl\Login\Search\SearchCriteria\ClientListCriteria`): "Client" search criteria. Allows searching by a list
 * of UID.
 * - 125 (`Wl\Login\Search\SearchCriteria\ClientSinceDateCriteria`): Client Since Date search criteria.
 * - 122 (`Wl\Login\Search\SearchCriteria\ClientStatusCriteria`): Client`s "Client Status" search criteria.
 * - 118 (`Wl\Login\Search\SearchCriteria\ClientTypeCriteria`): "Client type" search criteria.
 * - 1214 (`Wl\Login\Search\SearchCriteria\CreditCardSavedCriteria`): Client`s Credit Card saved / not saved search
 * criteria.
 * - 121 (`Wl\Login\Search\SearchCriteria\EditedPurchaseOptionsCriteria`): Client`s "Edited Purchase Options" search
 * criteria.
 * - 73 (`Wl\Login\Search\SearchCriteria\EmailCriteria`): Client`s "Email" search criteria.
 * - 1633 (`Wl\Login\Search\SearchCriteria\FamilyPayCriteria`): Criteria "This client's transactions are handled by
 * (this client or a relationship)".
 * - 158 (`Wl\Login\Search\SearchCriteria\FieldCheckboxCriteria`): Client`s "Custom Field (Checkbox)" search criteria.
 * - 160 (`Wl\Login\Search\SearchCriteria\FieldDropdownCriteria`): Client`s "Custom Field (Dropdown)" search criteria.
 * - 156 (`Wl\Login\Search\SearchCriteria\FieldRadioCriteria`): Client`s "Custom Field (Radio)" search criteria.
 * - 81 (`Wl\Login\Search\SearchCriteria\FieldTextCriteria`): Client`s "Custom Field (Text)" search criteria.
 * - 1570 (`Wl\Login\Search\SearchCriteria\FlagUserCriteria`): Client`s flagged / not flagged search criteria.
 * - 136 (`Wl\Login\Search\SearchCriteria\GenderCriteria`): Client`s "Gender" search criteria.
 * - 137 (`Wl\Login\Search\SearchCriteria\HomeLocationCriteria`): Client`s "Home Location" search criteria.
 * - 75 (`Wl\Login\Search\SearchCriteria\HomePhoneCriteria`): Client`s "Home Phone" search criteria.
 * - 1525 (`Wl\Login\Search\SearchCriteria\LocationAttendCriteria`): Client`s "Location Attended" search criteria.
 * - 67 (`Wl\Login\Search\SearchCriteria\NameFirstCriteria`): Client`s "First Name" search criteria.
 * - 70 (`Wl\Login\Search\SearchCriteria\NameLastCriteria`): Client`s "Last Name" search criteria.
 * - 294 (`Wl\Login\Search\SearchCriteria\ProgressBloodPressureCriteria`): Client`s progress (transformation) log
 * search criteria for "Blood Pressure" field.
 *
 *   Search data consists of two values that are compared independently and glued with "and" operator
 *   with the same comparison operation. So if, for example,
 *   [SearchOperationSid::GREATER_THAN
 * SearchOperationSid::GREATER_THAN](#/components/schemas/Wl.Search.SearchOperationSid) is chosen then
 *   both numbers must be greater for the record to match.
 *   E.g. 120/80 is greater than 110/70, but is neither less, greater or equal to 130/70.
 *
 *   It is also possible to search by only one part of blood pressure.
 *   [BloodPressureSearchData](#/components/schemas/Wl.Search.Data.SearchDataAbstract)
 *   can be initialized from array (see
 *   [BloodPressureSearchData::fromArray()
 * BloodPressureSearchData::fromArray()](#/components/schemas/Wl.Search.Data.SearchDataAbstract)
 *   ) with either only one of the array keys provided or one of the values being an empty string. For example,
 *   if `s_diastolic` is set to '80' and `s_systolic` is `null`, ''(empty string), or absent -
 *   the criterion will match all users with diastolic pressure being 80, regardless of their systolic value.
 *
 *   `[&#039;s_diastolic&#039; =&amp;gt; &#039;123&#039;]`
 * - 163 (`Wl\Login\Search\SearchCriteria\ProgressDecimalCriteria`): Client`s "Custom Field (Float)" search criteria.
 * - 251 (`Wl\Login\Search\SearchCriteria\ProgressImageCriteria`): Client's "Custom Field (Image)" search criteria.
 * - 164 (`Wl\Login\Search\SearchCriteria\ProgressIntegerCriteria`): Client`s "Custom Field (Integer)" search criteria.
 * - 534 (`Wl\Login\Search\SearchCriteria\ProgressMeasurementCriteria`): Transformation log measurement search
 * criteria.
 * - 165 (`Wl\Login\Search\SearchCriteria\ProgressPercentageCriteria`): Client`s "Custom Field (Float)" search
 * criteria.
 * - 248 (`Wl\Login\Search\SearchCriteria\ProgressTextCriteria`): Client`s "Custom Field (Text)" search criteria.
 * - 79 (`Wl\Login\Search\SearchCriteria\RegionCriteria`): Client`s "State" search criteria.
 * - 1592 (`Wl\Login\Search\SearchCriteria\RelationshipUserCriteria`): Client`s relationship status search criteria.
 * - 128 (`Wl\Login\Search\SearchCriteria\RewardsPointsCriteria`): Client`s "Rewards points" search criteria.
 * - 131 (`Wl\Login\Search\SearchCriteria\ServicesAttendedCriteria`): Client`s "Services Attended" search criteria.
 * - 1152 (`Wl\Login\Search\SearchCriteria\ServicesFirstVisitCriteria`): Client`s "First Visit" search criteria.
 * - 120 (`Wl\Login\Search\SearchCriteria\SignedContractCriteria`): Client`s "Signed Contract" search criteria.
 * - 162 (`Wl\Login\Search\SearchCriteria\StaffVerificationRequiredCriteria`): Client`s "Staff Verification required"
 * search criteria.
 * - 175 (`Wl\Login\Search\SearchCriteria\SubscriptionStatusCriteria`): Client`s "Subscription Status" search criteria.
 * - 1143 (`Wl\Login\Search\SearchCriteria\VisitLastCriteria`): Last visit search criteria.
 * - 1146 (`Wl\Login\Search\SearchCriteria\VisitMilestoneCriteria`): Client`s "Milestones visit" search criteria.
 * - 76 (`Wl\Login\Search\SearchCriteria\WorkPhoneCriteria`): Client`s "Work Phone" search criteria.
 * - 80 (`Wl\Login\Search\SearchCriteria\ZipCriteria`): Client`s "Zip" search criteria.
 * - 1173 (`Wl\Login\Promotion\Search\PromotionRemainSearchCriteria`): Client`s "Visits remaining" search criteria.
 * - 1177 (`Wl\Login\Promotion\Search\PromotionExpireSearchCriteria`): Client`s "Purchase Option expiring" search
 * criteria.
 */
class SearchCriteriaAbstract
{
    /** Test criteria A. */
    public const SearchTestACriteria = 42;

    /** Test criteria B. */
    public const SearchTestBCriteria = 43;

    /** Test criteria. */
    public const SearchTestDisableCriteria = 260;

    /** Test criteria C. */
    public const SearchTestNoInterfaceCriteria = 62;

    /** "Client reviews" search criteria. */
    public const ReviewSearchCriteria = 1491;

    /** Client`s "Service Visits" search criteria. */
    public const AttendanceCriteria = 1150;

    /** "Lead source" search criteria. */
    public const LeadSourceCriteria = 1831;

    /** Client's form completion search criteria. */
    public const QuizFormStatusCriteria = 1233;

    /** Client`s "Signed Waiver" search criteria. */
    public const SignedWaiverCriteria = 119;

    /** Client`s "Purchases" search criteria. */
    public const PurchasesCriteria = 139;

    /** Client`s "Active Purchases" search criteria. */
    public const PurchasesActiveCriteria = 889;

    /** Client`s ACH Data saved / not saved search criteria. */
    public const ACHSavedCriteria = 1215;

    /** Client`s "Account Balance" search criteria. */
    public const AccountBalanceCriteria = 84;

    /** Client`s "Achieve User" search criteria. */
    public const AchieveUserCriteria = 127;

    /** Client`s "Address" search criteria. */
    public const AddressCriteria = 77;

    /** Client`s "Age" search criteria. */
    public const AgeCriteria = 117;

    /** Client`s "Belt rank" search criteria. */
    public const BeltRankCriteria = 138;

    /** Birthday search criteria. */
    public const BirthdayCriteria = 71;

    /** Client`s "Cell Phone" search criteria. */
    public const CellPhoneCriteria = 74;

    /** Client`s "City" search criteria. */
    public const CityCriteria = 78;

    /** Client Activity Date search criteria. */
    public const ClientActivityDateCriteria = 1292;

    /** Client`s "Client Alerts" search criteria. */
    public const ClientAlertsCriteria = 83;

    /** Client`s "Client Group" search criteria. */
    public const ClientGroupCriteria = 153;

    /** Client`s "Client ID" search criteria. */
    public const ClientIdCriteria = 82;

    /** "Client" search criteria. Allows searching by a list of UID. */
    public const ClientListCriteria = 1469;

    /** Client Since Date search criteria. */
    public const ClientSinceDateCriteria = 125;

    /** Client`s "Client Status" search criteria. */
    public const ClientStatusCriteria = 122;

    /** "Client type" search criteria. */
    public const ClientTypeCriteria = 118;

    /** Client`s Credit Card saved / not saved search criteria. */
    public const CreditCardSavedCriteria = 1214;

    /** Client`s "Edited Purchase Options" search criteria. */
    public const EditedPurchaseOptionsCriteria = 121;

    /** Client`s "Email" search criteria. */
    public const EmailCriteria = 73;

    /** Criteria "This client's transactions are handled by (this client or a relationship)". */
    public const FamilyPayCriteria = 1633;

    /** Client`s "Custom Field (Checkbox)" search criteria. */
    public const FieldCheckboxCriteria = 158;

    /** Client`s "Custom Field (Dropdown)" search criteria. */
    public const FieldDropdownCriteria = 160;

    /** Client`s "Custom Field (Radio)" search criteria. */
    public const FieldRadioCriteria = 156;

    /** Client`s "Custom Field (Text)" search criteria. */
    public const FieldTextCriteria = 81;

    /** Client`s flagged / not flagged search criteria. */
    public const FlagUserCriteria = 1570;

    /** Client`s "Gender" search criteria. */
    public const GenderCriteria = 136;

    /** Client`s "Home Location" search criteria. */
    public const HomeLocationCriteria = 137;

    /** Client`s "Home Phone" search criteria. */
    public const HomePhoneCriteria = 75;

    /** Client`s "Location Attended" search criteria. */
    public const LocationAttendCriteria = 1525;

    /** Client`s "First Name" search criteria. */
    public const NameFirstCriteria = 67;

    /** Client`s "Last Name" search criteria. */
    public const NameLastCriteria = 70;

    /** Client`s progress (transformation) log search criteria for "Blood Pressure" field. */
    public const ProgressBloodPressureCriteria = 294;

    /** Client`s "Custom Field (Float)" search criteria. */
    public const ProgressDecimalCriteria = 163;

    /** Client's "Custom Field (Image)" search criteria. */
    public const ProgressImageCriteria = 251;

    /** Client`s "Custom Field (Integer)" search criteria. */
    public const ProgressIntegerCriteria = 164;

    /** Transformation log measurement search criteria. */
    public const ProgressMeasurementCriteria = 534;

    /** Client`s "Custom Field (Float)" search criteria. */
    public const ProgressPercentageCriteria = 165;

    /** Client`s "Custom Field (Text)" search criteria. */
    public const ProgressTextCriteria = 248;

    /** Client`s "State" search criteria. */
    public const RegionCriteria = 79;

    /** Client`s relationship status search criteria. */
    public const RelationshipUserCriteria = 1592;

    /** Client`s "Rewards points" search criteria. */
    public const RewardsPointsCriteria = 128;

    /** Client`s "Services Attended" search criteria. */
    public const ServicesAttendedCriteria = 131;

    /** Client`s "First Visit" search criteria. */
    public const ServicesFirstVisitCriteria = 1152;

    /** Client`s "Signed Contract" search criteria. */
    public const SignedContractCriteria = 120;

    /** Client`s "Staff Verification required" search criteria. */
    public const StaffVerificationRequiredCriteria = 162;

    /** Client`s "Subscription Status" search criteria. */
    public const SubscriptionStatusCriteria = 175;

    /** Last visit search criteria. */
    public const VisitLastCriteria = 1143;

    /** Client`s "Milestones visit" search criteria. */
    public const VisitMilestoneCriteria = 1146;

    /** Client`s "Work Phone" search criteria. */
    public const WorkPhoneCriteria = 76;

    /** Client`s "Zip" search criteria. */
    public const ZipCriteria = 80;

    /** Client`s "Visits remaining" search criteria. */
    public const PromotionRemainSearchCriteria = 1173;

    /** Client`s "Purchase Option expiring" search criteria. */
    public const PromotionExpireSearchCriteria = 1177;
}
