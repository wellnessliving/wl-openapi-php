<?php
namespace WlSdk\Wl\Review;

class ReviewFeaturePostRequest
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

    public function params(): array
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
