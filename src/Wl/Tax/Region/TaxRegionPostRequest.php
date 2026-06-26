<?php

namespace WlSdk\Wl\Tax\Region;

class TaxRegionPostRequest
{
    /**
     * Tax value.
     *
     * @var float|null
     */
    public ?float $f_tax_region = null;

    /**
     * Status of tax region.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Primary key of tax in RsTaxSql table.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    public function params(): array
    {
        return array_filter(
            [
            'f_tax_region' => $this->f_tax_region,
            'is_active' => $this->is_active,
            'k_tax' => $this->k_tax,
            ],
            static fn ($v) => $v !== null
        );
    }
}
