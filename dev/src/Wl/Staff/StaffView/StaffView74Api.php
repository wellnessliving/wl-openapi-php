<?php
namespace WlSdk\Wl\Staff\StaffView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about staff.
 */
class StaffView74Api
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
     * A list of staff user IDs.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff_list = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The staff member user ID.
A staff member can work for more than one business.
This key can be found using the [StaffListApi](/Wl/Staff/StaffList/StaffList.json) endpoint.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about staff.
     *
     * This method can accept or one staff key [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) or staff list
     * [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) but not both (exception would be thrown).
     *
     * @return array Parsed JSON response data.
     *   - array[] a_class_day: No description.
     *   - array[] a_result_list: No description.
     *   - array[] a_staff: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Staff/StaffView/StaffView74.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_uid_staff_list' => $this->a_uid_staff_list,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_business' => $this->k_business,
            'uid_staff' => $this->uid_staff,
            ],
            static fn($v) => $v !== null
        );
    }
}
