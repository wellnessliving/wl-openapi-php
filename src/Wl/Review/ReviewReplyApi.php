<?php
namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Saves the reply text and optional status update for the given review.
 */
class ReviewReplyApi
{
    /**
     * Status of the Review. One of [RsReviewStatusSid](#/components/schemas/RsReviewStatusSid) constants.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the reply text and optional status update for the given review.
     *
     * Validates edit access for the current user, persists the reply text and optional review status change,
     * and records the replying staff or admin user.
     *
     * @return ReviewReplyApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ReviewReplyApiPostResponse
    {
        return new ReviewReplyApiPostResponse($this->client->request('/Wl/Review/ReviewReply.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_review_status' => $this->id_review_status,
            'k_business' => $this->k_business,
            'k_review' => $this->k_review,
            'text_reply' => $this->text_reply,
            ],
            static fn($v) => $v !== null
        );
    }
}
