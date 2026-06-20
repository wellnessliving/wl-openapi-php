<?php

namespace WlSdk\Wl\Review\ReviewList;

class ReviewElementGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_review' => $this->k_review,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
