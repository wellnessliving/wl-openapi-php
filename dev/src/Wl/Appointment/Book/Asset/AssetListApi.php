<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about assets in the current asset category.
 */
class AssetListApi
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
     * The selected date and time of the asset booking. It is used in cases when the business booking policy allows
clients to select a date and time, and then the available asset.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * Mode type, one of [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * This is `true` if asset categories are loaded for back-end mode. Otherwise, this will be `false` for front-end mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
`false` - search only for the selected book tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * Key of the appointment, if we reschedule existing appointment.
It should be sent to ignore it when we get availability hours for the asset.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business key.

If not set, location's business will be used.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class tab key used to filter assets.

This will be `null` if not set yet or if elements with no specified class tab are selected.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The asset category key to show information for.
     *
     * @var string|null
     */
    public ?string $k_resource_category = null;

    /**
     * Timezone of date and time of asset booking.

Empty if `dtl_date` not set or client can't change in which timezone dates should be shown.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * Client to get information for.

If client not set, returns full asset list without client restrictions.
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
     * Retrieves information about assets in the current asset category.
     *
     * Returns the list of bookable assets at the given location, optionally filtered by category and book now tab.
     *  When a date and time are provided, only assets available at that time are included and busy asset slots
     *  are returned in `a_asset_busy`. Supports both frontend and backend modes.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_asset: No description.
     *   - string|bool[][] a_asset_busy: A list of reserved assets.

1st level keys refer to asset keys.
2nd level keys refer to asset numbers.
Values are keys of appointment bookings that reserve the asset, or `true` if the asset is reserved by a class or event.

For example, if you want to check if the 10th asset with the key of '15' is reserved,
you can check if `a_resource_busy[&#039;15&#039;][&#039;10&#039;]` is free.

If you're rebooking an appointment, check the value of `a_resource_busy[&#039;15&#039;][&#039;10&#039;]`.
If it's equal to the key of your current appointment booking, you can assume the asset is available.
     *   - string k_resource_layout: The asset layout key.
May be empty if asset category has no layout.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Asset/AssetList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dtl_date' => $this->dtl_date,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'k_resource_category' => $this->k_resource_category,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
