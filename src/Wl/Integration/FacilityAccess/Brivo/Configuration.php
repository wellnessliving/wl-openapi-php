<?php

namespace WlSdk\Wl\Integration\FacilityAccess\Brivo;

use WlSdk\WlSdkClient;

/**
 * Returns Facility Access configuration set up by business.
 */
class Configuration
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns Facility Access configuration set up by business.
     *
     * @return ConfigurationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConfigurationGetRequest $request): ConfigurationGetResponse
    {
        return new ConfigurationGetResponse($this->client->request('/Wl/Integration/FacilityAccess/Brivo/Configuration.json', $request->params(), 'GET'));
    }
}
