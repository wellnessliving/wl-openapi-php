<?php
namespace WlSdk\Wl\Login\Search;

use WlSdk\WlSdkClient;

/**
 * Finds a user by their email or phone within the specified business.
 */
class ConcertoApi
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
     * Business to search user in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email to search.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone to search.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds a user by their email or phone within the specified business.
     *
     * Accepts exactly one of `text_mail` or `text_phone`, validates the value, and returns the user key if a
     * matching
     * active member of the business is found. Returns an error if the user is not found or if multiple users share
     * the given phone number.
     *
     * @return array Parsed JSON response data.
     *   - string uid: User's primary key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Search/Concerto.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
