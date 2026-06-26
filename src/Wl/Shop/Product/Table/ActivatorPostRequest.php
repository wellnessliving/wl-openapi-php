<?php

namespace WlSdk\Wl\Shop\Product\Table;

class ActivatorPostRequest
{
    /**
     * Record key list.
     *
     * @var string[]|null
     */
    public ?array $a_record = null;

    /**
     * `true` if records should be activated, `false` otherwise (deactivated).
     *
     * @var bool|null
     */
    public ?bool $is_activate = null;

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
            'a_record' => $this->a_record,
            'is_activate' => $this->is_activate,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
