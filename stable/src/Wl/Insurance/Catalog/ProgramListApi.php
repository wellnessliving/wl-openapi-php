<?php
namespace WlSdk\Wl\Insurance\Catalog;

use WlSdk\WlSdkClient;

/**
 * Returns a list of active insurance programs for the specified promotion.
 */
class ProgramListApi
{
    /**
     * The key of the franchisee business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of active insurance programs for the specified promotion.
     *
     * Requires backend access and an active Wellness Program feature for the business. Returns all available
     * insurance programs with pricing, organization name, partner name, and a link to the insurance detail page.
     *
     * @return ProgramListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ProgramListApiGetResponse
    {
        return new ProgramListApiGetResponse($this->client->request('/Wl/Insurance/Catalog/ProgramList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            ],
            static fn($v) => $v !== null
        );
    }
}
