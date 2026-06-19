<?php
namespace WlSdk\Wl\Review;

use WlSdk\WlSdkClient;

/**
 * Submits user's review.
 */
class ReviewApi
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
     * The rating given to the location (1 to 5 stars).

This will be `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_rate = null;

    /**
     * The key of a location.

This will be `null` if not loaded yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Visit key.
Can be `null` if the review is not connected to a visit.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The text of the review.

This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Submits user's review.
     *
     * Validates the captcha, saves the review rating and text for the specified location, and returns reward score
     * information if the business awards points for leaving a review.
     *
     * @return array Parsed JSON response data.
     *   - int i_score: Reward score for leaving a review.
     *   - int i_score_facebook: Reward score for sharing a review on Facebook.
     *   - int i_score_twitter: Reward score for sharing a review on Twitter.
     *   - bool is_score: If a reward score for leaving a review exists.
     *   - bool is_score_facebook: If a reward score for sharing a review on Facebook exists.
     *   - bool is_score_twitter: If a reward score for sharing a review on Twitter exists.
     *   - bool is_share_points: If a reward score for sharing exists.
     *   - bool is_share_points_none: If a reward score does not exist for leaving a review or sharing the review.
     *   - string k_login_activity: The key of the review writing activity. This will be empty if the review was saved but not published.
     *   - string k_review: Review key.
     *   - string uid: The UID of client who leaves review.
     *   - string url_share: The sharing url of the review.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Review/Review.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_rate' => $this->i_rate,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            's_text' => $this->s_text,
            ],
            static fn($v) => $v !== null
        );
    }
}
