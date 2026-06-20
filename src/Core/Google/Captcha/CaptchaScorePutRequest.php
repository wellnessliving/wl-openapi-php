<?php

namespace WlSdk\Core\Google\Captcha;

class CaptchaScorePutRequest
{
    /**
     * Overridden score value for V3 captcha.
     *
     * `null` to reset override.
     *
     * @var float|null
     */
    public ?float $f_score = null;

    public function params(): array
    {
        return array_filter(
            [
            'f_score' => $this->f_score,
            ],
            static fn ($v) => $v !== null
        );
    }
}
