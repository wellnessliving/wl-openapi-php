<?php
namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns tags of the specified business.
 */
class TagListApi
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
     * The business key of the tags.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    /**
     * List of tags in json format.
See `a_list` for the structure of each tag.
`null` to use `a_list` for getting the tag list.
     *
     * @var string|null
     */
    public ?string $json_list = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns tags of the specified business.
     *
     * Returns all client tags configured for the business in display order, along with flags
     * indicating whether the business has configured a penalty fee for failed automatic payments
     * and whether surcharges are enabled. Used to populate tag pickers and client profile forms.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     *   - bool has_fee: Whether a business did set up a penalty fee for failed automatic payments.
     *   - bool has_surcharge: Whether a business did set up surcharges.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Tag/TagList.json', $this->params(), 'GET');
    }

    /**
     * Saves the list of tags.
Can be used to create new tags or update existing ones.
     *
     * Persists the given set of client tags for the business. Tags without a key are created;
     * tags with an existing key are updated with the new title. Requires backend access.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Tag/TagList.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'a_list' => $this->a_list,
            'json_list' => $this->json_list,
            ],
            static fn($v) => $v !== null
        );
    }
}
