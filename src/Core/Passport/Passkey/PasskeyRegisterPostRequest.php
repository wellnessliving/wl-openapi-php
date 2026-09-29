<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyRegisterPostRequest
{
    /**
     * JSON-encoded structure with any additional information required by the project-specific
     * passkey configuration class, for example `k_business` in `Wl`.
     *
     * Empty if no additional information is required.
     *
     * @var string|null
     */
    public ?string $json_context = null;

    /**
     * JSON-encoded credential produced by the authenticator, sent back to finish the registration
     * ceremony.
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
            'json_context' => $this->json_context,
            'json_credential' => $this->json_credential,
            'text_device' => $this->text_device,
            ],
            static fn ($v) => $v !== null
        );
    }
}
