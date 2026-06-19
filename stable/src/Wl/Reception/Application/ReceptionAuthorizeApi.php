<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Performs authorization based on the given authorization value and business settings.
 */
class ReceptionAuthorizeApi
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
     * Key of the business, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the Check In application.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Authorization value - it's a value, which client entered on authorization form.

It can be client ID, email or phone number. Depends on the business settings.
     *
     * @var string|null
     */
    public ?string $text_authorize = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs authorization based on the given authorization value and business settings.
     *
     * Looks up clients by member ID, email address, or phone number and returns matching user records for
     * selection
     * in the Self Check-In Web App.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_select: No description.
     *   - string uid: Key of the authorized user.

Can be set only this field or `a_select`.
It depends, whether we found one user or multiple.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reception/Application/ReceptionAuthorize.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'text_authorize' => $this->text_authorize,
            ],
            static fn($v) => $v !== null
        );
    }
}
