<?php
namespace WlSdk\Wl\Review\ReviewList;

class ReviewElementDeleteRequest
{
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
            'k_review' => $this->k_review,
            ],
            static fn($v) => $v !== null
        );
    }
}
