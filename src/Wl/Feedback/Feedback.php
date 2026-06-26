<?php

namespace WlSdk\Wl\Feedback;

use WlSdk\WlSdkClient;

/**
 * Sends a feedback email to the support team.
 */
class Feedback
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends a feedback email to the support team.
     *
     * @return FeedbackPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FeedbackPostRequest $request): FeedbackPostResponse
    {
        return new FeedbackPostResponse($this->client->request('/Wl/Feedback/Feedback.json', $request->params(), 'POST'));
    }
}
