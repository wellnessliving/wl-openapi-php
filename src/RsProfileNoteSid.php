<?php
namespace WlSdk;

/**
 * Sources of system notes.
 * 
 * 
 * 
 * Last used ID: 12.
 * 
 * Values:
 * - 5 (`DOORACCESS_BRIVO_INVITATION_BRIVOINVITATIONPROFILE`): A list of clients with not redeemed invitations.
 * - 3 (`MEMBER_PROGRESS_LOG_PROFILE`): A list of accounts with invalid progress log.
 * - 4 (`MEMBER_PROGRESS_LOG_VERIFICATION`): A list of accounts with not verified progress log.
 * - 1 (`PAY_ACCOUNT`): A list of accounts with negative balance.
 * - 8 (`PROFILE_PAGE_OVERVIEW_ALERT_AGREE`): A list of accounts with unsigned waivers.
 * - 6 (`PROFILE_PAGE_OVERVIEW_ALERT_BIRTHDAY`): A list of accounts with upcoming birthdays.
 * - 9 (`PROFILE_PAGE_OVERVIEW_ALERT_CONTRACT`): A list of accounts with unsigned contracts.
 * - 7 (`PROFILE_PAGE_OVERVIEW_ALERT_CREDITCARD`): A list of accounts with expired or soon expiring credit cards.
 * - 12 (`PROFILE_PAGE_OVERVIEW_ALERT_MILESTONEVISIT`): A list of accounts with a milestone visit.
 * - 10 (`PROFILE_PAGE_OVERVIEW_ALERT_QUIZ`): A list of accounts with uncompleted quizzes.
 * - 11 (`PROFILE_PAGE_OVERVIEW_ALERT_RISK`): A list of accounts at risk of churn.
 * - 2 (`PROMOTION_PAY`): A list of due membership payments.
 */
enum RsProfileNoteSid: int
{
    case DOORACCESS_BRIVO_INVITATION_BRIVOINVITATIONPROFILE = 5;
    case MEMBER_PROGRESS_LOG_PROFILE = 3;
    case MEMBER_PROGRESS_LOG_VERIFICATION = 4;
    case PAY_ACCOUNT = 1;
    case PROFILE_PAGE_OVERVIEW_ALERT_AGREE = 8;
    case PROFILE_PAGE_OVERVIEW_ALERT_BIRTHDAY = 6;
    case PROFILE_PAGE_OVERVIEW_ALERT_CONTRACT = 9;
    case PROFILE_PAGE_OVERVIEW_ALERT_CREDITCARD = 7;
    case PROFILE_PAGE_OVERVIEW_ALERT_MILESTONEVISIT = 12;
    case PROFILE_PAGE_OVERVIEW_ALERT_QUIZ = 10;
    case PROFILE_PAGE_OVERVIEW_ALERT_RISK = 11;
    case PROMOTION_PAY = 2;
}
