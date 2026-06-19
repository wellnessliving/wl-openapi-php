<?php
namespace WlSdk\Wl\Book\Cancel;

use WlSdk\WlSdkClient;

/**
 * Returns information about whether the given user can cancel the booking and the expected consequences.
 */
class CancelCanApi
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
     * Key of the business within which the action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about whether the given user can cancel the booking and the expected consequences.
     *
     * Accepts a business key and a visit key, validates access, and performs a dry-run cancellation to determine
     * whether the visit can be cancelled online, whether a late-cancel penalty applies, and whether the purchase
     * option credit would be refunded.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_penalty: No description.
     *   - bool can_cancel: `true` if the booking can be canceled online by the specified user, `false` otherwise.

Cancellation is possible only if the current visit status is [VisitSid::BOOK](#/components/schemas/Wl.Visit.VisitSid) or [VisitSid::WAIT](#/components/schemas/Wl.Visit.VisitSid).
     *   - bool is_flag: `true` if the client's account will be flagged instead of charging a monetary fee, `false` otherwise.

Meaningful only when `is_late` is `true`.
     *   - bool is_late: `true` if the cancellation would be considered a late cancel, `false` otherwise.

Late cancel applies only to bookings with status [VisitSid::BOOK](#/components/schemas/Wl.Visit.VisitSid).
Wait-list bookings ([VisitSid::WAIT](#/components/schemas/Wl.Visit.VisitSid)) are never subject to late cancellation rules.
     *   - bool is_refund: `true` if the visit credit (from the purchase option used to book) will be returned
to the user's profile after cancellation, `false` otherwise.

For regular (non-late) cancellations, the credit is always returned when the booking
was made with a purchase option.

For late cancellations, return depends on the business's Payment Return Policy.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Cancel/CancelCan.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
