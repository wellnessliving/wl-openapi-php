<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Checks whether the user can complete booking wizard without additional steps.
 */
class InfoCanCompleteApi
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
     * A list of sessions of an event that can be booked together.

This is the same as `a_session_select_post`, but limited by query string
length and might fail if the user is booking more than 50 sessions at once.
Therefore, using the POST method is preferable.
     *
     * @var array[]|null
     */
    public ?array $a_session_select = null;

    /**
     * The date and time of the session that the user is booking, returned in MySQL format and in GMT.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * Key of the business in which the booking is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period ID that the user started to book.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The unique booking process key.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The key of a user who is making the booking.
Empty if user is a guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_session_select_post = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the user can complete booking wizard without additional steps.
     *
     * Copies the GET session selection into the POST field and delegates to `post()`.
     * Prefer the POST variant when the session list may be large, as the query string has length limitations.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - bool can_complete: Determines whether users can complete the booking process from the info step.
     *   - bool hide_price: `true` if price for the individual session should be hidden, if client has applicable pricing option to pay for this
booking.
`false` if price should be shown always.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Info/InfoCanComplete.json', $this->params(), 'GET');
    }

    /**
     * Checks whether the user can complete booking wizard without additional steps.
     *
     * Performs a dry-run booking attempt for the given class period, date, and session selection to determine
     * whether the client can finalize the booking directly from the info step without proceeding to the payment
     * or purchase-option steps.
     *
     * @return array Parsed JSON response data.
     *   - bool can_complete: Determines whether users can complete the booking process from the info step.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Book/Process/Info/InfoCanComplete.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_session_select' => $this->a_session_select,
            'dt_date_gmt' => $this->dt_date_gmt,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_id' => $this->s_id,
            'uid' => $this->uid,
            'a_session_select_post' => $this->a_session_select_post,
            ],
            static fn($v) => $v !== null
        );
    }
}
