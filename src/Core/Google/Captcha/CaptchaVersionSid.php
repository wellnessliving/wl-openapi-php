<?php

namespace WlSdk\Core\Google\Captcha;

/**
 * List of Google reCaptcha versions.
 *
 * Values:
 * - 1 (`V2`): Version 2 (invisible).
 * - 2 (`V3`): Version 3.
 */
class CaptchaVersionSid
{
    /** Version 2 (invisible). */
    public const V2 = 1;

    /** Version 3. */
    public const V3 = 2;
}
