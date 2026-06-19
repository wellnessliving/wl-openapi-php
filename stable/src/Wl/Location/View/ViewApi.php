<?php
namespace WlSdk\Wl\Location\View;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about the specified location.
 */
class ViewApi
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
     * Maximum location image height.
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * Maximum location image width.
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

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
     * Returns detailed information about the specified location.
     *
     * Returns the full profile of a location, including address, coordinates, timezone, contact information,
     * business hours, logo, slide images, amenities, social media links, and a description.
     *
     * @return array Parsed JSON response data.
     *   - int[] a_age: A list of ages that are permitted for visiting this location.
     *   - int[] a_amenities: A list of facilities that are available in this location.
     *   - string[] a_level: A list of levels that are suitable for visiting this location.
     *   - array[] a_logo: No description.
     *   - array[] a_slide: No description.
     *   - array[] a_work: No description.
     *   - float f_latitude: The latitude coordinate of the location.
     *   - float f_longitude: The longitude coordinate of the location.
     *   - string html_description_full: The full description of the location.
     *   - string html_description_preview: A shorter description of the location. A preview of `html_description_full`.
     *   - int id_industry: The industry of the business.
`null` in case when industry didn't set for chosen business type, or for business types
where set value which is absent.
     *   - bool is_phone: `true` if to display phone number on location page. `false` otherwise.
     *   - bool is_top_choice: `true` if WellnessLiving identifies this is a top choice location, `false` otherwise.
     *   - string k_business: The key of the business this location belongs to.
     *   - string k_business_type: The key of the business type this location belongs to.
     *   - string k_timezone: The timezone.
     *   - string s_address: The physical address of the location.
     *   - string s_map: A string that can be used in navigator programs.
     *   - string s_phone: The phone number for the location.
     *   - string s_timezone: The system name of the time zone.
     *   - string s_title: The title of the location.
     *   - string text_address_individual: The address of the location.
     *   - string text_alias: The special system name, which can be used in custom location links.
This is usually based on name of the location, with extra characters removed.
However, it can also can be fully customized.
     *   - string text_business_type: The name of the business type.
     *   - string text_city: The city name of the location.
     *   - string text_country: The country name of the location.
     *   - string text_industry: The name of the industry of the business.
     *   - string text_mail: The email address.
     *   - string text_postal: Postal code of the location.
     *   - string text_region: The region name of the location.
     *   - string text_region_code: Region 2 or 3 letters abbreviation of the location. Can be empty, if abbreviation for region is not set.
     *   - string url_facebook: The Facebook URL of the location.
     *   - string url_instagram: The Instagram URL of the location.
     *   - string url_linkedin: The Linked In URL of the location.
     *   - string url_map: The URL of the location in Google Maps.
     *   - string url_microsite: The URL to the location entry in the WellnessLiving Explorer listing.
     *   - string url_site: The website URL of the location.
     *   - string url_twitter: The URL of the location's Twitter account.
     *   - string url_web: The URL to the business's Client Web App.
     *   - string url_youtube: The YouTube URL of the location.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Location/View/View.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
