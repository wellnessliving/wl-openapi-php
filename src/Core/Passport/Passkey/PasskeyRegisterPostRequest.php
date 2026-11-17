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
     * Friendly label of the passkey being registered, for example `"MacBook Touch ID"`.
     *
     * Optional and only used to finish the ceremony. When empty, the backend names the passkey itself: after
     * the browser and the operating system of the request (`Chrome on Windows`), or `Passkey` if they are unknown,
     * with
     * the lowest unused number added if the user has a passkey with that name already. A label that is sent is
     * saved
     * as it is, after trimming; it is kept for the clients that still ask the user for a name.
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
