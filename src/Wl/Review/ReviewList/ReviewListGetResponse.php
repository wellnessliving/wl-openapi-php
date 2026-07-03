<?php

namespace WlSdk\Wl\Review\ReviewList;

/**
 * Response from GET
 */
class ReviewListGetResponse
{
    /**
     * List of reviews. If passed [ReviewListApi](/Wl/Review/ReviewList/ReviewList.json) then the result will be
     * full, otherwise in result will be keys: `k_review`, `uid`.
     *
     * @var ReviewListGetResponseReview[]|null
     */
    public ?array $a_review = null;

    public function __construct(array $data)
    {
        $this->a_review = isset($data['a_review']) ? array_map(static fn ($item) => new ReviewListGetResponseReview((array)$item), (array)$data['a_review']) : null;
    }
}
