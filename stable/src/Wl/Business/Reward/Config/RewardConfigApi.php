<?php
namespace WlSdk\Wl\Business\Reward\Config;

use WlSdk\WlSdkClient;

/**
 * Returns the reward program configuration for the specified business.
 */
class RewardConfigApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` Reward program is disabled, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_disabled_reward_program = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the reward program configuration for the specified business.
     *
     * Used in the backend settings editor to show the current enabled or disabled state of the reward
     * program before the staff member makes a change. Always reads live data, bypassing the cache.
     *
     * @return array Parsed JSON response data.
     *   - bool is_disabled_reward_program: `true` Reward program is disabled, `false` - otherwise.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Reward/Config/RewardConfig.json', $this->params(), 'GET');
    }

    /**
     * Updates the reward program enabled or disabled state for the specified business.
     *
     * Used in the backend settings editor when a staff member turns the reward program on or off. The
     * change is recorded in the reward audit log.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Business/Reward/Config/RewardConfig.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'is_disabled_reward_program' => $this->is_disabled_reward_program,
            ],
            static fn($v) => $v !== null
        );
    }
}
