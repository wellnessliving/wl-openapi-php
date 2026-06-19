<?php
namespace WlSdk\Wl\Classes\ClassView;

use WlSdk\WlSdkClient;

/**
 * Returns class information including schedules, images, and booking settings for the specified business.
 */
class ElementApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class key used to get information for a specific class.

An empty value returns information for all classes of the business.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Defines if canceled schedules should be included in the result.

If `true`, canceled schedules will be shown. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $show_cancelled = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class information including schedules, images, and booking settings for the specified business.
     *
     * Used by import tools to read the full class catalog for a business. Returns a map of all classes
     * (or a single class) with the information needed to replicate class data in an external system:
     * schedules, images, booking constraints, and descriptions.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_class_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Classes/ClassView/Element.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'show_cancelled' => $this->show_cancelled,
            ],
            static fn($v) => $v !== null
        );
    }
}
