<?php

namespace WlSdk\Wl\Rank\Setting;

class RankSettingPostRequest
{
    /**
     * Whether to display promotion criteria to clients in the Client Wep App. `true` - to display promotion
     * criteria,
     *   `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_display_promotion_criteria = null;

    /**
     * Whether to display promotion status to clients in the Client Wep App. `true` - to display promotion status,
     *   `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_display_promotion_status = null;

    /**
     * Whether to reset class attendance requirements after promotion. `true` - only classes which took place after
     *  the date of promotion should be counted for the current belt class attendance requirements, `false` -
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_reset_class_attendance = null;

    /**
     * Key of the business to save belts settings in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_display_promotion_criteria' => $this->is_display_promotion_criteria,
            'is_display_promotion_status' => $this->is_display_promotion_status,
            'is_reset_class_attendance' => $this->is_reset_class_attendance,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
