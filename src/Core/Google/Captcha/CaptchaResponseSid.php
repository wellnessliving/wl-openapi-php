<?php
namespace WlSdk\Core\Google\Captcha;

/**
 * List of responses for Google Captcha token.
 * 
 * Values:
 * - 5 (`ERROR`): Token can be verified due to error from Google Captcha.
 * - 1 (`INVALID`): Token is invalid or expired.
 * 
 *   Used by: [CaptchaVersionSid::V2](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) and
 * [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid).
 * - 2 (`REQUIRE_V2`): Token is valid, but v2 captcha require.
 * 
 *   Used by [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) only.
 * - 3 (`VALID`): Token is valid.
 * 
 *   Used by: [CaptchaVersionSid::V2](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) and
 * [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid).
 * - 4 (`VALID_BLOCK`): Token is valid but score is risky.
 * 
 *   Used by [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) only.
 */
enum CaptchaResponseSid: int
{
    case ERROR = 5;
    case INVALID = 1;
    case REQUIRE_V2 = 2;
    case VALID = 3;
    case VALID_BLOCK = 4;
}
