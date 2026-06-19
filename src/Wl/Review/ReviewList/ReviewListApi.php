<?php
namespace WlSdk\Wl\Review\ReviewList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of reviews.
 */
class ReviewListApi
{
    /**
     * If not specified, this request will return all review keys. If specified, this request will return detailed
     * reviews
     * (10 per page).
     * 
     * This will be `null` if you only need to load the keys of the review.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * The order in which the review should be arranged. One of the
     * [ReviewOrderSid](#/components/schemas/Wl.Review.ReviewList.ReviewOrderSid) constants.
     * 
     * If not passed use default order
     * [ReviewOrderSid::LATEST](#/components/schemas/Wl.Review.ReviewList.ReviewOrderSid).
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * Business key. If not specified, location key needs to be specified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location to show reviews for. If not specified, business key should be specified.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key. WellnessLiving allows staff to check low-rated reviews before posting them. Staff members
     * can see
     * all reviews. Clients can only see checked reviews.
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
     * Retrieves a list of reviews.
     *
     * Returns reviews for the specified location, or all reviews for the business if no location is given, with
     * support
     * for filtering by user, ordering, and pagination.
     *
     * @return ReviewListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReviewListApiGetResponse
    {
        return new ReviewListApiGetResponse($this->client->request('/Wl/Review/ReviewList/ReviewList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_page' => $this->i_page,
            'id_order' => $this->id_order,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
