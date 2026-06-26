<?php

namespace WlSdk\Wl\Appointment\Change;

use WlSdk\WlSdkClient;

/**
 * Gets booking conflicts.
 */
class DurationConflict
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets booking conflicts.
     *
     * @return DurationConflictGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DurationConflictGetRequest $request): DurationConflictGetResponse
    {
        return new DurationConflictGetResponse($this->client->request('/Wl/Appointment/Change/DurationConflict.json', $request->params(), 'GET'));
    }
}
