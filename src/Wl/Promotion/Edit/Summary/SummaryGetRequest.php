<?php

namespace WlSdk\Wl\Promotion\Edit\Summary;

class SummaryGetRequest
{
    /**
     * Business key within which price should be calculated.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Initial price without taxes (or with depends on locale).
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * List of tax IDs divided by coma to apply to initial price.
     *
     * @var string|null
     */
    public ?string $s_tax = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'm_price' => $this->m_price,
            's_tax' => $this->s_tax,
            ],
            static fn ($v) => $v !== null
        );
    }
}
