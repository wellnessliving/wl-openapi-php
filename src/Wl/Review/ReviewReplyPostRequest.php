<?php

namespace WlSdk\Wl\Review;

class ReviewReplyPostRequest
{
    /**
     * Status of the Review. One of {@link \WlSdk\RsReviewStatusSid} constants.
     *
     * `null` until passed to the api when admin replies to the review.
     *
     * @var int|null
     */
    public ?int $id_review_status = null;

    /**
     * Key of the business to which the review belongs.
     *
     * Empty string to defined business automatically, based on value of `k_review`.
     *
     * Although this value may be empty, this behavior is deprecated and will be removed in the future.
     * You MUST pass key of the business always.
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
     * The reply text for review.
     *
     * @var string|null
     */
    public ?string $text_reply = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_review_status' => $this->id_review_status,
            'k_business' => $this->k_business,
            'k_review' => $this->k_review,
            'text_reply' => $this->text_reply,
            ],
            static fn ($v) => $v !== null
        );
    }
}
