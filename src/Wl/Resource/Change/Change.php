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
     * Validates that the specified resource and visit belong to the same business and that the
     *  resource is available for the visit's session, then checks that the current user has
     *  attendance privileges for the class location. When the visit belongs to a block event, the
     *  new asset is applied to all sessions of that event for the same visitor.
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
