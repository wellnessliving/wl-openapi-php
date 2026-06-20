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
     * @var \WlSdk\Core\Captcha\CaptchaAbstract|null
     */
    public ?\WlSdk\Core\Captcha\CaptchaAbstract $cid_captcha = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_arguments' => $this->a_arguments,
            'cid_captcha' => $this->cid_captcha?->value,
            ],
            static fn($v) => $v !== null
        );
    }
}
