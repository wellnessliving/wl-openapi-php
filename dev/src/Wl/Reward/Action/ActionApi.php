<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of available reward actions.
 */
class ActionApi
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
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of reward action category.
     *
     * @var string|null
     */
    public ?string $k_reward_action_category = null;

    /**
     * Key of a user to show information for.
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
     * Retrieves a list of available reward actions.
     *
     * Returns all reward actions visible to the specified user in the given business, optionally filtered by
     * category,
     * including the score value and request status for each action.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_reward_action: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reward/Action/Action.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_reward_action_category' => $this->k_reward_action_category,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
