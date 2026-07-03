<?php

namespace WlSdk\Core\Google\Captcha;

/**
 * List of responses for Google Captcha token.
 *
 * Values:
 * - 5 (`ERROR`): Token can be verified due to error from Google Captcha.
 * - 1 (`INVALID`): Token is invalid or expired.
 *
 *   Used by: {@link \WlSdk\Core\Google\Captcha\CaptchaVersionSid} and {@link
 * \WlSdk\Core\Google\Captcha\CaptchaVersionSid}.
 * - 2 (`REQUIRE_V2`): Token is valid, but v2 captcha require.
 *
 *   Used by {@link \WlSdk\Core\Google\Captcha\CaptchaVersionSid} only.
 * - 3 (`VALID`): Token is valid.
 *
 *   Used by: {@link \WlSdk\Core\Google\Captcha\CaptchaVersionSid} and {@link
 * \WlSdk\Core\Google\Captcha\CaptchaVersionSid}.
 * - 4 (`VALID_BLOCK`): Token is valid but score is risky.
 *
 *   Used by {@link \WlSdk\Core\Google\Captcha\CaptchaVersionSid} only.
 */
class CaptchaResponseSid
{
    /** Token can be verified due to error from Google Captcha. */
    public const ERROR = 5;

    /** Token is invalid or expired. */
    public const INVALID = 1;

    /** Token is valid, but v2 captcha require. */
    public const REQUIRE_V2 = 2;

    /** Token is valid. */
    public const VALID = 3;

    /** Token is valid but score is risky. */
    public const VALID_BLOCK = 4;
}
