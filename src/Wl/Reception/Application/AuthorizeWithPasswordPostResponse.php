<?php

namespace WlSdk\Wl\Reception\Application;

/**
 * Response from POST
 */
class AuthorizeWithPasswordPostResponse
{
    /**
     * Key of the user, which was signed in.
     *
     * Will be left empty, if user was not able to sign in.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * An optional URL for redirection after the user has signed in to the web application.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
