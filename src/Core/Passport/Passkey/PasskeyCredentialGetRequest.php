<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialGetRequest
{
    /**
     * JSON-encoded structure with any additional information required by the project-specific
     * passkey configuration class, for example `k_business` in `Wl`.
     *
     * Needed only to manage passkeys of a user other than the signed-in one; empty if no additional
     * information is required.
     *
     * @var string|null
     */
    public ?string $json_context = null;

    /**
     * Key of the user whose passkey credentials to manage. `'0'` or empty string to use the
     * currently signed-in user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_context' => $this->json_context,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
