<?php

namespace WlSdk\Wl\Profile\Sensor;

use WlSdk\WlSdkClient;

/**
 * Returns data for given page to show in view.
 */
class SensorList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data for given page to show in view.
     *
     * @return SensorListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SensorListGetRequest $request): SensorListGetResponse
    {
        return new SensorListGetResponse($this->client->request('/Wl/Profile/Sensor/SensorList.json', $request->params(), 'GET'));
    }
}
