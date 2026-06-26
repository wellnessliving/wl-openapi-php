<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Remove\Action;

class RemoveDeleteRequest
{
    /**
     * Business key for which trigger/action is performed.
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
