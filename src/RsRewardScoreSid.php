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
class RsRewardScoreSid
{
    /** Customer Birthday earns X points. */
    public const BIRTHDAY = 16;

    /** Book a class online. */
    public const BOOK = 14;

    /** Book a class and share on Facebook. */
    public const BOOK_FACEBOOK = 2;

    /** Book a class and share on Twitter. */
    public const BOOK_TWITTER = 3;

    /** Custom action. */
    public const CUSTOM = 26;

    /** Connect profile to Facebook. */
    public const LOGIN_FACEBOOK = 7;

    /** Each Dollar spent earns customers X points. */
    public const PAY = 15;

    /** The reward for the purchase of some product. */
    public const PURCHASE_PRODUCT = 28;

    /** The reward for the purchase of some promotion. */
    public const PURCHASE_PROMOTION = 27;

    /** Share to facebook purchased item. */
    public const PURCHASE_SHARE_FACEBOOK = 22;

    /** Share to twitter purchased item. */
    public const PURCHASE_SHARE_TWITTER = 23;

    /** Referral purchase. */
    public const REFER_PURCHASE = 30;

    /** Referral registration. */
    public const REFER_REGISTER = 31;

    /** User registration. */
    public const REGISTRATION = 20;

    /** Record to reset all-time earned user points. This points will be always negative. */
    public const RESET = 25;

    /** Record to reset current available user points. This points will be always negative. */
    public const RESET_AVAILABLE = 32;

    /** Write a review on microsite. */
    public const REVIEW = 11;

    /** Write a review on microsite and share on Facebook. */
    public const REVIEW_FACEBOOK = 9;

    /** Write a review on microsite and share on Twitter. */
    public const REVIEW_TWITTER = 10;

    /** Visit classes on the same location. */
    public const VISIT = 12;

    /** Attending a specific appointment earns customers X points. */
    public const VISIT_APPOINTMENT = 29;

    /** Attending a specific class earns customers X points. */
    public const VISIT_CLASS = 18;

    /** Attending a specific Workshop/Enrollment/Event earns customers X points. */
    public const VISIT_ENROLLMENT = 19;
}
