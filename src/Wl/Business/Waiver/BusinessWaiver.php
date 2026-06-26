<?php

namespace WlSdk\Wl\Business\Waiver;

use WlSdk\WlSdkClient;

/**
 * Gets waiver settings for the business.
 */
class BusinessWaiver
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets waiver settings for the business.
     *
     * @return BusinessWaiverGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessWaiverGetRequest $request): BusinessWaiverGetResponse
    {
        return new BusinessWaiverGetResponse($this->client->request('/Wl/Business/Waiver/BusinessWaiver.json', $request->params(), 'GET'));
    }
}
