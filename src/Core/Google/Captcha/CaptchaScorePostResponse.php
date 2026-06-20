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
     * @var int|null
     */
    public ?int $id_response = null;

    public function __construct(array $data)
    {
        $this->id_response = isset($data['id_response']) ? (int)$data['id_response'] : null;
    }
}
