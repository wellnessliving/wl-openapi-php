<?php
namespace WlSdk\Wl\Reward\Action;

use WlSdk\WlSdkClient;

/**
 * Updates configuration fields for the specified reward action.
 */
class ActionWriteApi
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
     * Promotions' list.

`null` if not set yet.
     *
     * @var string[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Maximum count of score.

`null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_cap = null;

    /**
     * Count of the duration period.

`null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Score of the reward.

`null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Period to apply maximum count of score.

`null` if not set yet.
     *
     * @var int|null
     */
    public ?int $id_cap = null;

    /**
     * Type of a period.

`null` if not set yet.
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * Flag to define points type (account credits or points) in the 'Refer-a-Friend' section on the 'Enable Points' page.
`true`, if these are account credits.
`false`, if these are points.
`null` if field left unchanged.
     *
     * @var bool|null
     */
    public ?bool $is_account_credit = null;

    /**
     * Whether auto-renewal is enabled for this reward action.
     *
     * @var bool|null
     */
    public ?bool $is_auto_renewal = null;

    /**
     * Business key.

`null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class ID.

`null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Promotion key.

`null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Reward action ID.

`null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_reward_action = null;

    /**
     * Service key.

`null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Shop product ID.

`null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates configuration fields for the specified reward action.
     *
     * Accepts changes to fields such as auto-renewal flag, point cap, point value, and linked promotions, and
     * persists only the provided fields while logging the changes.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reward/Action/ActionWrite.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_promotion' => $this->a_promotion,
            'i_cap' => $this->i_cap,
            'i_count' => $this->i_count,
            'i_score' => $this->i_score,
            'id_cap' => $this->id_cap,
            'id_duration' => $this->id_duration,
            'is_account_credit' => $this->is_account_credit,
            'is_auto_renewal' => $this->is_auto_renewal,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'k_promotion' => $this->k_promotion,
            'k_reward_action' => $this->k_reward_action,
            'k_service' => $this->k_service,
            'k_shop_product' => $this->k_shop_product,
            ],
            static fn($v) => $v !== null
        );
    }
}
