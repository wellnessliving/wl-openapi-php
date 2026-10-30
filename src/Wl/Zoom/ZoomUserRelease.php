<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * Releases a Zoom license used by a business.
 */
class ZoomUserRelease
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Releases a Zoom license used by a business.
     *
     * Makes the Zoom license free for other meetings and ends the meeting that runs on this license, if there is
     * one.
     * A license that belongs to the business can be released only by a staff member of this business.
     * A system license can be released by a staff member of the business that uses it or by a system
     * administrator.
     *
     * @return ZoomUserReleasePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ZoomUserReleasePutRequest $request): ZoomUserReleasePutResponse
    {
        return new ZoomUserReleasePutResponse($this->client->request('/Wl/Zoom/ZoomUserRelease.json', $request->params(), 'PUT'));
    }
}
