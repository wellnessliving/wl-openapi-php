<?php

namespace WlSdk\Core\Google\Captcha;

/**
 * Response from GET
 */
class CaptchaScoreGetResponse
{
    /**
     * Overridden score value for V3 captcha.
     *
     * `null` to reset override.
     *
     * @var float|null
     */
    public ?float $f_score = null;

    public function __construct(array $data)
    {
        $this->f_score = isset($data['f_score']) ? (float)$data['f_score'] : null;
    }
}
