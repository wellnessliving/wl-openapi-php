<?php

namespace WlSdk\Social\Microsoft;

class LoginPostRequest
{
    /**
     * If authorization is performed in a third-party application, set this flag in case of authorization errors.
     *
     * @var bool|null
     */
    public ?bool $is_external = null;

    /**
     * The Redirect URI for external applications.
     * The link to the page on which Microsoft will return the result after authorization.
     *
     * * All possible links must be registered in the Microsoft application used for authorization.
     * * WARNING: Do not use this link for a direct redirect. This will present a vulnerability.
     *
     * * A {@link \WlSdk\Social\Microsoft\Login} link will be generated along with this redirect URI.
     * * When checking the received {@link \WlSdk\Social\Microsoft\Login} from Microsoft.
     * The link must be sent along with it to the `post()` method.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    /**
     * The authorization code that the app requested.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * If a state parameter is included in the request, the same value should appear in the response.
     * The app should verify that the state values in the request and response are identical.
     *
     * @var string|null
     */
    public ?string $s_state = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_external' => $this->is_external,
            'url_redirect' => $this->url_redirect,
            's_code' => $this->s_code,
            's_state' => $this->s_state,
            ],
            static fn ($v) => $v !== null
        );
    }
}
