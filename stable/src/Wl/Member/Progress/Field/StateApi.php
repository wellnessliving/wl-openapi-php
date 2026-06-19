<?php
namespace WlSdk\Wl\Member\Progress\Field;

use WlSdk\WlSdkClient;

/**
 * Changes states of field.
 */
class StateApi
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
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Whether field is active and should be displayed on page.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this field is public. If this field is set to `false`, this field is not visible to clients.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * Whether field value is required for clients.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Whether field value is required for staffs.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes states of field.
     *
     * Updates one or more state flags (`is_active`, `is_public`, `is_require`, `is_require_staff`) for the
     * specified
     * progress field and returns the new values. At least one flag must be provided; the field must be active to
     * change its required state.
     *
     * @return array Parsed JSON response data.
     *   - int id_field: Field ID. One of the [ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid) constant.
     *   - bool is_active: Whether field is active and should be displayed on page.
     *   - bool is_public: Whether this field is public. If this field is set to `false`, this field is not visible to clients.
     *   - bool is_require: Whether field value is required for clients.
     *   - bool is_require_staff: Whether field value is required for staffs.
     *   - string text_title: Field title.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Member/Progress/Field/State.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_field' => $this->k_field,
            'is_active' => $this->is_active,
            'is_public' => $this->is_public,
            'is_require' => $this->is_require,
            'is_require_staff' => $this->is_require_staff,
            ],
            static fn($v) => $v !== null
        );
    }
}
