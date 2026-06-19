<?php
namespace WlSdk\Wl\Login\Add;

use WlSdk\WlSdkClient;

/**
 * Checks required profile fields and, if complete, registers the existing user in the specified business.
 */
class MailUseOkApi
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
     * This value is `true` if this user is a lead. `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_lead = null;

    /**
     * The business key used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The Lead Capture Widget skin key. This is used only if a lead was added.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * The user key.
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
     * Checks required profile fields and, if complete, registers the existing user in the specified business.
     *
     * Validates the user's profile for any missing required fields and, if all fields are complete, adds the user
     * as
     * a member of the business. Returns a status code and a list of any fields that still need to be filled in.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_error_list: No description.
     *   - string s_code: The result code of the request.
     *   - string text_message: The result message of the request.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Add/MailUseOk.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_lead' => $this->is_lead,
            'k_business' => $this->k_business,
            'k_skin' => $this->k_skin,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
