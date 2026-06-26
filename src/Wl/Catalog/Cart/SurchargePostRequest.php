<?php

namespace WlSdk\Wl\Catalog\Cart;

class SurchargePostRequest
{
    /**
     * Data for Quick Buy.
     *
     * Structure of this array is described in RsCatalogCart::__construct().
     *
     * @var array|null
     */
    public ?array $a_quick_config = null;

    /**
     * Whether surcharge was set manually.
     * `false` if not, `true` if yes.
     *
     * @var bool|null
     */
    public ?bool $is_manual = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Surcharge amount to update the cart.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_quick_config' => $this->a_quick_config,
            'is_manual' => $this->is_manual,
            'k_business' => $this->k_business,
            'm_surcharge' => $this->m_surcharge,
            ],
            static fn ($v) => $v !== null
        );
    }
}
