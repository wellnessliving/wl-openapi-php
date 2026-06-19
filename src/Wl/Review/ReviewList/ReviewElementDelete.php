<?php
namespace WlSdk\Wl\Review\ReviewList;

use WlSdk\WlSdkClient;

/**
 * Deletes a review.
 */
class ReviewElementDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes a review.
     *
     * Checks that the caller has the required permission, removes the review, and recomputes the best reviews
     * for the associated business location.
     *
     * @return ReviewElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ReviewElementDeleteRequest $request): ReviewElementDeleteResponse
    {
        return new ReviewElementDeleteResponse($this->client->request('/Wl/Review/ReviewList/ReviewElement.json', $request->params(), 'DELETE'));
    }
}
