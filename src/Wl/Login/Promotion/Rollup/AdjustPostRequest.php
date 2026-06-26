<?php

namespace WlSdk\Wl\Login\Promotion\Rollup;

class AdjustPostRequest
{
    /**
     * ID of the calendar period attendance restriction is applied to.
     *
     * @var string|null
     */
    public ?string $id_period = null;

    /**
     * ID of the purchased promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Count of remaining visits that should be after adjustment.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_period' => $this->id_period,
            'k_login_promotion' => $this->k_login_promotion,
            'i_count' => $this->i_count,
            ],
            static fn ($v) => $v !== null
        );
    }
}
