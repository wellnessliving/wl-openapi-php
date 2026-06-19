<?php
namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * Generates list of active business keys for the same region as the requesting user (proper permissions required).
 */
class BusinessAccountApi
{
    /**
     * `true` returns WellnessLiving customers.
     * 
     * `false` returns prospects.
     * 
     * Test and churned businesses are never returned.
     *
     * @var bool|null
     */
    public ?bool $is_prospects = null;

    /**
     * Specifies if only businesses having published locations should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_published = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates list of active business keys for the same region as the requesting user (proper permissions required).
     *
     * Used internally by WellnessLiving operations tools to enumerate all customer businesses in the current
     * region.
     * Returns only active, non-test businesses; set `is_prospects` to also include prospect businesses that have
     * not
     * yet churned. Requires the `rs.business.view` privilege.
     *
     * @return BusinessAccountApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessAccountApiGetResponse
    {
        return new BusinessAccountApiGetResponse($this->client->request('/Wl/Business/Account/BusinessAccount.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_prospects' => $this->is_prospects,
            'is_published' => $this->is_published,
            ],
            static fn($v) => $v !== null
        );
    }
}
