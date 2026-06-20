<?php

namespace WlSdk\Core\Captcha;

class CaptchaRequireGetRequest
{
    /**
     * Arguments for creating CAPTCHA object.
     *
     * @var array|null
     */
    public $a_arguments = null;

    /**
     * The CID of the CAPTCHA.
     *
     * @var int|null
     */
    public ?int $cid_captcha = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_arguments' => $this->a_arguments,
            'cid_captcha' => $this->cid_captcha,
            ],
            static fn ($v) => $v !== null
        );
    }
}
