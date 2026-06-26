<?php

namespace WlSdk\Wl\Business\Phone;

class SettingsPostRequest
{
    /**
     * Is individual read.
     *
     * @var bool|null
     */
    public ?bool $is_individual_read = null;

    /**
     * Business key.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_individual_read' => $this->is_individual_read,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
