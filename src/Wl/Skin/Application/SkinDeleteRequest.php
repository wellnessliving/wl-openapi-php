<?php

namespace WlSdk\Wl\Skin\Application;

class SkinDeleteRequest
{
    /**
     * Whether customization billing is confirmed.
     *
     * `true` to finish delete process even if customization fee will be billed.
     * `false` if customization fee should be required for confirmation.
     *
     * @var bool|null
     */
    public ?bool $is_billing_confirm = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_billing_confirm' => $this->is_billing_confirm,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
