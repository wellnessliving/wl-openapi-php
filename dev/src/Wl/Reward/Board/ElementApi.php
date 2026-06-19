<?php
namespace WlSdk\Wl\Reward\Board;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward board item.
 */
class ElementApi
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
     * List of users to get information for.

`null` for mode of single user.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reward board to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_board = null;

    /**
     * User to retrieve information about.
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
     * Retrieves information about reward board item.
     *
     * In single-user mode returns the user's score, name, and avatar on the specified board; in multi-user mode
     * accepts a list of UIDs and returns an array of score, name, and avatar entries for all of them.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_reward: No description.
     *   - int i_score: Score in points.
     *   - string s_name: User name.
     *   - string url_logo: User logo.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reward/Board/Element.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_uid' => $this->a_uid,
            'k_business' => $this->k_business,
            'k_reward_board' => $this->k_reward_board,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
