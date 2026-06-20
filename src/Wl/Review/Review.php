<?php
namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Submits user's review.
 */
class Review
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Submits user's review.
     *
     * Validates the captcha, saves the review rating and text for the specified location, and returns reward score
     * information if the business awards points for leaving a review.
     *
     * @return ReviewPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReviewPostRequest $request): ReviewPostResponse
    {
        return new ReviewPostResponse($this->client->request('/Wl/Review/Review.json', $request->params(), 'POST'));
    }
}
