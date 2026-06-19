<?php
namespace WlSdk\Wl\Reward\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about redeemable prize item.
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
     * Key of redeemable prize.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

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
     * Retrieves information about redeemable prize item.
     *
     * Returns the point cost and description for the specified redeemable prize in the given business.
     *
     * @return array Parsed JSON response data.
     *   - int i_score: Prize price in wellnessliving points.
     *   - string s_description: User friendly prize description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reward/Prize/Element.json', $this->params(), 'GET');
    }

    /**
     * Redeems selected prize.
     *
     * Deducts the required points from the user's reward balance and records the redemption, returning the key
     * of the created login prize record.
     *
     * @return array Parsed JSON response data.
     *   - string k_login_prize: Key of login prize.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reward/Prize/Element.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_reward_prize' => $this->k_reward_prize,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
