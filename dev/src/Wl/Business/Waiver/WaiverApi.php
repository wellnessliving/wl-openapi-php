<?php
namespace WlSdk\Wl\Business\Waiver;

use WlSdk\WlSdkClient;

/**
 * Returns the business waiver text rendered as HTML with user-specific variables substituted.
 */
class WaiverApi
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
     * ID of business to get waiver for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Full username.
Used as a variable in a contract.
It may be set if user does not exist.
     *
     * @var string|null
     */
    public ?string $text_fullname = null;

    /**
     * User key for which the waiver is shown.
Used to fill the variables in the contract
Not necessarily if the user does not already exist. In this case, you need to set `text_fullname`.
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
     * Returns the business waiver text rendered as HTML with user-specific variables substituted.
     *
     * Used to display the waiver agreement to a client before they complete a purchase or check in.
     * Renders the waiver template with the client's name filled in. If the business has no waiver
     * configured, `has_waiver` is `false` and the waiver modal should not be shown.
     *
     * @return array Parsed JSON response data.
     *   - bool has_waiver: Does the business have a waiver or not?
     *   - string html_waiver: Text of the current waiver with the substituted variables.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Waiver/Waiver.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_fullname' => $this->text_fullname,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
