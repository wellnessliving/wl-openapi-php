<?php

namespace WlSdk\Wl\Skin;

class SkinGetRequest
{
    /**
     * Skin key.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_skin' => $this->k_skin,
            ],
            static fn ($v) => $v !== null
        );
    }
}
