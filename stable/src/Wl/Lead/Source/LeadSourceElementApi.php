<?php
namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Creates or edits a custom source lead.
 */
class LeadSourceElementApi
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_lead_source = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Name of new lead source item.
     *
     * @var string|null
     */
    public ?string $text_lead_source = null;

    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source_replace = null;

    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or edits a custom source lead.
     *
     * Accepts a list of lead source records and applies bulk create or update operations: new entries without a
     * key are inserted, and existing entries are updated with a new sort order or title.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $this->params(), 'POST');
    }

    /**
     * Adds one lead source.
     *
     * Creates a single new custom lead source with the given title for the specified business, assigns it the
     * next available sort position, and returns the generated lead source key.
     *
     * @return array Parsed JSON response data.
     *   - string k_lead_source: Key of the lead source.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $this->params(), 'PUT');
    }

    /**
     * Deletes custom source lead.
     *
     * Removes the specified custom lead source from the business. If a replacement lead source key is provided,
     * all users currently assigned to the deleted source are reassigned to it before deletion.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_lead_source' => $this->a_lead_source,
            'k_business' => $this->k_business,
            'text_lead_source' => $this->text_lead_source,
            'k_lead_source_replace' => $this->k_lead_source_replace,
            'k_lead_source' => $this->k_lead_source,
            ],
            static fn($v) => $v !== null
        );
    }
}
