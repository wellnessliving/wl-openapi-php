<?php
namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 *  the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 *  active hold period otherwise.
 */
class PromotionPayPauseApi
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
     * The end date of the current hold, in the local time zone.
This can be set to a special value `0000-00-00` to make the period indefinite until further action.

`null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date of the current hold, in the local time zone.

`null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Whether need to get all pause periods for the login promotion.
If `true` then `a_pay_pause_list` will be returned.
If `false` then information about specified `k_promotion_pay_pause` or
currently active pause period will be returned (`dt_start`,
`dt_end` and `text_note`).
     *
     * @var bool|null
     */
    public ?bool $is_list = null;

    /**
     * Key of business to which currently handled pause period or login promotion belongs.

`null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The Purchase Option key. If this key is used, a new hold will be created. The endpoint will return a `start-cross`
status code if a hold is already in place.

Ignored if `k_promotion_pay_pause` is provided.

`null` if not yet initialized.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The promotion payment hold key. If this key is used, it will edit an existing hold.
This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.

`null` if not yet initialized or if the request is based on `k_login_promotion`.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    /**
     * Whether or not to send email notification.

`false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether or not to send push notification.

`false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether or not to send SMS notification.

`false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Additional notes for the promotion payment pause period.
Leave this field as `null` if the note shouldn't be updated.

`null` if it shouldn't be updated.
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
     * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 active hold period otherwise.
     *
     * Also returns notification settings (email, push, SMS flags and email pattern key) and the date the last
     * notification was sent for the hold period, if a hold notification template is configured for the business.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_pay_pause_list: No description.
     *   - string dt_end: The end date of the current hold, in the local time zone.
This can be set to a special value `0000-00-00` to make the period indefinite until further action.

`null` if it shouldn't be updated.
     *   - string dt_start: The start date of the current hold, in the local time zone.

`null` if it shouldn't be updated.
     *   - string dtu_date_notification: The date when the email notification was sent.

`null` if it shouldn't be updated.
     *   - bool is_mail: Whether or not to send email notification.

`false` if not initialized.
     *   - bool is_push: Whether or not to send push notification.

`false` if not initialized.
     *   - bool is_sms: Whether or not to send SMS notification.

`false` if not initialized.
     *   - string k_login_promotion: The Purchase Option key. If this key is used, a new hold will be created. The endpoint will return a `start-cross`
status code if a hold is already in place.

Ignored if `k_promotion_pay_pause` is provided.

`null` if not yet initialized.
     *   - string k_mail_pattern: Key of the email pattern.
     *   - string k_promotion_pay_pause: The promotion payment hold key. If this key is used, it will edit an existing hold.
This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.

`null` if not yet initialized or if the request is based on `k_login_promotion`.
     *   - string text_note: Additional notes for the promotion payment pause period.
Leave this field as `null` if the note shouldn't be updated.

`null` if it shouldn't be updated.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'GET');
    }

    /**
     * Adds or updates a payment pause period for promotion.
     *
     * Creates a new hold period for the purchased promotion if no `k_promotion_pay_pause` is provided, or updates
     * an existing one. Optionally schedules or sends a hold notification via email, push, or SMS based on the
     * provided flags and the business notification template.
     *
     * @return array Parsed JSON response data.
     *   - string k_promotion_pay_pause: The promotion payment hold key. If this key is used, it will edit an existing hold.
This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.

`null` if not yet initialized or if the request is based on `k_login_promotion`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'POST');
    }

    /**
     * Updates a promotion payment pause period.
     *
     * Requires an existing `k_promotion_pay_pause` key and delegates to `post()` to apply
     * the updated start date, end date, note, and notification settings. Returns an error if no existing hold key
     * is
     * provided.
     *
     * @return array Parsed JSON response data.
     *   - string k_promotion_pay_pause: The promotion payment hold key. If this key is used, it will edit an existing hold.
This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.

`null` if not yet initialized or if the request is based on `k_login_promotion`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'PUT');
    }

    /**
     * Deletes specified promotion payment pause.
     *
     * Validates access and then permanently removes the hold period identified by `k_promotion_pay_pause`,
     * also cancelling any associated expiry reminder notification task.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'is_list' => $this->is_list,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_promotion_pay_pause' => $this->k_promotion_pay_pause,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            'text_note' => $this->text_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
