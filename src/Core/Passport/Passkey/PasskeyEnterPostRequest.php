<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyEnterPostRequest
{
    /**
     * JSON-encoded `PublicKeyCredential` produced by `navigator.credentials.get()`, sent back to
     * finish the authentication ceremony.
     *
     * Empty when starting the ceremony.
     *
     * @var string|null
     */
    public ?string $json_credential = null;

    /**
     * Url of previous page if the user was redirected to the login page.
     *
     * Only used to finish the ceremony.
     *
     * @var string|null
     */
    public ?string $url_return = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_credential' => $this->json_credential,
            'url_return' => $this->url_return,
            ],
            static fn ($v) => $v !== null
        );
    }
}
