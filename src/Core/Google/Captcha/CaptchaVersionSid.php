<?php
namespace WlSdk\Core\Google\Captcha;

/**
 * List of Google reCaptcha versions.
 * 
 * Values:
 * - 1 (`V2`): Version 2 (invisible).
 * - 2 (`V3`): Version 3.
 */
enum CaptchaVersionSid: int
{
    case V2 = 1;
    case V3 = 2;
}
