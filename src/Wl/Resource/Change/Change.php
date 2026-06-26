<?php

namespace WlSdk\Wl\Resource\Change;

use WlSdk\WlSdkClient;

/**
 * Changes an asset occupied by specified visit.
 */
class Change
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes an asset occupied by specified visit.
     *
     * @return ChangePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ChangePutRequest $request): ChangePutResponse
    {
        return new ChangePutResponse($this->client->request('/Wl/Resource/Change/Change.json', $request->params(), 'PUT'));
    }
}
