<?php
namespace WlSdk\Wl\Business\Search;

use WlSdk\WlSdkClient;

/**
 * Searches for businesses by name and email address and returns matching business keys.
 */
class BusinessSearchUserApi
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
     * If `true`, the return only active customers, `false` - all business.
     *
     * @var bool|null
     */
    public ?bool $is_customer = null;

    /**
     * User email to search business keys.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Given business name to search by.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for businesses by name and email address and returns matching business keys.
     *
     * Used to locate a specific business for a given client, for example during a password reset or
     * membership lookup. Returns only businesses where the email belongs to a registered member, so
     * a match confirms the client actually has an account at that business.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_result: Array with business keys that contain given name in their title.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Search/BusinessSearchUser.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_customer' => $this->is_customer,
            'text_mail' => $this->text_mail,
            'text_name' => $this->text_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
