<?php
namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Updates the featured status of the given review for the business.
 */
class ReviewFeature
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the featured status of the given review for the business.
     *
     * If featuring the review, unfeatures the currently featured review for the business location and marks the
     * specified review as featured; if unfeaturing, clears the featured flag on the given review.
     *
     * @return ReviewFeaturePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReviewFeaturePostRequest $request): ReviewFeaturePostResponse
    {
        return new ReviewFeaturePostResponse($this->client->request('/Wl/Review/ReviewFeature.json', $request->params(), 'POST'));
    }
}
