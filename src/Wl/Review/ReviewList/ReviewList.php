<?php

namespace WlSdk\Wl\Review\ReviewList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of reviews.
 */
class ReviewList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of reviews.
     *
     * Returns reviews for the specified location, or all reviews for the business if no location is given, with
     * support
     * for filtering by user, ordering, and pagination.
     *
     * @return ReviewListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReviewListGetRequest $request): ReviewListGetResponse
    {
        return new ReviewListGetResponse($this->client->request('/Wl/Review/ReviewList/ReviewList.json', $request->params(), 'GET'));
    }
}
