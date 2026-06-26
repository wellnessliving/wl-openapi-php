<?php

namespace WlSdk\Wl\Promotion\Membership\Report;

class MembershipConversionFilterViewGetRequest
{
    /**
     * Business key to load filter for. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Selected value of `Converted From`. Primary key in RsPromotionSql or `null` if filter `Converted From`
     * option should not be applied.
     * `0` when filter was applied, but promotion was not selected.
     *
     * @var string|null
     */
    public ?string $k_promotion_from = null;

    /**
     * Selected value of `Converted To`. Primary key in RsPromotionSql or `null` if filter `Converted To`
     * option should not be applied.
     * `0` when filter was applied, but promotion was not selected.
     *
     * @var string|null
     */
    public ?string $k_promotion_to = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_promotion_from' => $this->k_promotion_from,
            'k_promotion_to' => $this->k_promotion_to,
            ],
            static fn ($v) => $v !== null
        );
    }
}
