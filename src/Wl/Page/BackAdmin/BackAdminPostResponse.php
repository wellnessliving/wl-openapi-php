<?php

namespace WlSdk\Wl\Page\BackAdmin;

/**
 * Response from POST
 */
class BackAdminPostResponse
{
    /**
     * A link to redirect to an administrator account who is currently signed as a different user.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
