<?php

namespace WlSdk;

/**
 * Manages identifiers of user activity.
 *
 * Last ID: 56.
 *
 * Values:
 * - 27 (`APPOINTMENT_BOOK`): Client books an appointment.
 * - 47 (`APPOINTMENT_BOOK_FACEBOOK`): Client booked an appointment and shared on Facebook.
 * - 48 (`APPOINTMENT_BOOK_TWITTER`): Client booked an appointment and shared on Twitter.
 * - 28 (`APPOINTMENT_CANCEL`): Client cancels an appointment.
 * - 23 (`APPOINTMENT_VISIT`): Client attends an appointment.
 * - 52 (`APPOINTMENT_WAIT`): Client books an appointment to wait list.
 * - 49 (`ASSET_BOOK_FACEBOOK`): Client booked an asset and shared on Facebook.
 * - 50 (`ASSET_BOOK_TWITTER`): Client booked an asset and shared on Twitter.
 * - 1 (`BIRTHDAY`): Client's birthday.
 * - 2 (`CLASS_BOOK`): Client booked a class.
 * - 43 (`CLASS_BOOK_FACEBOOK`): Client booked a class and shared on Facebook.
 * - 44 (`CLASS_BOOK_TWITTER`): Client booked a class and shared on Twitter.
 * - 3 (`CLASS_CANCEL`): Client cancelled a class.
 * - 15 (`CLASS_VISIT`): Client attends a class.
 * - 54 (`CLASS_WAIT`): Client booked a class.
 * - 51 (`COUPON_TRANSFER`): Gift card transferred.
 * - 31 (`CUSTOM_REWARD`): Staff approved a custom reward for a client.
 * - 17 (`ENROLLMENT_BOOK`): Client booked an enrollment.
 * - 45 (`ENROLLMENT_BOOK_FACEBOOK`): Client booked an enrollment and shared on Facebook.
 * - 46 (`ENROLLMENT_BOOK_TWITTER`): Client booked an enrollment and shared on Twitter.
 * - 18 (`ENROLLMENT_CANCEL`): Client cancels an enrollment.
 * - 16 (`ENROLLMENT_VISIT`): Client attends an enrollment.
 * - 53 (`ENROLLMENT_WAIT`): Client booked an enrollment.
 * - 12 (`FACEBOOK_CONNECT`): Client connected his Facebook account.
 * - 19 (`FACEBOOK_DISCONNECT`): Client disconnected his Facebook account.
 * - 4 (`FAVORITE_ADD_CLASS`): Client added a class to favorites.
 * - 5 (`FAVORITE_ADD_LOCATION`): Client added a location to favorites.
 * - 6 (`FAVORITE_ADD_STAFF`): Client added a staff member to favorites.
 * - 7 (`FAVORITE_REMOVE_CLASS`): Client removed a class from favorites.
 * - 8 (`FAVORITE_REMOVE_LOCATION`): Client removed a location from favorites.
 * - 9 (`FAVORITE_REMOVE_STAFF`): Client removed a staff member from favorites.
 * - 10 (`FRIEND_ADD`): Client added a friend.
 * - 32 (`GYM_VISIT`): Client made a gym visit.
 * - 14 (`INVITE_SEND`): Client sent an invite.
 * - 39 (`LOCATION_SHARE_FACEBOOK`): The user shared location item into Facebook
 * - 40 (`LOCATION_SHARE_TWITTER`): The user shared location item into Twitter
 * - 22 (`PAY`): The user spend money.
 * - 24 (`PRIZE`): Client has bought prize.
 * - 34 (`PROMOTION_TRANSFER`): Promotion transferred.
 * - 30 (`PURCHASE_PRODUCT`): Customer bought the product.
 * - 29 (`PURCHASE_PROMOTION`): Customer bought the promotion.
 * - 25 (`PURCHASE_SHARE_FACEBOOK`): The user shared purchase item into Facebook
 * - 26 (`PURCHASE_SHARE_TWITTER`): The user shared purchase item into Twitter
 * - 38 (`REFER_PURCHASE`): Referral made a purchase.
 * - 37 (`REFER_REGISTER`): A referrer is set for the user.
 * - 21 (`REGISTRATION`): The user has logged in.
 * - 11 (`REVIEW`): Client wrote a review.
 * - 41 (`REVIEW_SHARE_FACEBOOK`): The user shared purchase item into Facebook
 * - 42 (`REVIEW_SHARE_TWITTER`): The user shared purchase item into Twitter
 * - 55 (`REWARD_MANUAL`): Reward points were changed manually.
 * - 36 (`REWARD_RESET`): All-time earned reward points have been reset.
 * - 56 (`REWARD_RESET_AVAILABLE`): Current available reward points have been reset.
 * - 35 (`SUMMARY_VISIT`): Client attended several visits.
 * - 13 (`TWITTER_CONNECT`): Client connected his Twitter account.
 * - 20 (`TWITTER_DISCONNECT`): Client disconnected his Twitter account.
 */
class RsLoginActivityTypeSid
{
    /** Client books an appointment. */
    public const APPOINTMENT_BOOK = 27;

