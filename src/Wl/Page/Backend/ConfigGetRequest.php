<?php

namespace WlSdk\Wl\Page\Backend;

class ConfigGetRequest
{
    /**
     * Key of the business, where we want to change staff back office settings.
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
