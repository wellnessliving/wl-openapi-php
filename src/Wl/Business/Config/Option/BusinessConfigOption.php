<?php

namespace WlSdk\Wl\Business\Config\Option;

use WlSdk\WlSdkClient;

/**
 * Returns config option values for specified business.
 */
class BusinessConfigOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns config option values for specified business.
     *
     * Loads every registered business configuration option for the given business and returns its
     *  current value, keyed by the config option class CID.
     *
     * @return BusinessConfigOptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessConfigOptionGetRequest $request): BusinessConfigOptionGetResponse
    {
        return new BusinessConfigOptionGetResponse($this->client->request('/Wl/Business/Config/Option/BusinessConfigOption.json', $request->params(), 'GET'));
    }
}
