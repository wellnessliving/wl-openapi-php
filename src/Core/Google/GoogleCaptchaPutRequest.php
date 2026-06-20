<?php
namespace WlSdk\Core\Google;

class GoogleCaptchaPutRequest
{
    /**
     * Captcha version ID.
     *
     * @var \WlSdk\Core\Google\Captcha\CaptchaVersionSid|null
     */
    public ?\WlSdk\Core\Google\Captcha\CaptchaVersionSid $id_version = null;

    /**
     * The action name.
     * 
     * Used to determine the place where the CAPTCHA is needed in documentation for endpoints that used
     * the CAPTCHA.
     *
     * @var string|null
     */
    public ?string $text_action = null;

    /**
     * The user token CAPTCHA.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_version' => $this->id_version?->value,
            'text_action' => $this->text_action,
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
