<?php
namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns partner settings for the business identified by the given partner code.
 */
class PartnerSettingsApi
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
     * The unique code that a business can provide other businesses to tell them about system.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns partner settings for the business identified by the given partner code.
     *
     * Used when rendering the Partner Program landing page. Resolves the partner code to a business and
     * returns the business key and the home tour type so the landing page can show the appropriate demo
     * tour. A daily failed-request limit per IP prevents brute-force enumeration of partner codes.
     *
     * @return array Parsed JSON response data.
     *   - int id_business_tour: The homepage tour of the business, which depends on the type.
     *   - string k_business: The business key.
     *   - string text_name_first: The first name of the business representative.
     *   - string text_name_last: The last name of the business representative.
     *   - string text_position: The job title of the business representative.
     *   - string text_review: The text of the review about the WellnessLiving system.
     *   - string url_photo: A link to the photo of the business representative.

`null` in case when image is not uploaded.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Partner/PartnerSettings.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_code' => $this->text_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
