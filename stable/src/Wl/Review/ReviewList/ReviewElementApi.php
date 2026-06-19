<?php
namespace WlSdk\Wl\Review\ReviewList;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about review item.
 */
class ReviewElementApi
{
    /**
     * The key of the business to which the review belongs.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The review key.
     *
     * @var string|null
     */
    public ?string $k_review = null;

    /**
     * The user key.
     * 
     * May be empty in the case of a guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @return ReviewElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReviewElementApiGetResponse
    {
        return new ReviewElementApiGetResponse($this->client->request('/Wl/Review/ReviewList/ReviewElement.json', $this->params(), 'GET'));
    }

    /**
     * Deletes a review.
     *
     * Checks that the caller has the required permission, removes the review, and recomputes the best reviews
     * for the associated business location.
     *
     * @return ReviewElementApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): ReviewElementApiDeleteResponse
    {
        return new ReviewElementApiDeleteResponse($this->client->request('/Wl/Review/ReviewList/ReviewElement.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_review' => $this->k_review,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
