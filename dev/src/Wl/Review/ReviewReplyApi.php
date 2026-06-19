<?php
namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Saves the reply text and optional status update for the given review.
 */
class ReviewReplyApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * Status of the Review. One of [RsReviewStatusSid](#/components/schemas/RsReviewStatusSid) constants.

`null` until passed to the api when admin replies to the review.
     *
     * @var int|null
     */
    public ?int $id_review_status = null;

    /**
     * Key of the business to which the review belongs.

Empty string to defined business automatically, based on value of `k_review`.

Although this value may be empty, this behavior is deprecated and will be removed in the future.
You MUST pass key of the business always.
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
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Review/ReviewReply.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_review_status' => $this->id_review_status,
            'k_business' => $this->k_business,
            'k_review' => $this->k_review,
            'text_reply' => $this->text_reply,
            ],
            static fn($v) => $v !== null
        );
    }
}
