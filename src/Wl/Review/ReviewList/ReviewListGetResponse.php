<?php
namespace WlSdk\Wl\Review\ReviewList;

/**
 * Response from GET
 */
class ReviewListGetResponse
{
    /**
     * No description.
     *
     * @var ReviewListGetResponseReview[]|null
     */
    public ?array $a_review = null;

    public function __construct(array $data)
    {
        $this->a_review = isset($data['a_review']) ? array_map(static fn($item) => new ReviewListGetResponseReview((array)$item), (array)$data['a_review']) : null;
    }
}
