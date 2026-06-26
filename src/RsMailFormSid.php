<?php

namespace WlSdk;

/**
 * List of mail form modes.
 *
 * Last used ID: 5
 *
 * Values:
 * - 1 (`ALL`): Form with all mail models. Means that you can manage mail, sms, postcard on the one form.
 * - 2 (`MAIL`): Form with mail model. Only mail form will be shown.
 * - 4 (`POSTCARD`): Form with postcard model. Only postcard form will be shown.
 * - 5 (`PUSH`): Form with push notification model.
 * - 3 (`SMS`): Form with sms  model. Only sms form will be shown.
 */
class RsMailFormSid
{
    /** Form with all mail models. Means that you can manage mail, sms, postcard on the one form. */
    public const ALL = 1;

    /** Form with mail model. Only mail form will be shown. */
    public const MAIL = 2;

    /** Form with postcard model. Only postcard form will be shown. */
    public const POSTCARD = 4;

    /** Form with push notification model. */
    public const PUSH = 5;

    /** Form with sms  model. Only sms form will be shown. */
    public const SMS = 3;
}
