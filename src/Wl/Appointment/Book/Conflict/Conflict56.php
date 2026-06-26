<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

use WlSdk\WlSdkClient;

/**
 * Gets booking conflicts.
 */
class Conflict56
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
     * @return Conflict56GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Conflict56GetRequest $request): Conflict56GetResponse
    {
        return new Conflict56GetResponse($this->client->request('/Wl/Appointment/Book/Conflict/Conflict56.json', $request->params(), 'GET'));
    }
}
