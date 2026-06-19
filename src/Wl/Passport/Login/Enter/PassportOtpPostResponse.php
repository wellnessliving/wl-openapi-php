<?php
namespace WlSdk\Wl\Passport\Login\Enter;

/**
 * Response from POST
 */
class PassportOtpPostResponse
{
    /**
     * Redirect url after successful authorization.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
