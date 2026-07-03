<?php

namespace WlSdk\Wl\Microsoft\Login;

class MicrosoftLoginGetRequest
{
    /**
     * The client for whom the Microsoft account will be unlinked.
     *
     * @var string|null
     */
    public ?string $uid = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            'url_redirect' => $this->url_redirect,
            ],
            static fn ($v) => $v !== null
        );
    }
}
