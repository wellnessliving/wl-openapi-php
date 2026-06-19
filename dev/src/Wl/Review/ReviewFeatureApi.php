<?php
namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Updates the featured status of the given review for the business.
 */
class ReviewFeatureApi
{
    /**
     * Determines if the review is featured.
     *
     * @var bool|null
     */
    public ?bool $is_featured = null;

    /**
     * The business key.
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
     * @return ReviewFeatureApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ReviewFeatureApiPostResponse
    {
        return new ReviewFeatureApiPostResponse($this->client->request('/Wl/Review/ReviewFeature.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_featured' => $this->is_featured,
            'k_business' => $this->k_business,
            'k_review' => $this->k_review,
            ],
            static fn($v) => $v !== null
        );
    }
}
