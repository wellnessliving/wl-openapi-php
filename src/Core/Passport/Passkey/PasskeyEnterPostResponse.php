<?php

namespace WlSdk\Core\Passport\Passkey;

/**
 * Response from POST
 */
class PasskeyEnterPostResponse
{
    /**
     * An optional URL for redirection after the user has signed in.
     *
     * Only used to finish the ceremony.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
