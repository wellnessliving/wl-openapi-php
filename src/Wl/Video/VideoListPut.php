<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Updates the custom sort order of videos for the specified business.
 */
class VideoListPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the custom sort order of videos for the specified business.
     *
     * Reorders the video library according to the provided list. Only takes effect when the
     * library is configured to use the custom sort order. Requires backend access with the
     * video library management privilege.
     *
     * @return VideoListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(VideoListPutRequest $request): VideoListPutResponse
    {
        return new VideoListPutResponse($this->client->request('/Wl/Video/VideoList.json', $request->params(), 'PUT'));
    }
}
