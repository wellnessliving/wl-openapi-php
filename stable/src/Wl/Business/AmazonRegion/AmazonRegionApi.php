<?php
namespace WlSdk\Wl\Business\AmazonRegion;

use WlSdk\WlSdkClient;

/**
 * Returns the Amazon region ID for each of the requested business keys.
 */
class AmazonRegionApi
{
    /**
     * List of business key.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the Amazon region ID for each of the requested business keys.
     *
     * Used to determine which data center stores the data for a given set of businesses. Knowing the region
     * is required before routing API calls across data centers. Returns `0` for businesses whose region
     * is not set. All requested business keys must exist.
     *
     * @return AmazonRegionApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AmazonRegionApiGetResponse
    {
        return new AmazonRegionApiGetResponse($this->client->request('/Wl/Business/AmazonRegion/AmazonRegion.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_business' => $this->a_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
