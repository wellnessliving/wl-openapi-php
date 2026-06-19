<?php
namespace WlSdk\Wl\Review\ReviewList;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about review item.
 */
class ReviewElementGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about review item.
     *
     * Returns the review rating, text, date, author information, reply, and featured status for the specified
     * review.
     *
     * @return ReviewElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReviewElementGetRequest $request): ReviewElementGetResponse
    {
        return new ReviewElementGetResponse($this->client->request('/Wl/Review/ReviewList/ReviewElement.json', $request->params(), 'GET'));
    }
}
