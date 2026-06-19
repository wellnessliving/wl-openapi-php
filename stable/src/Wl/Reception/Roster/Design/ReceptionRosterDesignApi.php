<?php
namespace WlSdk\Wl\Reception\Roster\Design;

use WlSdk\WlSdkClient;

/**
 * Returns configuration for the Attendance Kiosk.
 */
class ReceptionRosterDesignApi
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
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns configuration for the Attendance Kiosk.
     *
     * Returns kiosk display settings including custom image, logo, direction mode, background color,
     * and business name for the specified business.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_image: No description.
     *   - bool hide_profile_images: Whether to hide client profile images.
`true` if client profile images should be hidden, `false` otherwise.
     *   - int i_attendance_direct_delay: Number of seconds of inactivity before automatic redirect.
     *   - int i_book_open: Number of minutes for the client check-in window after session has started.
     *   - int i_book_quick_app: Units of time for the look ahead window for attendance app.
     *   - int i_confirm_delay: Delay in seconds on attendance web app confirmation screen before redirect to login screen.
     *   - int id_attendance_direct: ID of the action to take when automatically redirecting.
One of [DirectSid](#/components/schemas/Wl.Reception.Roster.DirectSid) constants.
     *   - int id_book_quick_app: Unit of time for the look ahead window for attendance app.
     *   - bool is_attend_free: `true` if clients are allowed to check-in unpaid, `false` otherwise.
     *   - bool is_book_open: Whether to allow sign-ins to classes in progress.
     *   - bool is_book_optional: `true` if clients are allowed to check-in without booking prior,
`false` otherwise.
     *   - bool is_book_quick_app: `true` if clients are allowed to sign in before session is started.,
`false` otherwise.
     *   - bool show_business_name: `true` - show business name on attendance web app; `false` - do not show.
     *   - bool show_confirm_screen: `true` - show confirm screen on attendance web app;
`false` - do not show.
     *   - string text_business_name: Name of the business to display in the attendance web app.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reception/Roster/Design/ReceptionRosterDesign.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
