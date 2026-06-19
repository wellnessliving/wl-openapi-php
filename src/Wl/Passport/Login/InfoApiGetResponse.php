<?php
namespace WlSdk\Wl\Passport\Login;

/**
 * Response from GET
 */
class InfoApiGetResponse
{
    /**
     * The current user key.
     * 
     * This will be `null` if the user isn't signed in.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A URL that a user can visit to reset their password.
     *
     * @var string|null
     */
    public ?string $url_password_change = null;

    /**
     * The URL to the registration page.
     *
     * @var string|null
     */
    public ?string $url_register = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_password_change = isset($data['url_password_change']) ? (string)$data['url_password_change'] : null;
        $this->url_register = isset($data['url_register']) ? (string)$data['url_register'] : null;
    }
}
