<?php
namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Creates new location or edits the existing location.
 */
class LocationApi
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
     * The key of the business.
This field is required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the city.
This field is required for creating a new location.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * The key of the location.
This will be `null` if it's being used to create a new location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the time zone.
This field is optional.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The address of the location.
This field is required for creating a new location.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * The mail address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * The phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The postal code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * The title of the location.
This field is required for creating a new location.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates new location or edits the existing location.
     *
     * When `k_location` is omitted, creates a new location requiring `k_city`,
     *  `text_address`, and `text_title`.
     * When `k_location` is provided, updates only the supplied fields of the existing location.
     *  Returns the key of the created or updated location.
     *
     * @return array Parsed JSON response data.
     *   - string k_location: The key of the location.
This will be `null` if it's being used to create a new location.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Location/Location.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_city' => $this->k_city,
            'k_location' => $this->k_location,
            'k_timezone' => $this->k_timezone,
            'text_address' => $this->text_address,
            'text_email' => $this->text_email,
            'text_phone' => $this->text_phone,
            'text_postal' => $this->text_postal,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
