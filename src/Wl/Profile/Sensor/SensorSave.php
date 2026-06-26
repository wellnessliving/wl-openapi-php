<?php

namespace WlSdk\Wl\Profile\Sensor;

use WlSdk\WlSdkClient;

/**
 * Saves sensor info while adding and editing sensors.
 */
class SensorSave
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves sensor info while adding and editing sensors.
     *
     * If deleting sensor, else sensor row data for template:
     *
     * @return SensorSavePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SensorSavePostRequest $request): SensorSavePostResponse
    {
        return new SensorSavePostResponse($this->client->request('/Wl/Profile/Sensor/SensorSave.json', $request->params(), 'POST'));
    }

    /**
     * Deletes sensor.
     *
     * @return SensorSaveDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SensorSaveDeleteRequest $request): SensorSaveDeleteResponse
    {
        return new SensorSaveDeleteResponse($this->client->request('/Wl/Profile/Sensor/SensorSave.json', $request->params(), 'DELETE'));
    }
}
