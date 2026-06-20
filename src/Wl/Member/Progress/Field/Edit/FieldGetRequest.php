<?php

namespace WlSdk\Wl\Member\Progress\Field\Edit;

class FieldGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            ],
            static fn ($v) => $v !== null
        );
    }
}
