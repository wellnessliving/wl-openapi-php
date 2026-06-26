<?php

namespace WlSdk\Wl\Feedback;

use WlSdk\WlSdkClient;

/**
 * Logs feedback from the mobile application.
 */
class FeedbackLog
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Logs feedback from the mobile application.
     *
     * @return FeedbackLogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FeedbackLogPostRequest $request): FeedbackLogPostResponse
    {
        return new FeedbackLogPostResponse($this->client->request('/Wl/Feedback/FeedbackLog.json', $request->params(), 'POST'));
    }
}
