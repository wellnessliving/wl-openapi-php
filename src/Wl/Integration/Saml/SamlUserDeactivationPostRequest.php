<?php

namespace WlSdk\Wl\Integration\Saml;

class SamlUserDeactivationPostRequest
{
    /**
     * A list of SAML identifiers.
     *
     * @var string[]|null
     */
    public ?array $a_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_id' => $this->a_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
