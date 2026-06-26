<?php

namespace WlSdk\Wl\Skin;

class SkinPostRequest
{
    /**
     * Skin key.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * Skin fields to save.
     * Key is full name of the skin field, it is separated string containing field name and element name from
     * Application::field_list().
     * Value is new field value.
     *
     * @var array|null
     */
    public ?array $a_field = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_skin' => $this->k_skin,
            'a_field' => $this->a_field,
            ],
            static fn ($v) => $v !== null
        );
    }
}
