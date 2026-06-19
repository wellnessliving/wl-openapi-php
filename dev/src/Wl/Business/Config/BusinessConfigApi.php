<?php
namespace WlSdk\Wl\Business\Config;

use WlSdk\WlSdkClient;

/**
 * Gets information about a business config.
 */
class BusinessConfigApi
{
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
     * Gets information about a business config.
     *
     * Used by the booking widget and checkout flow to know the rules governing client interactions: which
     * family member relations are allowed, whether clients or staff must select a location at checkout,
     * what cancellation penalties apply, and whether white-label mode is active.
     *
     * @return BusinessConfigApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessConfigApiGetResponse
    {
        return new BusinessConfigApiGetResponse($this->client->request('/Wl/Business/Config/BusinessConfig.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
