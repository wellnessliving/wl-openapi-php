<?php
namespace WlSdk\Wl\Business\Franchise\Location;

use WlSdk\WlSdkClient;

/**
 * Returns country, region, state, city and location lists of the franchisor.
 */
class BusinessFranchiseLocationApi
{
    /**
     * Determines which locations should be returned.
     * 
     * One of the
     * [BusinessFranchiseLocationSid](#/components/schemas/Wl.Business.Franchise.Location.BusinessFranchiseLocationSid)
     * constants.
     * 
     * If `null`,
     * [BusinessFranchiseLocationSid::ALL](#/components/schemas/Wl.Business.Franchise.Location.BusinessFranchiseLocationSid)
     * is used.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns country, region, state, city and location lists of the franchisor.
     *
     * Used on the franchisor's website location finder to display all franchisee locations on a map or
     * list, grouped by country, state, and city. Results can be filtered to only locations assigned to a
     * specific franchise region or to exclude churned locations. Results are cached for 3 minutes.
     *
     * @return BusinessFranchiseLocationApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessFranchiseLocationApiGetResponse
    {
        return new BusinessFranchiseLocationApiGetResponse($this->client->request('/Wl/Business/Franchise/Location/BusinessFranchiseLocation.json', $this->params(), 'GET'));
    }

    private function params(): array
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
