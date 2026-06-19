<?php
namespace WlSdk\Wl\Profile\Form\Response;

use WlSdk\WlSdkClient;

/**
 * Returns the lists of completed and pending quiz responses for the specified user and business.
 */
class ResponseListApi
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
     * Defines whether completed forms should not be included in result list of forms.

`true` to exclude completed forms from result.
`false` to include completed forms to result.
     *
     * @var bool|null
     */
    public ?bool $hide_completed = null;

    /**
     * Defines whether optional uncompleted forms should not be included in result list of forms.

`true` to exclude optional uncompleted forms from result.
`false` to include optional uncompleted forms to result.
     *
     * @var bool|null
     */
    public ?bool $hide_optional = null;

    /**
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
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
     * Returns the lists of completed and pending quiz responses for the specified user and business.
     *
     * Returns the client's completed, draft, and pending form responses for the business, sorted
     *  newest first. Also provides permission flags that control which actions the current user may
     *  perform on each response.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_quiz_login: No description.
     *   - array[] a_quiz_response: No description.
     *   - bool can_amend: Whether response can be amended by current user.
     *   - bool can_fill: Whether response can be filled by current user.
     *   - bool can_remove: Whether response can be removed by current user.
     *   - bool can_view: Whether response can be viewed by current user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Form/Response/ResponseList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'hide_completed' => $this->hide_completed,
            'hide_optional' => $this->hide_optional,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
