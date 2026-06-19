<?php
namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Books a class for the client via the Attendance Kiosk and returns whether the client was placed on the class list or
 * waitlist.
 */
class AttendanceListBookApi
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
     * The UTC datetime for the class in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The secret for authenticating the attendance kiosk.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The client's user key.
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
     * Books a class for the client via the Attendance Kiosk and returns whether the client was placed on the class list or waitlist.
     *
     * Validates the Attendance Kiosk secret and books the client into the specified class period, returning a flag
     * indicating whether the client was placed on the class list or the waitlist.
     *
     * @return array Parsed JSON response data.
     *   - bool is_wait: `true` if the client is on the waitlist for the class, `false` if they are on the class list.
     *   - string text_message: The status message displayed on a successful booking.
Describes whether client was put in class list or waitlist.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reception/Roster/AttendanceListBook.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dtu_date' => $this->dtu_date,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
