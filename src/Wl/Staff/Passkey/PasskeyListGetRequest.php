<?php

namespace WlSdk\Wl\Staff\Passkey;

class PasskeyListGetRequest
{
    /**
     * Key of the business whose staff passkeys to list.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
