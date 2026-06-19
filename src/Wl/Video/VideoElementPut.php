<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Validates video embed code.
 */
class VideoElementPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
