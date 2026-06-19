<?php
namespace WlSdk\Wl\Appointment\Book\Asset\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves assets required for a service booking at the given date and time, including availability and busy status.
 */
class ServiceApi
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
     * The appointment booking date selected by the user.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Mode type, one of [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * If `true`, back-end mode is selected.
In this mode, the list of asset categories must be returned even if asset selection is disabled for clients.

If `false` for a case of front-end mode.
In this mode, the list of asset categories won't be returned if asset selection is disabled for clients.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Whether to show both grid layouts and custom layouts.

`true` if custom layout should be included in the result.
`false` if only grid layout can be used.
     *
     * @var bool|null
     */
    public ?bool $is_grid_any = null;

    /**
     * Whether unavailable assets should be included.
     *
     * @var bool|null
     */
    public ?bool $is_show_unavailable_assets = null;

    /**
     * The appointment booking key to ignore when `a_resource_busy` is derived.

`null` if no appointment booking must be ignored.
     *
     * @var string|null
     */
    public ?string $k_appointment_ignore = null;

    /**
     * The selected location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The selected service's key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Timezone of date and time of service start.

Empty if client can't change in which timezone dates should be shown.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * User to get information for.
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
     * Retrieves assets required for a service booking at the given date and time, including availability and busy status.
     *
     * Returns the asset categories and individual assets linked to the service at the given location.
     *  Each asset includes its availability flag for the requested time slot. The response also includes
     *  `a_resource_busy` with currently reserved asset slots and a flag indicating
     *  whether the current user is allowed to book unavailable assets.
     *
     * @return array Parsed JSON response data.
     *   - string[][] a_resource_busy: A list of reserved assets.

1st level keys refer to asset keys.
2nd level keys refer to asset numbers.
Values refer to keys of appointment bookings that reserve the asset(s).

For example, if you want to check if the 10th asset with the key of '15' is reserved,
you can check if `a_resource_busy[&#039;15&#039;][&#039;10&#039;]` is free.

If you're rebooking an appointment, check the value of `a_resource_busy[&#039;15&#039;][&#039;10&#039;]`.
If it's equal to the key of your current appointment booking, you can assume the asset is available.
     *   - array[] a_resource_type: No description.
     *   - bool can_book_unavailable_assets: Can the staff members book reserved assets.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Asset/Service/Service.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_start' => $this->dt_start,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_grid_any' => $this->is_grid_any,
            'is_show_unavailable_assets' => $this->is_show_unavailable_assets,
            'k_appointment_ignore' => $this->k_appointment_ignore,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
