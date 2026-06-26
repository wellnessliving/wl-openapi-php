<?php

namespace WlSdk\Wl\Field\Config;

class FieldDeleteRequest
{
    /**
     * Field table ID.
     *
     * @var int|null
     * @see \WlSdk\RsFieldTableSid
     */
    public ?int $id_field_table = null;

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
            'id_field_table' => $this->id_field_table,
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            ],
            static fn ($v) => $v !== null
        );
    }
}
