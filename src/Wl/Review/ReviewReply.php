<?php

namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Saves the reply text and optional status update for the given review.
 */
class ReviewReply
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the reply text and optional status update for the given review.
     *
     * Validates edit access for the current user, persists the reply text and optional review status change,
     * and records the replying staff or admin user.
     *
     * @return ReviewReplyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReviewReplyPostRequest $request): ReviewReplyPostResponse
    {
        return new ReviewReplyPostResponse($this->client->request('/Wl/Review/ReviewReply.json', $request->params(), 'POST'));
    }
}
