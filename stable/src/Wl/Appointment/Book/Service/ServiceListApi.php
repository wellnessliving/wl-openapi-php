<?php
namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about services in the current service category.
 */
class ServiceListApi
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
     * The class tab key to use to filter services. If empty, this can be found on the standard book tab.

If multiple tabs are sent, appointment types, which are in at least in one of the tabs, will be in the result.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * List of staff members to filter a result.

Empty if the filtering is not necessary.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of user keys to book appointments.
There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

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
     * `true` - return all active services for a certain location ignoring user age and other restrictions.
`false` - return only services that are allowed for the user.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
`false` - search only on the selected book now tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * The class tab key to filter services. If empty or `0`, this can be found on the standard book now tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of a service category to show information for.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

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
     * Retrieves information about services in the current service category.
     *
     * Returns all services available for booking at the given location, optionally filtered by service
     *  category, book now tab, and client. Each service entry includes title, description, image, pricing,
     *  duration, staff availability, and age restriction details. Supports both frontend and backend modes.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - array[] a_service: No description.
     *   - bool is_multiple_booking: Whether services allow multiple appointment booking.
     *   - string k_location: Location to show available appointment booking schedule.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Service/ServiceList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_class_tab' => $this->a_class_tab,
            'a_staff' => $this->a_staff,
            'a_uid' => $this->a_uid,
            'i_height' => $this->i_height,
            'i_width' => $this->i_width,
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'is_walk_in' => $this->is_walk_in,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'k_service_category' => $this->k_service_category,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
