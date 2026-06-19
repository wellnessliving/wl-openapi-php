<?php
namespace WlSdk\Wl\Promotion\Index;

use WlSdk\WlSdkClient;

/**
 * Gets a list of packages/passes/memberships.
 */
class PromotionIndexApi
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
     * The program type ID, which will be one of the [RsProgramTypeSid](#/components/schemas/RsProgramTypeSid) constants.

`0` to not filter Purchase Options with type of the Purchase Option.
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

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
     * Gets a list of packages/passes/memberships.
     *
     * Returns introductory promotion offers available at the specified location, optionally filtered by program
     * type,
     * including pricing, duration, visit limits, and access information for each item.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_promotion: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Promotion/Index/PromotionIndex.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'id_program_type' => $this->id_program_type,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
