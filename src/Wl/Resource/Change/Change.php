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
     *  new asset is applied to all sessions of that event for the same visitor. The change runs
     *  inside a transaction that updates or inserts the corresponding `rs_resource_busy` records,
     *  and fails when the target asset is already occupied for the affected time slot.
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
