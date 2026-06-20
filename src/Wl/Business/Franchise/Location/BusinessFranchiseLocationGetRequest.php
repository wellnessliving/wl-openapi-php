<?php
namespace WlSdk\Wl\Business\Franchise\Location;

class BusinessFranchiseLocationGetRequest
{
    /**
     * Determines which locations should be returned.
     * 
     * One of the {@link \WlSdk\Wl\Business\Franchise\Location\BusinessFranchiseLocationSid} constants.
     * 
     * If `null`, {@link \WlSdk\Wl\Business\Franchise\Location\BusinessFranchiseLocationSid} is used.
     *
     * @var int|null
     */
    public ?int $id_business_franchise_location = null;

    /**
     * Determines whether to include churned/removed locations.
     * 
     * If `true`, all locations are listed (regardless of their status).
     *
     * @var bool|null
     */
    public ?bool $is_include_churn = null;

    /**
     * Determines whether to include locations marked to not be displayed on franchisor website.
     * 
     * If `true`, all locations are listed (regardless of this setting).
     *
     * @var bool|null
     */
    public ?bool $is_include_non_api = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_business_franchise_location' => $this->id_business_franchise_location,
            'is_include_churn' => $this->is_include_churn,
            'is_include_non_api' => $this->is_include_non_api,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
