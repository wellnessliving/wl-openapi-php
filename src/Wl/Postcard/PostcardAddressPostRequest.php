<?php

namespace WlSdk\Wl\Postcard;

class PostcardAddressPostRequest
{
    /**
     * Address for validation.
     *
     * @var string|null
     */
    public ?string $json_address = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_address' => $this->json_address,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
