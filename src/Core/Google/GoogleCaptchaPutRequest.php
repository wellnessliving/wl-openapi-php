<?php

namespace WlSdk\Core\Google;

class GoogleCaptchaPutRequest
{
    /**
     * Captcha version ID.
     *
     * @var int|null
     * @see \WlSdk\Core\Google\Captcha\CaptchaVersionSid
     */
    public ?int $id_version = 1;

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
            'id_version' => $this->id_version,
            'text_action' => $this->text_action,
            'text_token' => $this->text_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
