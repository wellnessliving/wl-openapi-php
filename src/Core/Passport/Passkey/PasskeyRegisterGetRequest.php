<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyRegisterGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'json_context' => $this->json_context,
            ],
            static fn ($v) => $v !== null
        );
    }
}
