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
enum CaptchaAbstract: int
{
    case Wl\Business\BusinessPaymentCaptcha = 1064;
    case Wl\Lead\LeadCaptcha = 1072;
    case Wl\Review\ReviewCaptcha = 1066;
    case Wl\Profile\Edit\RegisterCaptcha = 1139;
    case Wl\Profile\Edit\RegisterCompleteCaptcha = 1914;
    case Wl\Business\Search\BusinessSearchCaptcha = 1508;
    case Wl\Profile\Setting\Delete\DeleteCaptcha = 1220;
}
