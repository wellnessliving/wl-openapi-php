<?php

namespace WlSdk\Core\Google;

/**
 * Response from GET
 */
class LoginLinkGetResponse
{
    /**
     * A link for a user to sign in with Google+.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
