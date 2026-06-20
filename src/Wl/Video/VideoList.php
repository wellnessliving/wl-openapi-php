<?php

namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Returns the list of videos for the specified business.
 */
class VideoList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of videos for the specified business.
     *
     * Returns videos for the business video library with optional filtering by category, tag,
     * difficulty level, staff, location, calorie range, and duration. Supports sorting and
     * pagination for large libraries. In frontend mode, results are restricted to videos the
     * current user is allowed to watch based on their membership and login type.
     *
     * @return VideoListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VideoListGetRequest $request): VideoListGetResponse
    {
        return new VideoListGetResponse($this->client->request('/Wl/Video/VideoList.json', $request->params(), 'GET'));
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
