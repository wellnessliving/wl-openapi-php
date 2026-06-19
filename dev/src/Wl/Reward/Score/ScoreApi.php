<?php
namespace WlSdk\Wl\Reward\Score;

use WlSdk\WlSdkClient;

/**
 * Returns the total reward points for the specified activity list or user.
 */
class ScoreApi
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
     * List of login activity keys for which points should be added or returned.

NOTE: Login activity might belong to different users. It is possible for ex if booking performed
for several users (usually family members) and required to retrieve sum of all scores for preformed activities.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    /**
     * Depending on arguments specified during API request might be:
* Total number of points which were earned for each activity in a list provided in `a_login_activity`
  in a case if it was provided.
* Total number of points user currently own in a cast if `uid` specified.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Business key within which score should be managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * String to be added as a comment to manual reward points changes.
     *
     * @var string|null
     */
    public ?string $text_comment = null;

    /**
     * User key for which score should be managed.
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
     * Returns the total reward points for the specified activity list or user.
     *
     * If `a_login_activity` is provided, returns the total points earned across those activities; otherwise
     * returns
     * the current point balance for the specified user in the given business.
     *
     * @return array Parsed JSON response data.
     *   - int i_score: Depending on arguments specified during API request might be:
* Total number of points which were earned for each activity in a list provided in `a_login_activity`
  in a case if it was provided.
* Total number of points user currently own in a cast if `uid` specified.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reward/Score/Score.json', $this->params(), 'GET');
    }

    /**
     * Gives user reward points for sharing of certain activity into Facebook.
     *
     * Validates the activity list, determines the appropriate reward score type per activity category, and
     * schedules
     * reward point additions for each shareable activity.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reward/Score/Score.json', $this->params(), 'POST');
    }

    /**
     * Manually adjusts the reward points balance for the specified user.
     *
     * Requires the reward point reset privilege, creates a manual activity log entry, and applies the signed point
     * adjustment to the user's reward balance within a transaction.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Reward/Score/Score.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_login_activity' => $this->a_login_activity,
            'i_score' => $this->i_score,
            'k_business' => $this->k_business,
            'text_comment' => $this->text_comment,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
