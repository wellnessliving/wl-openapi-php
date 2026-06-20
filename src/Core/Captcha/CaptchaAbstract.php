<?php

namespace WlSdk\Core\Captcha;

/**
 * Base class for captcha.
 *
 * Values:
 * - 1064 (`Wl\Business\BusinessPaymentCaptcha`): Captcha for payment action.
 * - 1072 (`Wl\Lead\LeadCaptcha`): Captcha for "Lead Capture Widget".
 * - 1066 (`Wl\Review\ReviewCaptcha`): Captcha for post review.
 * - 1139 (`Wl\Profile\Edit\RegisterCaptcha`): Captcha for user registration action.
 * - 1914 (`Wl\Profile\Edit\RegisterCompleteCaptcha`): Captcha for user registration completion action.
 * - 1508 (`Wl\Business\Search\BusinessSearchCaptcha`): Captcha for business search action.
 * - 1220 (`Wl\Profile\Setting\Delete\DeleteCaptcha`): Captcha for delete account.
 */
class CaptchaAbstract
{
    /** Captcha for payment action. */
    public const BusinessPaymentCaptcha = 1064;

    /** Captcha for "Lead Capture Widget". */
    public const LeadCaptcha = 1072;

    /** Captcha for post review. */
    public const ReviewCaptcha = 1066;

    /** Captcha for user registration action. */
    public const RegisterCaptcha = 1139;

    /** Captcha for user registration completion action. */
    public const RegisterCompleteCaptcha = 1914;

    /** Captcha for business search action. */
    public const BusinessSearchCaptcha = 1508;

    /** Captcha for delete account. */
    public const DeleteCaptcha = 1220;
}
