<?php
namespace WlSdk\Wl\Business\Type;

use WlSdk\WlSdkClient;

/**
 * Returns the list of available business types with their categories and images.
 */
class BusinessTypeListApi
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of available business types with their categories and images.
     *
     * Used during the new business signup flow so the prospective client can select the type of business
     * they are opening (e.g., yoga studio, gym, spa). The list drives both the type picker UI and the
     * selection of the appropriate demo tour to show on the marketing site.
     *
     * @return BusinessTypeListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessTypeListApiGetResponse
    {
        return new BusinessTypeListApiGetResponse($this->client->request('/Wl/Business/Type/BusinessTypeList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return [];
    }
}
