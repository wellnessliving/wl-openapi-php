<?php
namespace WlSdk;

/**
 * Types of reward actions.
 * 
 * Last used ID: 32
 * 
 * Values:
 * - 16 (`BIRTHDAY`): Customer Birthday earns X points.
 * - 14 (`BOOK`): Book a class online.
 * - 2 (`BOOK_FACEBOOK`): Book a class and share on Facebook.
 * - 3 (`BOOK_TWITTER`): Book a class and share on Twitter.
 * - 26 (`CUSTOM`): Custom action.
 * - 7 (`LOGIN_FACEBOOK`): Connect profile to Facebook.
 * - 15 (`PAY`): Each Dollar spent earns customers X points.
 * - 28 (`PURCHASE_PRODUCT`): The reward for the purchase of some product.
 * - 27 (`PURCHASE_PROMOTION`): The reward for the purchase of some promotion.
 * - 22 (`PURCHASE_SHARE_FACEBOOK`): Share to facebook purchased item.
 * - 23 (`PURCHASE_SHARE_TWITTER`): Share to twitter purchased item.
 * - 30 (`REFER_PURCHASE`): Referral purchase.
 * - 31 (`REFER_REGISTER`): Referral registration.
 * - 20 (`REGISTRATION`): User registration.
 * - 25 (`RESET`): Record to reset all-time earned user points. This points will be always negative.
 * - 32 (`RESET_AVAILABLE`): Record to reset current available user points. This points will be always negative.
 * - 11 (`REVIEW`): Write a review on microsite.
 * - 9 (`REVIEW_FACEBOOK`): Write a review on microsite and share on Facebook.
 * - 10 (`REVIEW_TWITTER`): Write a review on microsite and share on Twitter.
 * - 12 (`VISIT`): Visit classes on the same location.
 * - 29 (`VISIT_APPOINTMENT`): Attending a specific appointment earns customers X points.
 * - 18 (`VISIT_CLASS`): Attending a specific class earns customers X points.
 * - 19 (`VISIT_ENROLLMENT`): Attending a specific Workshop/Enrollment/Event earns customers X points.
 */
enum RsRewardScoreSid: int
{
    case BIRTHDAY = 16;
    case BOOK = 14;
    case BOOK_FACEBOOK = 2;
    case BOOK_TWITTER = 3;
    case CUSTOM = 26;
    case LOGIN_FACEBOOK = 7;
    case PAY = 15;
    case PURCHASE_PRODUCT = 28;
    case PURCHASE_PROMOTION = 27;
    case PURCHASE_SHARE_FACEBOOK = 22;
    case PURCHASE_SHARE_TWITTER = 23;
    case REFER_PURCHASE = 30;
    case REFER_REGISTER = 31;
    case REGISTRATION = 20;
    case RESET = 25;
    case RESET_AVAILABLE = 32;
    case REVIEW = 11;
    case REVIEW_FACEBOOK = 9;
    case REVIEW_TWITTER = 10;
    case VISIT = 12;
    case VISIT_APPOINTMENT = 29;
    case VISIT_CLASS = 18;
    case VISIT_ENROLLMENT = 19;
}
