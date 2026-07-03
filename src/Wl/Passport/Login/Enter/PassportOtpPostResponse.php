<?php

namespace WlSdk\Wl\Passport\Login\Enter;

/**
 * Response from POST
 */
class PassportOtpPostResponse
{
    /**
     * Number of attempts left to submit the correct otp code.
     *
     * @var int|null
     */
    public ?int $i_attempt_left = null;

    /**
     * Redirect url after successful authorization.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->i_attempt_left = isset($data['i_attempt_left']) ? (int)$data['i_attempt_left'] : null;
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
