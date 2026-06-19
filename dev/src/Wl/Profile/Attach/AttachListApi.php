<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Returns the list of file attachments for the specified client in the given business.
 */
class AttachListApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase to filter attach by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of file attachments for the specified client in the given business.
     *
     * Returns all file attachments uploaded to the client's profile. In backend mode the result
     *  also includes private attachments that are hidden from the client-facing view, with
     *  additional metadata such as source, description, and a delete permission flag.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Attach/AttachList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
