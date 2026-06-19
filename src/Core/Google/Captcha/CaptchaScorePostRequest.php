<?php
namespace WlSdk\Core\Google\Captcha;

class CaptchaScorePostRequest
{
    /**
     * The user token CAPTCHA from
     * [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) captcha.
     * 
     * Be careful when use this endpoint for validate token, because token can be used only once,
     * so if you validate token in this endpoint, you must generate new token for next requests.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
