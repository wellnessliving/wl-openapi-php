<?php

namespace WlSdk\Wl\Login\Attendance\Design;

class CustomizePostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Field settings of attendance list.
     * The key is settings name (sid constant from {@link \WlSdk\Wl\Login\Attendance\Design\FieldListSid}) and the
     * value is
     * settings value.
     *
     * @var int[]|null
     */
    public ?array $a_field = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_field' => $this->a_field,
            ],
            static fn ($v) => $v !== null
        );
    }
}
