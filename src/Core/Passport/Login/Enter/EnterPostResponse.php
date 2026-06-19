<?php
namespace WlSdk\Core\Passport\Login\Enter;

/**
 * Response from POST
 */
class EnterPostResponse
{
    /**
     * An optional URL for redirection after the user has signed in to the web application.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
