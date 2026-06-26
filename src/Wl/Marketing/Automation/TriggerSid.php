<?php

namespace WlSdk\Wl\Marketing\Automation;

/**
 * List of triggers for automations.
 *
 * Last used ID: 23.
 *
 * Values:
 * - 16 (`ABANDONED_CHECKOUT`): Triggers when a checkout is abandoned.
 * - 1 (`CLASSES_PROMOTE`): Triggers after new class schedule is added.
 * - 19 (`CLIENT_BIRTHDAY`): Triggers when a client has a birthday.
 * - 14 (`CLIENT_CANCEL_BOOK`): Triggers after a client canceled booking.
 * - 17 (`CLIENT_GROUP_ADDED`): Triggers when a client is added to a group.
 * - 18 (`CLIENT_GROUP_REMOVED`): Triggers when a client is removed from a group.
 * - 20 (`CLIENT_LEFT_REVIEW`): Triggers when a client posts a review.
 * - 13 (`CLIENT_NO_SHOW`): Triggers after a client did not show up to a service reserved by.
 * - 21 (`CLIENT_REFERRED`): Triggers when a client is referred.
 * - 2 (`EVENT_PROMOTE`): Triggers after new event schedule is added.
 * - 22 (`FORM_SUBMITTED`): Triggers when a form is submitted.
 * - 3 (`LEAD_CAPTURE`): Triggers after a client fill out a Lead Capture Form on the website of a business.
 * - 4 (`LOGIN_BACK`): Triggers when a client long time did not visit location.
 * - 23 (`NEW_CLIENT_ADDED`): Triggers when a new client is added.
 * - 6 (`PRODUCT_PURCHASE`): Triggers after a client purchases a product.
 * - 8 (`PROMOTION_EXPIRE`): Triggers when membership expires.
 * - 7 (`PROMOTION_LOW`): Triggers when a client only has a few visits remaining on their pass.
 * - 10 (`PROMOTION_PURCHASE`): Triggers after a client purchases a promotion.
 * - 9 (`PROMOTION_RENEW`): Triggers before certain count of days before membership renews.
 * - 15 (`PROMOTION_USED`): Triggers when a client attends a visit using a purchase option.
 * - 12 (`SERVICE_BOOK`): Triggers after a service booking.
 * - 11 (`VISIT_CAMPAIGN`): Triggers after visit the service.
 */
class TriggerSid
{
    /** Triggers when a checkout is abandoned. */
    public const ABANDONED_CHECKOUT = 16;

    /** Triggers after new class schedule is added. */
    public const CLASSES_PROMOTE = 1;

    /** Triggers when a client has a birthday. */
    public const CLIENT_BIRTHDAY = 19;

    /** Triggers after a client canceled booking. */
    public const CLIENT_CANCEL_BOOK = 14;

    /** Triggers when a client is added to a group. */
    public const CLIENT_GROUP_ADDED = 17;

    /** Triggers when a client is removed from a group. */
    public const CLIENT_GROUP_REMOVED = 18;

    /** Triggers when a client posts a review. */
    public const CLIENT_LEFT_REVIEW = 20;

    /** Triggers after a client did not show up to a service reserved by. */
    public const CLIENT_NO_SHOW = 13;

    /** Triggers when a client is referred. */
    public const CLIENT_REFERRED = 21;

    /** Triggers after new event schedule is added. */
    public const EVENT_PROMOTE = 2;

    /** Triggers when a form is submitted. */
    public const FORM_SUBMITTED = 22;

    /** Triggers after a client fill out a Lead Capture Form on the website of a business. */
    public const LEAD_CAPTURE = 3;

    /** Triggers when a client long time did not visit location. */
    public const LOGIN_BACK = 4;

    /** Triggers when a new client is added. */
    public const NEW_CLIENT_ADDED = 23;

    /** Triggers after a client purchases a product. */
    public const PRODUCT_PURCHASE = 6;

    /** Triggers when membership expires. */
    public const PROMOTION_EXPIRE = 8;

    /** Triggers when a client only has a few visits remaining on their pass. */
    public const PROMOTION_LOW = 7;

    /** Triggers after a client purchases a promotion. */
    public const PROMOTION_PURCHASE = 10;

    /** Triggers before certain count of days before membership renews. */
    public const PROMOTION_RENEW = 9;

    /** Triggers when a client attends a visit using a purchase option. */
    public const PROMOTION_USED = 15;

    /** Triggers after a service booking. */
    public const SERVICE_BOOK = 12;

    /** Triggers after visit the service. */
    public const VISIT_CAMPAIGN = 11;
}
