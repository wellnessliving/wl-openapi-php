<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified video.
 */
class VideoElementDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the specified video.
     *
     * Permanently removes the video, its localized CMS records, and all category associations
     * from the business library. Also deletes the video file and thumbnail from storage.
     * Requires backend access with the video library management privilege.
     *
     * @return VideoElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(VideoElementDeleteRequest $request): VideoElementDeleteResponse
    {
        return new VideoElementDeleteResponse($this->client->request('/Wl/Video/VideoElement.json', $request->params(), 'DELETE'));
    }
}
