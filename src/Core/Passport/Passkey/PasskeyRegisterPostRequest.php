<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyRegisterPostRequest
{
    /**
     * JSON-encoded `PublicKeyCredential` produced by `navigator.credentials.create()`, sent back
     * to finish the registration ceremony.
     *
     * Empty when starting the ceremony.
     *
     * @var string|null
     */
    public ?string $json_credential = null;

    /**
     * User-supplied friendly label of the passkey being registered, for example `"MacBook Touch ID"`.
     *
     * Only used to finish the ceremony.
     *
     * @var string|null
     */
    public ?string $text_device = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_credential' => $this->json_credential,
            'text_device' => $this->text_device,
            ],
            static fn ($v) => $v !== null
        );
    }
}
