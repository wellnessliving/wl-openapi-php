<?php
namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Gets list of Lead Sources.
 */
class LeadSourceListApi
{
    /**
     * Business key.
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
     * Gets list of Lead Sources.
     *
     * Returns all lead sources configured for the specified business, including system-defined and custom sources,
     * with sort order, title, associated skin, and flags indicating whether each source is currently in use.
     * This is public endpoint, which is available for non-signed-in users. But if the user is not signed in,
     * the list will be filtered to contain only those sources that are available for the user and with limited
     * information.
     *
     * @return LeadSourceListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LeadSourceListApiGetResponse
    {
        return new LeadSourceListApiGetResponse($this->client->request('/Wl/Lead/Source/LeadSourceList.json', $this->params(), 'GET'));
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
