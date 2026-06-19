<?php
namespace WlSdk\Wl\Passport\Login\Register;

/**
 * Response from POST
 */
class RegisterOtpPostResponse
{
    /**
     * Number of attempts left to submit the correct otp code.
     *
     * @var int|null
     */
    public ?int $i_attempt_left = null;

    /**
     * JWT token generated after successful otp validation.
     *
     * @var string|null
     */
    public ?string $s_jwt_token = null;

    /**
     * Key of the user, which was signed in after successful otp verification.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Redirect url after successful authorization.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->i_attempt_left = isset($data['i_attempt_left']) ? (int)$data['i_attempt_left'] : null;
        $this->s_jwt_token = isset($data['s_jwt_token']) ? (string)$data['s_jwt_token'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
