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
     * @var array[]|null
     */
    public ?array $a_review = null;

    public function __construct(array $data)
    {
        $this->a_review = isset($data['a_review']) ? (array)$data['a_review'] : null;
    }
}
