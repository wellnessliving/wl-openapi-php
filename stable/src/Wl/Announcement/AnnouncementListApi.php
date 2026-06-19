<?php
namespace WlSdk\Wl\Announcement;

use WlSdk\WlSdkClient;

/**
 * Returns a list of announcements for the given business and location.
 */
class AnnouncementListApi
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
     * Order ID for list of announcements.

Used only when `is_backend` is `true`.

`null` in case when use default order.
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * Sort field ID for list of announcements.

Used only when `is_backend` is `true`.

`null` in case when use default field.
     *
     * @var int|null
     */
    public ?int $id_sort_field = null;

    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key for which need show announcement.

`null` in case when need show location for all locations in business.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The filter phrase to filter announcements by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of announcements for the given business and location.
     *
     * Retrieves published announcements visible to the current user, optionally filtered to a single location.
     *  In backend mode the caller can also sort the results by column and direction, and the chosen sort
     *  preference is persisted per user so the backend grid remembers
     *  it across requests. Access is validated against announcement editor permissions for the business.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     *   - int id_order: Order ID for list of announcements.

Used only when `is_backend` is `true`.

`null` in case when use default order.
     *   - int id_sort_field: Sort field ID for list of announcements.

Used only when `is_backend` is `true`.

`null` in case when use default field.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Announcement/AnnouncementList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_order' => $this->id_order,
            'id_sort_field' => $this->id_sort_field,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_search' => $this->text_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
