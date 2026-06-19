<?php
namespace WlSdk\Wl\Schedule\Tab;

use WlSdk\WlSdkClient;

/**
 * Gets information about tabs for page "Book now".
 */
class TabApi
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
     * Whether we are inside the widget or not.
     *
     * @var bool|null
     */
    public ?bool $is_widget = null;

    /**
     * The key of the current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the current location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the current user.
This isn't used on the back end as the back end uses the current user to build a list of tabs.
Therefore, the model must depend on the current user ID.
If changed to a relative (the current user is changed, but the application isn't restarted),
information about the booking tabs for this user's relative will be requested.

This will be `null` if not set yet.
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
     * Gets information about tabs for page "Book now".
     *
     * Returns the set of service booking tabs configured by the business, filtered for the
     * specified location and user. Used to populate the tab strip on the "Book Now" page or
     * embedded widget. Tabs may represent classes, appointments, events, or other bookable services.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_tab: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Schedule/Tab/Tab.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_widget' => $this->is_widget,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
