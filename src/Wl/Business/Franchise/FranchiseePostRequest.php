<?php

namespace WlSdk\Wl\Business\Franchise;

class FranchiseePostRequest
{
    /**
     * Franchisee business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Final Reimbursement Date.
     * Filled in franchisee local time. After this date no workouts
     * should come in Reimbursement report that franchisor able to generate for this franchisee if
     * `is_generate_workout` true.
     * `dl_workout` field in the FranchiseListSql table.
     *
     * @var string|null
     */
    public ?string $dl_workout = null;

    /**
     * API display.
     * Influence on "start/stop showing the selected franchisee on Franchisor website".
     * `is_api_display` field in the FranchiseListSql table.
     *
     * @var bool|null
     */
    public ?bool $is_api_display = null;

    /**
     * Generate workout.
     * If ON, franchisor will be able to generate Reimbursement reports for this franchisee.
     * If OFF, reimbursement records for this franchisee will not appear in monthly reimbursement report.
     * `is_generate_workout` field in the FranchiseListSql table.
     *
     * @var bool|null
     */
    public ?bool $is_generate_workout = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'dl_workout' => $this->dl_workout,
            'is_api_display' => $this->is_api_display,
            'is_generate_workout' => $this->is_generate_workout,
            ],
            static fn ($v) => $v !== null
        );
    }
}
