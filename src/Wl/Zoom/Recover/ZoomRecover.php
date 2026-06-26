<?php

namespace WlSdk\Wl\Zoom\Recover;

use WlSdk\WlSdkClient;

/**
 * Gets a list of unloaded recordings.
 */
class ZoomRecover
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of unloaded recordings.
     *
     * @return ZoomRecoverGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ZoomRecoverGetRequest $request): ZoomRecoverGetResponse
    {
        return new ZoomRecoverGetResponse($this->client->request('/Wl/Zoom/Recover/ZoomRecover.json', $request->params(), 'GET'));
    }

    /**
     * Recover meeting recordings from cloud.
     *
     * @return ZoomRecoverPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomRecoverPostRequest $request): ZoomRecoverPostResponse
    {
        return new ZoomRecoverPostResponse($this->client->request('/Wl/Zoom/Recover/ZoomRecover.json', $request->params(), 'POST'));
    }
}
