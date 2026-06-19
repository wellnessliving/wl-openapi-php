<?php
namespace WlSdk\Wl\Appointment\Book\Purchase;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about available purchase options.
 */
class PurchaseApi
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
     * List of selected services without current `k_service`.

The list of these services directly affects the list of selected promotions.
Depending on the number and order of services, there may be different results.

The current `k_service` will be added to the end of this list.
It is worth considering this list as a list of previously selected services.

Each element has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_service = null;

    /**
     * List of user keys to book appointments.
There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The date to use to check for expiration of Purchase Options.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The asset booking duration.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * `true` - get all Purchase Options suitable for appointment.
`false` - get only Purchase Options available for the client.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The Purchase Option ID used to pay for the appointment.
This will be `null` if the client doesn't have a suitable Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * The service key used to select available Purchase Options.
If multiple services are selected, they should be specified in `a_service` array.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The timezone key for `dt_date`.

Can be `null` if timezone is not selected.
If not selected, the default client timezone will be used.


In any case, the timezone will be used if the business allows client timezones.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The user key.

This field is used if the client books for himself or for the relative.

This field is incorrect to use for guest booking since in this case the client will be checked as a relative.

In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
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
     * Retrieves a list of information about available purchase options.
     *
     * Returns all Purchase Options (memberships, packages, passes) the given client can use to pay for
     *  the specified appointment at the given location, including pricing details and eligibility status.
     *  Also returns options that can be purchased on the spot during booking.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - array[] a_login_prize: No description.
     *   - array[] a_login_promotion: No description.
     *   - array[] a_purchase: No description.
     *   - array[] a_reward_prize: No description.
     *   - array[] a_session_pass: No description.
     *   - bool is_single_default: Indicates if drop-in rate should be the default purchase option.
     *   - string k_location: Location to show available appointment booking schedule.
     *   - string k_login_promotion: The Purchase Option ID used to pay for the appointment.
This will be `null` if the client doesn't have a suitable Purchase Option.
     *   - string k_promotion_default: Default promotion key.
Empty if the appointment has no default promotion.
     *   - string text_login_promotion: Login promotion title suitable to pay for the services.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Purchase/Purchase.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_service' => $this->a_service,
            'a_uid' => $this->a_uid,
            'dt_date' => $this->dt_date,
            'i_duration' => $this->i_duration,
            'i_height' => $this->i_height,
            'i_width' => $this->i_width,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_walk_in' => $this->is_walk_in,
            'k_location' => $this->k_location,
            'k_login_promotion' => $this->k_login_promotion,
            'k_resource' => $this->k_resource,
            'k_service' => $this->k_service,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
