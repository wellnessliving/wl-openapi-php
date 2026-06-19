<?php
namespace WlSdk\Wl\Review\ReviewList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of reviews.
 */
class ReviewListApi
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
     * If not specified, this request will return all review keys. If specified, this request will return detailed reviews
(10 per page).

This will be `null` if you only need to load the keys of the review.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * The order in which the review should be arranged. One of the [ReviewOrderSid](#/components/schemas/Wl.Review.ReviewList.ReviewOrderSid) constants.

If not passed use default order [ReviewOrderSid::LATEST](#/components/schemas/Wl.Review.ReviewList.ReviewOrderSid).
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * Business key. If not specified, location key needs to be specified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location to show reviews for. If not specified, business key should be specified.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key. WellnessLiving allows staff to check low-rated reviews before posting them. Staff members can see
all reviews. Clients can only see checked reviews.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of reviews.
     *
     * Returns reviews for the specified location, or all reviews for the business if no location is given, with
     * support
     * for filtering by user, ordering, and pagination.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_review: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Review/ReviewList/ReviewList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_page' => $this->i_page,
            'id_order' => $this->id_order,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
