<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward action item.
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
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reward action to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_action = null;

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
     * Retrieves information about reward action item.
     *
     * Returns the point value, score type, description, and whether the user has already submitted a points
     * request
     * for the specified reward action.
     *
     * @return array Parsed JSON response data.
     *   - int i_score: Points amount that will be added to user account after successful accomplishment of reward action.
     *   - int id_reward_score: Reward score type ID.
     *   - bool is_request: `true` if user has requested points for action accomplishment, `false` otherwise.
     *   - string s_description: User friendly reward action description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reward/Action/Element.json', $this->params(), 'GET');
    }

    /**
     * Requests points earning.
     *
     * Submits a custom reward points request for the specified action on behalf of the given user and records
     * the pending approval request.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reward/Action/Element.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_reward_action' => $this->k_reward_action,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
