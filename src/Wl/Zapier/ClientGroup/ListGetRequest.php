<?php

namespace WlSdk\Wl\Zapier\ClientGroup;

class ListGetRequest
{
    /**
     * `true` if include auto-updated groups, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_include_update = null;

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
            'is_include_update' => $this->is_include_update,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
