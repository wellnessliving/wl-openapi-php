<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Returns the current conversion configuration and the list of promotions available to convert to.
 */
class ConvertApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The conversion date, in the local time zone.
     *
     * @var string|null
     */
    public ?string $dl_convert = null;

    /**
     * The conversion ID. One of the [PromotionConvertSid](#/components/schemas/Wl.Promotion.Convert.PromotionConvertSid) constants.
     *
     * @var int|null
     */
    public ?int $id_convert = null;

    /**
     * When conversion should be done. One of the [ConvertWhenSid](#/components/schemas/Wl.Login.Promotion.Convert.ConvertWhenSid) constants.

`null` if it's not set yet.
     *
     * @var int|null
     */
    public ?int $id_convert_when = null;

    /**
     * The promotion key the given promotion will be converted to.
     *
     * @var string|null
     */
    public ?string $k_promotion_to = null;

    /**
     * The note for the promotion conversion.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current conversion configuration and the list of promotions available to convert to.
     *
     * Returns the current conversion type, scheduled date, target promotion, hold period dates, next payment date,
     * expiration date, and the list of promotions available as conversion targets for the given purchased
     * promotion.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_promotion: No description.
     *   - string dl_convert_max: The last date on what conversion can be scheduled.
     *   - string dl_convert_min: The first date on what conversion can be scheduled.
     *   - string dl_hold_end: Local date, when hold ends, if PO is on hold right now.
Empty if PO is not on hold, or hold is endless.
     *   - string dl_hold_start: Local date, when hold starts, if PO is on hold right now.
Empty if PO is not on hold.
     *   - int id_convert: The conversion ID. One of the [PromotionConvertSid](#/components/schemas/Wl.Promotion.Convert.PromotionConvertSid) constants.
     *   - int id_convert_when: When conversion should be done. One of the [ConvertWhenSid](#/components/schemas/Wl.Login.Promotion.Convert.ConvertWhenSid) constants.

`null` if it's not set yet.
     *   - bool is_edit: Determines whether the conversion request is new or editing an existing conversion.

If `true`, the conversion exists. Otherwise, this will be `false`.
     *   - bool is_renew: `true` if PO is going to be renewed and not converted.
`false` if PO is going to expire or to convert.
     *   - string s_date_convert: The existing conversion date, returned as a string for the datepicker.
     *   - string s_date_now: The current date, returned as a string.
     *   - string s_title: The Purchase Option title.
     *   - string text_date_expire: Expiration date in string user-friendly format.
     *   - string text_date_payment: Next payment date in string user-friendly format.
     *   - string text_note: The note for the promotion conversion.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $this->params(), 'GET');
    }

    /**
     * Creates or updates conversion form data for the login promotion.
Performs all necessary checks and apply changes.
     *
     * Validates access, the target promotion key, conversion type, conversion timing, and the optional scheduled
     * date,
     * then saves the conversion settings. Returns an error if the user is a debtor.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $this->params(), 'POST');
    }

    /**
     * Removes conversion and reset the after expiration setting to previous state.
     *
     * Validates access, removes the scheduled conversion record for the given purchased promotion, restores the
     * previous auto-renew state, and reschedules the payment if the promotion is a membership type.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'dl_convert' => $this->dl_convert,
            'id_convert' => $this->id_convert,
            'id_convert_when' => $this->id_convert_when,
            'k_promotion_to' => $this->k_promotion_to,
            'text_note' => $this->text_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