    /** Client booked an appointment and shared on Facebook. */
    public const APPOINTMENT_BOOK_FACEBOOK = 47;

    /** Client booked an appointment and shared on Twitter. */
    public const APPOINTMENT_BOOK_TWITTER = 48;

    /** Client cancels an appointment. */
    public const APPOINTMENT_CANCEL = 28;

    /** Client attends an appointment. */
    public const APPOINTMENT_VISIT = 23;

    /** Client books an appointment to wait list. */
    public const APPOINTMENT_WAIT = 52;

    /** Client booked an asset and shared on Facebook. */
    public const ASSET_BOOK_FACEBOOK = 49;

    /** Client booked an asset and shared on Twitter. */
    public const ASSET_BOOK_TWITTER = 50;

    /** Client's birthday. */
    public const BIRTHDAY = 1;

    /** Client booked a class. */
    public const CLASS_BOOK = 2;

    /** Client booked a class and shared on Facebook. */
    public const CLASS_BOOK_FACEBOOK = 43;

    /** Client booked a class and shared on Twitter. */
    public const CLASS_BOOK_TWITTER = 44;

    /** Client cancelled a class. */
    public const CLASS_CANCEL = 3;

    /** Client attends a class. */
    public const CLASS_VISIT = 15;

    /** Client booked a class. */
    public const CLASS_WAIT = 54;

    /** Gift card transferred. */
    public const COUPON_TRANSFER = 51;

    /** Staff approved a custom reward for a client. */
    public const CUSTOM_REWARD = 31;

    /** Client booked an enrollment. */
    public const ENROLLMENT_BOOK = 17;

    /** Client booked an enrollment and shared on Facebook. */
    public const ENROLLMENT_BOOK_FACEBOOK = 45;

    /** Client booked an enrollment and shared on Twitter. */
    public const ENROLLMENT_BOOK_TWITTER = 46;

    /** Client cancels an enrollment. */
    public const ENROLLMENT_CANCEL = 18;

    /** Client attends an enrollment. */
    public const ENROLLMENT_VISIT = 16;

    /** Client booked an enrollment. */
    public const ENROLLMENT_WAIT = 53;

    /** Client connected his Facebook account. */
    public const FACEBOOK_CONNECT = 12;

    /** Client disconnected his Facebook account. */
    public const FACEBOOK_DISCONNECT = 19;

    /** Client added a class to favorites. */
    public const FAVORITE_ADD_CLASS = 4;

    /** Client added a location to favorites. */
    public const FAVORITE_ADD_LOCATION = 5;

    /** Client added a staff member to favorites. */
    public const FAVORITE_ADD_STAFF = 6;

    /** Client removed a class from favorites. */
    public const FAVORITE_REMOVE_CLASS = 7;

    /** Client removed a location from favorites. */
    public const FAVORITE_REMOVE_LOCATION = 8;

    /** Client removed a staff member from favorites. */
    public const FAVORITE_REMOVE_STAFF = 9;

    /** Client added a friend. */
    public const FRIEND_ADD = 10;

    /** Client made a gym visit. */
    public const GYM_VISIT = 32;

    /** Client sent an invite. */
    public const INVITE_SEND = 14;

    /** The user shared location item into Facebook */
    public const LOCATION_SHARE_FACEBOOK = 39;

    /** The user shared location item into Twitter */
    public const LOCATION_SHARE_TWITTER = 40;

    /** The user spend money. */
    public const PAY = 22;

    /** Client has bought prize. */
    public const PRIZE = 24;

    /** Promotion transferred. */
    public const PROMOTION_TRANSFER = 34;

    /** Customer bought the product. */
    public const PURCHASE_PRODUCT = 30;

    /** Customer bought the promotion. */
    public const PURCHASE_PROMOTION = 29;

    /** The user shared purchase item into Facebook */
    public const PURCHASE_SHARE_FACEBOOK = 25;

    /** The user shared purchase item into Twitter */
    public const PURCHASE_SHARE_TWITTER = 26;

    /** Referral made a purchase. */
    public const REFER_PURCHASE = 38;

    /** A referrer is set for the user. */
    public const REFER_REGISTER = 37;

    /** The user has logged in. */
    public const REGISTRATION = 21;

    /** Client wrote a review. */
    public const REVIEW = 11;

    /** The user shared purchase item into Facebook */
    public const REVIEW_SHARE_FACEBOOK = 41;

    /** The user shared purchase item into Twitter */
    public const REVIEW_SHARE_TWITTER = 42;

    /** Reward points were changed manually. */
    public const REWARD_MANUAL = 55;

    /** All-time earned reward points have been reset. */
    public const REWARD_RESET = 36;

    /** Current available reward points have been reset. */
    public const REWARD_RESET_AVAILABLE = 56;

    /** Client attended several visits. */
    public const SUMMARY_VISIT = 35;

    /** Client connected his Twitter account. */
    public const TWITTER_CONNECT = 13;

    /** Client disconnected his Twitter account. */
    public const TWITTER_DISCONNECT = 20;
}
