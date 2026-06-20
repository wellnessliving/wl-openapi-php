<?php

namespace WlSdk\Wl\Review\ReviewList;

/**
 * Response from GET
 */
class ReviewElementGetResponse
{
    /**
     * Review data:
     *
     * @var ReviewElementGetResponseReview|null
     */
    public ?ReviewElementGetResponseReview $a_review = null;

    public function __construct(array $data)
    {
        $this->a_review = isset($data['a_review']) ? new ReviewElementGetResponseReview((array)$data['a_review']) : null;
    }
}
