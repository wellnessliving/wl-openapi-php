<?php
namespace WlSdk\Wl\Classes\ClassList;

use WlSdk\WlSdkClient;

/**
 * Gets a list of classes which take place in the specified location.
 */
class BookListApi
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
     * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
If this value isn't specified, the returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
If this value isn't specified, the returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of classes which take place in the specified location.
     *
     * Used to build the booking page for a location, displaying all classes that clients can sign up for.
     * Returns the full class details needed for display: schedules, assigned staff, booking links, pricing,
     * and category tabs.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_class: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Classes/ClassList/BookList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
