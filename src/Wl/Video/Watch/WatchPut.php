<?php
namespace WlSdk\Wl\Video\Watch;

use WlSdk\WlSdkClient;

/**
 * Updates the watch progress (current position and total watched time) for an existing watch record.
 */
class WatchPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the watch progress (current position and total watched time) for an existing watch record.
     *
     * Advances the stored playback position and accumulated watch time for the given watch record.
     * The total watched time can only increase; updates that report a smaller value than what is
     * already stored are silently ignored to handle out-of-order requests.
     *
     * @return WatchPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(WatchPutRequest $request): WatchPutResponse
    {
        return new WatchPutResponse($this->client->request('/Wl/Video/Watch/Watch.json', $request->params(), 'PUT'));
    }
}
