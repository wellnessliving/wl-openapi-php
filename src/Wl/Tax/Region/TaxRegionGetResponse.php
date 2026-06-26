<?php

namespace WlSdk\Wl\Tax\Region;

/**
 * Response from GET
 */
class TaxRegionGetResponse
{
    /**
     * Tax value.
     *
     * @var float|null
     */
    public ?float $f_tax_region = null;

    /**
     * `true` - changes of the tax value for the business must be confirmed.
     *
     * @var bool|null
     */
    public ?bool $is_confirm = null;

    public function __construct(array $data)
    {
        $this->f_tax_region = isset($data['f_tax_region']) ? (float)$data['f_tax_region'] : null;
        $this->is_confirm = isset($data['is_confirm']) ? (bool)$data['is_confirm'] : null;
    }
}
