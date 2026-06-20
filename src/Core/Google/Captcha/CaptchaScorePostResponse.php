<?php
namespace WlSdk\Core\Google\Captcha;

/**
 * Response from POST
 */
class CaptchaScorePostResponse
{
    /**
     * Captcha response ID.
     *
     * @var \WlSdk\Core\Google\Captcha\CaptchaResponseSid|null
     */
    public ?\WlSdk\Core\Google\Captcha\CaptchaResponseSid $id_response = null;

    public function __construct(array $data)
    {
        $this->id_response = isset($data['id_response']) ? \WlSdk\Core\Google\Captcha\CaptchaResponseSid::tryFrom((int)$data['id_response']) : null;
    }
}
