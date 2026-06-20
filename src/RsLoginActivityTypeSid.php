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
enum RsLoginActivityTypeSid: int
{
    case APPOINTMENT_BOOK = 27;
    case APPOINTMENT_BOOK_FACEBOOK = 47;
    case APPOINTMENT_BOOK_TWITTER = 48;
    case APPOINTMENT_CANCEL = 28;
    case APPOINTMENT_VISIT = 23;
    case APPOINTMENT_WAIT = 52;
    case ASSET_BOOK_FACEBOOK = 49;
    case ASSET_BOOK_TWITTER = 50;
    case BIRTHDAY = 1;
    case CLASS_BOOK = 2;
    case CLASS_BOOK_FACEBOOK = 43;
    case CLASS_BOOK_TWITTER = 44;
    case CLASS_CANCEL = 3;
    case CLASS_VISIT = 15;
    case CLASS_WAIT = 54;
    case COUPON_TRANSFER = 51;
    case CUSTOM_REWARD = 31;
    case ENROLLMENT_BOOK = 17;
    case ENROLLMENT_BOOK_FACEBOOK = 45;
    case ENROLLMENT_BOOK_TWITTER = 46;
    case ENROLLMENT_CANCEL = 18;
    case ENROLLMENT_VISIT = 16;
    case ENROLLMENT_WAIT = 53;
    case FACEBOOK_CONNECT = 12;
    case FACEBOOK_DISCONNECT = 19;
    case FAVORITE_ADD_CLASS = 4;
    case FAVORITE_ADD_LOCATION = 5;
    case FAVORITE_ADD_STAFF = 6;
    case FAVORITE_REMOVE_CLASS = 7;
    case FAVORITE_REMOVE_LOCATION = 8;
    case FAVORITE_REMOVE_STAFF = 9;
    case FRIEND_ADD = 10;
    case GYM_VISIT = 32;
    case INVITE_SEND = 14;
    case LOCATION_SHARE_FACEBOOK = 39;
    case LOCATION_SHARE_TWITTER = 40;
    case PAY = 22;
    case PRIZE = 24;
    case PROMOTION_TRANSFER = 34;
    case PURCHASE_PRODUCT = 30;
    case PURCHASE_PROMOTION = 29;
    case PURCHASE_SHARE_FACEBOOK = 25;
    case PURCHASE_SHARE_TWITTER = 26;
    case REFER_PURCHASE = 38;
    case REFER_REGISTER = 37;
    case REGISTRATION = 21;
    case REVIEW = 11;
    case REVIEW_SHARE_FACEBOOK = 41;
    case REVIEW_SHARE_TWITTER = 42;
    case REWARD_MANUAL = 55;
    case REWARD_RESET = 36;
    case REWARD_RESET_AVAILABLE = 56;
    case SUMMARY_VISIT = 35;
    case TWITTER_CONNECT = 13;
    case TWITTER_DISCONNECT = 20;
}
