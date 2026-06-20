<?php
namespace WlSdk\Wl\Review\ReviewList;

/**
 * Response from GET
 */
class ReviewElementGetResponse
{
    /**
     * No description.
     *
     * @var ReviewElementGetResponseReview[]|null
     */
    public ?array $a_review = null;

    public function __construct(array $data)
    {
        $this->a_review = isset($data['a_review']) ? array_map(static fn($item) => new ReviewElementGetResponseReview((array)$item), (array)$data['a_review']) : null;
    }
}
