<?php

namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video.
 */
class VideoElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the data for the specified video.
     *
     * Returns detailed information about a single video, including title, description, duration,
     * categories, tags, difficulty level, assigned staff, virtual session settings, and playback
     * progress for the current user. In frontend mode, access is restricted to videos the current
     * user is allowed to watch based on their membership and login type.
     *
     * @return VideoElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VideoElementGetRequest $request): VideoElementGetResponse
    {
        return new VideoElementGetResponse($this->client->request('/Wl/Video/VideoElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates a video for the specified business.
     *
     * Saves a video record with its title, description, categories, tags, difficulty level,
     * staff assignments, and access settings. When no video key is provided, a new record is
     * created; otherwise the existing record is updated. Requires backend access with the
     * video library management privilege and an active video subscription.
     *
     * @return VideoElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VideoElementPostRequest $request): VideoElementPostResponse
    {
        return new VideoElementPostResponse($this->client->request('/Wl/Video/VideoElement.json', $request->params(), 'POST'));
    }

    /**
     * Validates video embed code.
     *
     * Checks that the provided embed snippet conforms to the supported embed code format. Throws
     * if the snippet is malformed or uses an unsupported source. Call this before saving to give
     * the user an immediate validation error without persisting the video record.
     *
     * @return VideoElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(VideoElementPutRequest $request): VideoElementPutResponse
    {
        return new VideoElementPutResponse($this->client->request('/Wl/Video/VideoElement.json', $request->params(), 'PUT'));
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
