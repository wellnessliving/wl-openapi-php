<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video categories for the business.
 */
class CategoryListApi
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
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If `true`, groups that are missing videos won't be displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_skip_empty_group = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase used to filter categories by name.
     *
     * @var string|null
     */
    public ?string $text_filter = null;

    /**
     * A list of shared video category keys displayed in the order to be saved.

Values can be:
* <b>[Deprecated]</b> String keys in old format. 
* String keys in new format.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of video categories for the business.
     *
     * Returns all video categories for the business with their titles, video counts, and cloud
     * recording assignment. In frontend mode, only categories accessible to the current user are
     * included. Results can be filtered by name and optionally limited to non-empty categories.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_video_category: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Video/Category/CategoryList.json', $this->params(), 'GET');
    }

    /**
     * Updates the order of video categories.
     *
     * Reorders the video library categories for the business according to the provided list.
     * Requires backend access with the video library management privilege.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Video/Category/CategoryList.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_backend' => $this->is_backend,
            'is_skip_empty_group' => $this->is_skip_empty_group,
            'k_business' => $this->k_business,
            'text_filter' => $this->text_filter,
            'a_order' => $this->a_order,
            ],
            static fn($v) => $v !== null
        );
    }
}
